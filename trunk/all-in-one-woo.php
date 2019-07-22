<?php
/**
 * Plugin Name: All In One Woo
 * Plugin URI: https://wordpress.org/plugins/all-in-one-woo/
 * Description: All WooCommerce cookies :) here!
 * Version: 1.0.1
 * Author: Zakir Sajib
 * Author URI: https://zakirsajib.netlify.com
 * Developer: Zakir Sajib
 * Developer URI: https://zakirsajib.netlify.com
 * Text Domain: all-in-one-woo
 * License: GPL2

 * WC requires at least: 2.5.5
 * WC tested up to: 3.6.5

 * Copyright: © 2009-2019 WooCommerce.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

if ( ! defined( 'ABSPATH' ) ) { 
	exit; // Exit if accessed directly
}
/**
 * WooCommerce fallback notice.
 *
 * @since 4.1.2
 * @return string
 */
function woocommerce_allinone_missing_wc_notice() {
	/* translators: 1. URL link. */
	echo '<div class="error"><p><strong>' . sprintf( esc_html__( 'All In One Woo requires WooCommerce to be installed and active. You can download %s here.', 'all_in_one_woo' ), '<a href="https://woocommerce.com/" target="_blank">WooCommerce</a>' ) . '</strong></p></div>';
}

add_action( 'plugins_loaded', 'woocommerce_allinone_init' );

function woocommerce_allinone_init() {

	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'woocommerce_allinone_missing_wc_notice' );
		return;
	}

	if (!class_exists("AllInOneWoo")){
		class AllInOneWoo {
			function __construct(){
				add_action('admin_init', array($this, 'register_allinone_settings'));
				add_action('admin_enqueue_scripts', array($this,'all_in_one_woo_enqueue') );
				add_action('admin_menu', array($this, 'all_in_one_woo') );
				add_filter( 'woocommerce_product_add_to_cart_text', array($this,'all_in_one_woo_add_to_cart_text' ));
				add_filter( 'woocommerce_product_single_add_to_cart_text', array($this,'all_in_one_woo_add_to_cart_text' ));
				add_filter( 'woocommerce_booking_single_add_to_cart_text', array($this,'all_in_one_woo_add_to_cart_text' ));
				add_filter( 'gettext', array($this, 'all_in_one_woo_cart_text'), 999, 3);
				add_filter( 'woocommerce_shipping_package_name', array($this, 'all_in_one_woo_cart_shipping'));
				add_filter( 'wc_empty_cart_message', array($this, 'all_in_one_woo_wc_empty_cart_message' ));
				add_filter( 'woocommerce_return_to_shop_redirect', array($this, 'wc_empty_cart_redirect_url' ));
				add_filter( 'wc_product_sku_enabled', array($this, 'all_in_one_woo_remove_product_page_sku' ));
				add_action('woocommerce_after_single_product_summary', array($this, 'all_in_one_woo_remove_related_products'));
				add_action( 'woocommerce_single_product_summary', array($this, 'all_in_one_woo_woocommerce_template_single_meta') );
				
				add_filter( 'woocommerce_product_tabs', array($this, 'all_in_one_woo_remove_product_tabs'), 98);
				add_filter( 'woocommerce_product_tabs', array($this, 'all_in_one_woo_add_product_tabs'));

				
				add_filter('woocommerce_product_data_tabs', array($this, 'all_in_one_woo_product_settings_tabs' ));
				
				add_action( 'woocommerce_product_data_panels', array($this, 'all_in_one_product_panels') );
				
		add_action( 'woocommerce_process_product_meta', array($this, 'all_in_one_save_fields'), 10);
				
				
				//add_filter( 'woocommerce_product_tabs', array($this, 'all_in_one_woo_rename_tabs'), 98);
				
				add_filter( 'woocommerce_sale_flash', array($this, 'all_in_one_woo_custom_replace_sale_text') );
				
				add_filter( 'woocommerce_get_availability', array($this, 'all_in_one_woo_custom_get_availability'), 20, 2);
				
				add_filter( 'woocommerce_checkout_fields', array($this, 'all_in_one_woo_custom_rename_wc_checkout_fields'), 10 );
				
				add_filter( 'woocommerce_default_address_fields' , array($this, 'custom_override_default_address_fields' ));
				
				add_action( 'woocommerce_admin_order_data_after_shipping_address', array($this, 'my_shipping_custom_checkout_field_display_admin_order_meta'), 10, 1 );

				add_action( 'woocommerce_admin_order_data_after_billing_address', array($this, 'my_billing_custom_checkout_field_display_admin_order_meta'), 10, 1 );
				
				add_action('wp_head', array($this, 'all_in_one_woo_color'));
				
				// Misc
				add_action( 'woocommerce_register_form_start', array($this, 'woocom_extra_register_fields'));
				add_action('woocommerce_created_customer', array($this, 'woocom_save_extra_register_fields'));
				
				// Tracking
				add_action( 'woocommerce_thankyou', array($this, 'allinone_conversion_tracking_thank_you_page' ));
				
				add_action('admin_head', array($this, 'custom_product_tab_icon'));
			}
			
			function custom_product_tab_icon(){
				echo '<style>
				#woocommerce-product-data ul.wc-tabs li.allinone_tab_options.allinone_tab_tab a:before{
					content: "\f535";
				}
				</style>';
			}
			
	        public static function activate()
	        {
	            flush_rewrite_rules();
	        } // END public static function activate
	    
	             
	        public static function deactivate()
	        {
	            $option_name = 'allinonewoo-group';
	            delete_option($option_name);
	            // for site options in Multisite
	            delete_site_option($option_name);
	            flush_rewrite_rules();
	        } // END public static function deactivate
			
			function all_in_one_woo_color(){
				include( plugin_dir_path( __FILE__ ) . 'public/css/css.php');
			}
			
			
			function all_in_one_woo_enqueue(){
				wp_enqueue_style( 'all-in-one-woo-style', plugins_url( '/public/css/style.css' , __FILE__ ) );
				wp_enqueue_style( 'wp-color-picker' );
				
				wp_enqueue_script( 'jquery-ui-tabs' );
				wp_register_script( 'all-in-one-woo-js', plugins_url( '/public/js/all-in-one-woo.js' , __FILE__ ), array('jquery'), false, false );
				wp_enqueue_script( 'all-in-one-woo-js' );
				wp_enqueue_script( 'wp-color-picker' );
				wp_enqueue_script( 'wp-color-picker-script', plugins_url('/public/js/wp-color-picker-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
			}
			function all_in_one_woo(){
				$page_title = 'All In One Woo';
				$menu_title = 'All In One Woo';
				$capability = 'manage_options';
				$menu_slug  = 'all-in-one-woo-menu';
				$function   = array($this, 'all_in_one_woo_menu');
				$icon_url   = 'dashicons-layout';
				$position   = 59;
				
				add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);				
			}
			
			# Wordpress internal registration
			function register_allinone_settings(){
				include( plugin_dir_path( __FILE__ ) . 'includes/default-values.php');
			}	
			
			function all_in_one_woo_menu(){?>
				<div class="wrap">
					<h1><?php _e('All In One Woo', 'all-in-one-woo'); ?></h1>
					<?php $this->show_navigation();?>
				</div><?php }
				
			function show_navigation(){
				$tabs = array(
		        	'first'   => __( 'Shop/Products', 'all-in-one-woo' ), 
					'second'  => __( 'Checkout Page', 'all-in-one-woo' ),
					'third'  => __( 'Cart Page', 'all-in-one-woo' ),
					'fourth'  => __( 'Products', 'all-in-one-woo' ),
					'fifth'  => __( 'Change Colors', 'all-in-one-woo' ),
					'sixth'  => __( 'My Account', 'all-in-one-woo' ),
					'seventh'  => __( 'Tracking', 'all-in-one-woo' ),
					'eighth'  => __( 'Misc', 'all-in-one-woo' )
				);
			    echo '<div id="tabs">';
				    $html ='<ul class="nav-tab-wrapper">';
				    foreach( $tabs as $tab => $name ){
				        $html .= '<li><a class="nav-tab" href="#' . $tab . '">' . $name . '</a></li>';
				    }
				    $html .= '</ul>';
					echo $html;
			    	$this->show_navigation_contents();
				echo '</div>';
			}
			
			function show_navigation_contents(){?>
				<form method="post" id="allinonewoo" name="form" action="options.php">
				   	<?php settings_fields('allinonewoo-group'); ?>
				   	<?php do_settings_sections('allinonewoo-group'); ?>
				   	<?php settings_errors(); ?>
				   	<?php $options = get_option('allinonewoo-group'); ?>
						<br class="clear">
						<div id="first"> 
						   <?php include( plugin_dir_path( __FILE__ ) . 'includes/rename-labels.php');?>
						</div>
						<div id="second">
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/checkout-tab.php');?>
						</div>
						<div id="third">
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/cart-tab.php');?>
						</div>
						<div id="fourth"> 
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/product-tab.php');?>
						</div>
						<div id="fifth"> 
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/color-tab.php');?>
						</div>
						<div id="sixth">
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/my-account.php');?>
						</div>
						<div id="seventh">
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/tracking.php');?>
						</div>
						<div id="eighth">
							<?php include( plugin_dir_path( __FILE__ ) . 'includes/misc.php');?>
						</div>
						<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes', 'allinonewoo') ?>" /></p>
				</form>				   
			<?php 
			}
			
			
			// Change add to cart button
			function all_in_one_woo_add_to_cart_text() {
				global $product;
				$product_type = $product->get_type();
				$options = get_option('allinonewoo-group');
				switch ( $product_type ) {
					case 'external':
						return __( $options['buy-product'], 'woocommerce' );
					break;
					case 'grouped':
						return __( $options['view-products'], 'woocommerce' );
					break;
					case 'simple':
						return __( $options['add-to-cart'], 'woocommerce' );
					break;
					case 'variable':
						return __( $options['select-options'], 'woocommerce' );
					break;
					default:
						return __( 'Read more', 'woocommerce' );
				}	
			}
			// Change texts in cart page
			function all_in_one_woo_cart_text($translated_text, $text, $domain) {
					$options = get_option('allinonewoo-group');
					$translated_text = str_replace( 'Product', $options['product-col'], $translated_text );
					$translated_text = str_replace( 'Price', $options['price-col'], $translated_text );
					$translated_text = str_replace( 'Quantity', $options['qty-col'], $translated_text );
					$translated_text = str_replace( 'Total', $options['total-col'], $translated_text );
					$translated_text = str_replace( 'Coupon code', $options['coupon-code-field'], $translated_text );
					$translated_text = str_replace( 'Apply coupon', $options['apply-coupon-field'], $translated_text );
					$translated_text = str_replace( 'Update cart', $options['update-cart-field'], $translated_text );
					$translated_text = str_replace( 'Cart totals', $options['cart-totals-field'], $translated_text );
					$translated_text = str_replace( 'Subtotal', $options['subtotal-field'], $translated_text );
					$translated_text = str_replace( 'Calculate shipping', $options['calculate-shipping-field'], $translated_text );
					$translated_text = str_replace( 'Update totals', $options['update-totals-field'], $translated_text );
					$translated_text = str_replace( 'Proceed to checkout', $options['proceed-to-checkout-field'], $translated_text );
					$translated_text = str_replace( 'Return to shop', $options['return-to-shop-field'], $translated_text );
					$translated_text = str_replace( 'View cart', $options['view-cart-field'], $translated_text );
					
					$translated_text = str_replace( 'Billing details', $options['rename-billing'], $translated_text );
					$translated_text = str_replace( 'Ship to a different address', $options['rename-shipping'], $translated_text );
					$translated_text = str_replace( 'Your order', $options['rename-your-order'], $translated_text );
					$translated_text = str_replace( 'Place order', $options['rename-place-order'], $translated_text );

				return $translated_text;
			}
			
			
			// Change Shipping label in cart page
			function all_in_one_woo_cart_shipping( $sprintf ){
				if(!is_admin()):
					$options = get_option('allinonewoo-group');
					$sprintf = $options['shipping-field'];
				endif;	
				return $sprintf;
			}
			/**
			* Change 'Your cart is currently empty.' texts 
			* when cart is empty.
			**/
			function all_in_one_woo_wc_empty_cart_message() {
			  if(!is_admin()):
			  		$options = get_option('allinonewoo-group');
			  		$custom_empty_cart_message = $options['your-cart-empty-field'];
			  endif;
			  return $custom_empty_cart_message;
			}
			// Change URL of Return to shop
			function wc_empty_cart_redirect_url() {
				if(!is_admin()):
					$options = get_option('allinonewoo-group');
			  		$custom_empty_cart_url = $options['return-to-shop-field-url'];
				endif;
				return $custom_empty_cart_url;
				//return $_SERVER['HTTP_REFERER'];
			}
			 
			//Hide SKU @ Single Product Page - WooCommerce

			function all_in_one_woo_remove_product_page_sku( $enabled ) {				
			    if ( !is_admin() && is_product() ) {
				    $options = get_option('allinonewoo-group');
					if (array_key_exists("hide-sku",$options)):
						return false;
					else: $options['hide-sku'] = false;
						//$hide_sku = $options['hide-sku'];
						//if($hide_sku == 1):
						return true; //only if its frontend+single product
			        endif;
			    }
			    return $enabled;
			}

			//Hide Related products @ Single Product Page - WooCommerce

			function all_in_one_woo_remove_related_products(){
				if ( !is_admin() && is_product() ) {
					$options = get_option('allinonewoo-group');
					if (array_key_exists("hide-related-products",$options)):
					remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
					else: $options['hide-related-products'] = false;
					add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
					endif;
				}
			}

			//Hide Categories block @ Single Product Page - WooCommerce

			function all_in_one_woo_woocommerce_template_single_meta(){
				if ( !is_admin() && is_product() ) {
					$options = get_option('allinonewoo-group');
					if (array_key_exists("hide-categories",$options)):
					remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
					else: $options['hide-categories'] = false;
					add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
					endif;
				}
			}

			// Hide tabs @ Single Product Page - WooCommerce

			function all_in_one_woo_remove_product_tabs($tabs){
				if ( !is_admin() && is_product() ) {
					$options = get_option('allinonewoo-group');
					//$hide_reviews_tab = $options['hide-reviews-tab'];
					//$hide_desc_tab = $options['hide-desc-tab'];
					//$hide_additional_tab = $options['hide-additional-tab'];
					
					$rename_desc_tab = $options['rename-desc-tab'];
					$rename_reviews_tab = $options['rename-reviews-tab'];
					$rename_add_tab = $options['rename-add-tab'];
					
					if (array_key_exists("hide-reviews-tab",$options)):
						unset( $tabs['reviews'] ); 
					else:
						$tabs['reviews']['title'] = __( $rename_reviews_tab );
					endif;
					
					if (array_key_exists("hide-desc-tab",$options)):
						unset( $tabs['description'] );
					else:
						$tabs['description']['title'] = __( $rename_desc_tab );
					endif;
					if (array_key_exists("hide-additional-tab",$options)):
						unset( $tabs['additional_information'] ); 
					else:
						$tabs['additional_information']['title'] = __( $rename_add_tab );	
					endif;
				}
				return $tabs;
			}

			
			function all_in_one_woo_add_product_tabs($tabs){
				// Add the new tab in frontend product page
				$options = get_option('allinonewoo-group');
				$new_tab = $options['new-tab'];

				$tabs['all_in_one_tab'] = array(
					'title' 	=> $new_tab,		
					'priority' 	=> 50,
					'callback' 	=> 'woo_new_product_tab_content'
				);
				return $tabs;
			}			

			function all_in_one_woo_product_settings_tabs($tabs){
				$options = get_option('allinonewoo-group');
				$new_tab = $options['new-tab'];
				$tabs['allinone_tab'] = array(
					'label' 	=> __( $new_tab ),
					'priority' 	=> 21,
					'target'   => 'allinone_product_data'
				);
				return $tabs;
			}
			
			function all_in_one_product_panels(){
				
				global $woocommerce, $post;
				
				$options = get_option('allinonewoo-group');
				$new_tab = $options['new-tab'];
				$new_tab_name = $options['new-tab-name'];
				$new_tab_descr = $options['new-tab-descr'];
				$type = $options['type'];
				$option_one = $options['select-val-one'];
				$option_two = $options['select-val-two'];
					
				echo '<div id="allinone_product_data" class="panel woocommerce_options_panel hidden">';
				
				if($type == 'textarea'):
					woocommerce_wp_textarea_input( array(
						'id'                => 'all_in_one_new_tab',
						'value'             => get_post_meta( $post->ID, 'all_in_one_new_tab', true ),
						'label'             => $new_tab_name,
						'desc_tip'    => true,
						'description'       => $new_tab_descr
					) );
				elseif($type == 'textfield'):
					woocommerce_wp_text_input( array(
						'id'                => 'all_in_one_new_tab',
						'value'             => get_post_meta( $post->ID, 'all_in_one_new_tab', true ),
						'label'             => $new_tab_name,
						'desc_tip'    => true,
						'description'       => $new_tab_descr
					) );
				elseif($type == 'check'):
					woocommerce_wp_checkbox( array(
						'id'                => 'all_in_one_new_tab',
						'value'             => get_post_meta( $post->ID, 'all_in_one_new_tab', true ),
						'label'             => $new_tab_name,
						'description'       => $new_tab_descr
					) );
				elseif($type == 'select'):
					woocommerce_wp_select( array(
						'id'                => 'all_in_one_new_tab',
						'value'             => get_post_meta( $post->ID, 'all_in_one_new_tab', true ),
						'label'             => $new_tab_name,
						'description'       => $new_tab_descr,
						'options' => array(
							$option_one   => __( $option_one, 'woocommerce' ),
							$option_two   => __( $option_two, 'woocommerce' )
						)
					) );
				endif;
 
				echo '</div>';
			}
			
			function all_in_one_save_fields( $post_id ){
				$woocommerce_text_field = $_POST['all_in_one_new_tab'];
				if( !empty( $woocommerce_text_field ) ):
					update_post_meta( $post_id, 'all_in_one_new_tab', esc_attr( $woocommerce_text_field ) );
				endif;
			}
			

			
			// Rename Sale badge text @ Single Product Page - WooCommerce
			function all_in_one_woo_custom_replace_sale_text( $html ) {
				if ( !is_admin()){
					$options = get_option('allinonewoo-group');
					$rename_sale = $options['rename-sale'];
					return str_replace( __( 'Sale!', 'woocommerce' ), __( $rename_sale, 'woocommerce' ), $html );
				}
				
			}
			// Rename in stock and out of stock @ Single Product Page - WooCommerce
			function all_in_one_woo_custom_get_availability($availability, $_product){
				
				if ( !is_admin() && is_product() ){
					$options = get_option('allinonewoo-group');
					if ( $_product->is_in_stock() ):
						// Change In Stock Text
						$qty = $_product->get_stock_quantity();
						$rename_in_stock = $options['rename-in-stock'];
						$availability['availability'] = __( "{$qty} {$rename_in_stock}", 'woocommerce' );
					else:
					$rename_out_stock = $options['rename-out-stock'];
					$availability['availability'] = __( "{$rename_out_stock}", 'woocommerce' );
					endif; 
				    
				    return $availability;
			    }
			}
			function all_in_one_woo_rename_tabs($tabs){
				global $product;
				if ( !is_admin() && is_product() ) {
					$options = get_option('allinonewoo-group');
					$rename_desc_tab = $options['rename-desc-tab'];
					$rename_reviews_tab = $options['rename-reviews-tab'];
					$rename_add_tab = $options['rename-add-tab'];
					
					$tabs['description']['title'] = __( $rename_desc_tab );
					$tabs['reviews']['title'] = __( $rename_reviews_tab );
					if( $product->has_attributes() || 
					$product->has_dimensions() || 
					$product->has_weight() ) { 
						$tabs['additional_information']['title'] = __( $rename_add_tab );
					}
				}
				return $tabs;
			}
			// WooCommerce Rename Checkout Fields
			
			function custom_override_default_address_fields( $address_fields ) {
				$options = get_option('allinonewoo-group');
				$address_fields['first_name']['label'] = $options['rename-fname'];
				$address_fields['last_name']['label'] = $options['rename-lname'];
				$address_fields['company']['label'] = $options['rename-company'];
				$address_fields['country']['label'] = $options['rename-country'];
				$address_fields['address_1']['label'] = $options['rename-street'];
				$address_fields['address_1']['placeholder'] = $options['rename-address1'];
				$address_fields['address_2']['placeholder'] = $options['rename-address2'];
				$address_fields['city']['label'] = $options['rename-city'];
				$address_fields['city']['placeholder'] = $options['rename-city'];
								
				$address_fields['postcode']['label'] = $options['rename-postcode'];
				
				return $address_fields;
			}
			
			
			
			function all_in_one_woo_custom_rename_wc_checkout_fields( $fields ) {
				if ( !is_admin() && is_checkout() ) {
					$options = get_option('allinonewoo-group');
					$fields['billing']['billing_phone']['label'] = $options['rename-phone'];
					$fields['billing']['billing_email']['label'] = $options['rename-email'];
					
					$fields['order']['order_comments']['label'] = $options['rename-order-comments'];
					$fields['order']['order_comments']['placeholder'] = $options['rename-order-comments-placeholder'];
					
					//$remove_new_billing = $options['remove-new-billing'];
					//$remove_new_shipping = $options['remove-new-shipping'];
					
/*
					
					if (array_key_exists("remove-new-shipping",$options)):
						unset($fields['shipping']['shipping_phone']);
					else:
						if (array_key_exists("req-one",$options)):
					
					$fields['shipping']['shipping_phone'] = array(
				        'label'     => $options['name-one-shipping'],
						'placeholder'   => $options['placeholder-one-shipping'],
						'required'  => $options['req-one'],
						'class'     => array('form-row-wide'),
						'clear'     => true
				     ); endif;
				     endif;
				     
				     if (array_key_exists("remove-new-billing",$options)):
						unset($fields['billing']['billing_name_one']);
					 else:
					 	if (array_key_exists("req-one-billing",$options)):
					$fields['billing']['billing_name_one'] = array(
				        'label'     => $options['name-one-billing'],
						'placeholder'   => $options['placeholder-one-billing'],
						'required'  => $options['req-one-billing'],
						'class'     => array('form-row-wide'),
						'clear'     => true
				     );endif;
				     endif;
*/
				}
				return $fields;	
			}
			
			/**
			* Display field value on the order edit page
			*/
			function my_shipping_custom_checkout_field_display_admin_order_meta($order){
			    $options = get_option('allinonewoo-group');
				$remove_new_shipping = $options['remove-new-shipping'];
				if($remove_new_shipping == 0):
			    	echo '<p><strong>'.__('From Checkout Form').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_phone', true ) . '</p>';
			    endif;
			}
			
			function my_billing_custom_checkout_field_display_admin_order_meta($order){
			    $options = get_option('allinonewoo-group');
			    $remove_new_billing = $options['remove-new-billing'];
			    if($remove_new_billing == 0):
			    	echo '<p><strong>'.__('From Checkout Form').':</strong> ' . get_post_meta( $order->get_id(), '_billing_name_one', true ) . '</p>';
			    endif;
			}
			
			
			// extra fields in my accounts
			function woocom_extra_register_fields() {
				$options = get_option('allinonewoo-group');
				
				$first_name = $options['first-name'];
				if($first_name == 1):?>
			        <p class="form-row form-row-wide">
					<label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" /></p>
			    <?php endif;
				$last_name = $options['last-name'];
				if($last_name == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" /></p>
				<?php endif;
				
				$address1 = $options['address1'];
				if($address1 == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_billing_address_1"><?php _e( 'Address Line 1', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="input-text" name="billing_address_1" id="reg_billing_address_1" value="<?php if ( ! empty( $_POST['billing_address_1'] ) ) esc_attr_e( $_POST['billing_address_1'] ); ?>" /></p>
				<?php endif;
				$address2 = $options['address2'];
				if($address2 == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_billing_address_2"><?php _e( 'Address Line 2', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="input-text" name="billing_address_2" id="reg_billing_address_2" value="<?php if ( ! empty( $_POST['billing_address_2'] ) ) esc_attr_e( $_POST['billing_address_2'] ); ?>" /></p>
				<?php endif;
				
				$company = $options['company'];
				if($company == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_company"><?php _e( 'Company', 'woocommerce' ); ?></label><input type="text" class="input-text" name="billing_company" id="reg_billing_company" value="<?php if ( ! empty( $_POST['billing_company'] ) ) esc_attr_e( $_POST['billing_company'] ); ?>" /></p>
				<?php endif;
				
				$website = $options['website'];
				if($website == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_website"><?php _e( 'Website', 'woocommerce' ); ?></label><input type="text" class="input-text" name="website_url" id="reg_website" value="<?php if ( ! empty( $_POST['website_url'] ) ) esc_attr_e( $_POST['website_url'] ); ?>" /></p>
				<?php endif;
				
				$city = $options['city'];
				if($city == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_city"><?php _e( 'City', 'woocommerce' ); ?></label><input type="text" class="input-text" name="billing_city" id="reg_billing_city" value="<?php if ( ! empty( $_POST['billing_city'] ) ) esc_attr_e( $_POST['billing_city'] ); ?>" /></p>
				<?php endif;
				
				$postcode = $options['postcode'];
				if($postcode == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_postcode"><?php _e( 'Postcode / ZIP', 'woocommerce' ); ?></label><input type="text" class="input-text" name="billing_postcode" id="reg_billing_postcode" value="<?php if ( ! empty( $_POST['billing_postcode'] ) ) esc_attr_e( $_POST['billing_postcode'] ); ?>" /></p>
				<?php endif;
					
				$phone = $options['phone'];
				if($phone == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label><input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" /></p>
				<?php endif;	
				
				$user_bio = $options['user-bio'];
				if($user_bio == 1):?>
					<p class="form-row form-row-wide">
					<label for="reg_user_bio"><?php _e( 'Biographical Info', 'woocommerce' ); ?></label><textarea rows="5" cols="30" class="input-text" name="user_bio" id="reg_user_bio"><?php if ( ! empty( $_POST['user_bio'] ) ) esc_attr_e( $_POST['user_bio'] ); ?></textarea></p>
				<?php endif;
				
				if(!empty($options['country'])):
					$country = $options['country'];
					if($country == 1):
						wp_enqueue_script( 'wc-country-select' );
					    woocommerce_form_field( 'billing_country', array(
					        'type'      => 'country',
					        'class'     => array('chzn-drop'),
					        'label'     => __('Country'),
					        'placeholder' => __('Choose your country.'),
					        'required'  => false,
					        'clear'     => true
					    ));	
					endif;
				endif;
				
				if(!empty($options['district'])):
					$district = $options['district'];
					if($district == 1):?>
						<p class="form-row form-row-wide">
						<label for="reg_billing_state"><?php _e( 'State / County', 'woocommerce' ); ?></label><input type="text" class="input-text" name="billing_state
	" id="reg_billing_state" value="<?php if ( ! empty( $_POST['billing_state
	'] ) ) esc_attr_e( $_POST['billing_state'] ); ?>" /></p>
					<?php endif;
				endif;
			}
			//save
			function woocom_save_extra_register_fields($customer_id) {
				if (isset($_POST['billing_first_name'])) {
					update_user_meta($customer_id, 'billing_first_name', sanitize_text_field($_POST['billing_first_name']));
					wp_update_user( array( 'ID' => $customer_id, 'first_name' => sanitize_text_field($_POST['billing_first_name']) ) );
				}
				if (isset($_POST['billing_last_name'])) {
					update_user_meta($customer_id, 'billing_last_name', sanitize_text_field($_POST['billing_last_name']));
					wp_update_user( array( 'ID' => $customer_id, 'last_name' => sanitize_text_field($_POST['billing_last_name']) ) );
				}
				if (isset($_POST['billing_address_1'])) {
					update_user_meta($customer_id, 'billing_address_1', sanitize_text_field($_POST['billing_address_1']));
				}
				if (isset($_POST['billing_address_2'])) {
					update_user_meta($customer_id, 'billing_address_2', sanitize_text_field($_POST['billing_address_2']));
				}
				
				if (isset($_POST['billing_company'])) {
					update_user_meta($customer_id, 'billing_company', sanitize_text_field($_POST['billing_company']));
				}
				
				if (isset($_POST['website_url'])) {
					wp_update_user( array( 'ID' => $customer_id, 'user_url' => sanitize_text_field($_POST['website_url']) ) );
				}
				
				if (isset($_POST['user_bio'])) {
					wp_update_user( array( 'ID' => $customer_id, 'description' => sanitize_textarea_field($_POST['user_bio']) ) );
				}
				
				if (isset($_POST['billing_city'])) {
					update_user_meta($customer_id, 'billing_city', sanitize_text_field($_POST['billing_city']));
				}
				if (isset($_POST['billing_postcode'])) {
					update_user_meta($customer_id, 'billing_postcode', sanitize_text_field($_POST['billing_postcode']));
				}
				if (isset($_POST['billing_phone'])) {
					update_user_meta($customer_id, 'billing_phone', sanitize_text_field($_POST['billing_phone']));
				}
				if (isset($_POST['billing_country'])) {
					update_user_meta($customer_id, 'billing_country', sanitize_text_field($_POST['billing_country']));
				}
				if (isset($_POST['billing_state'])) {
					update_user_meta($customer_id, 'billing_state', sanitize_text_field($_POST['billing_state']));
				}
			}
			// validation
			function woocom_validate_extra_register_fields( $username, $email, $validation_errors ){
				if (isset($_POST['billing_first_name']) && empty($_POST['billing_first_name']) ) {
				$validation_errors->add('billing_first_name_error', __('First Name is required!', 'woocommerce'));
				}
				
				if (isset($_POST['billing_last_name']) && empty($_POST['billing_last_name']) ) {
				$validation_errors->add('billing_last_name_error', __('Last Name is required!', 'woocommerce'));
				}
				
				if (isset($_POST['billing_address_1']) && empty($_POST['billing_address_1']) ) {
				$validation_errors->add('billing_address_1_error', __('Address Line is required!', 'woocommerce'));
				}
				
			return $validation_errors;
			}
			
			// Tracking code
			function allinone_conversion_tracking_thank_you_page() {
				$options = get_option('allinonewoo-group');
				$tracking_option = $options['custom-tracking-option'];
				$custom_tracking = $options['custom-tracking'];
				
				if($tracking_option == 1):
					if(!empty($custom_tracking)):
						echo $custom_tracking;
					endif;
				endif;
			}			
		}// end class
	}// end if
	
	function woo_new_product_tab_content() {
		// The new tab content
		$all_in_one_new_tab = get_post_meta( get_the_ID(), 'all_in_one_new_tab', true );
		$options = get_option('allinonewoo-group');
		$new_tab_name = $options['new-tab-name'];
		echo '<h2>'.$new_tab_name.'</h2>';
		echo '<p> '.$all_in_one_new_tab.' </p>';
	}
	
	
	# Object Creation here: Important
	if (class_exists("AllInOneWoo")){	
		// Installation and uninstallation hooks
		register_activation_hook(__FILE__, array('WP_Plugin_Template', 'activate'));
		register_deactivation_hook(__FILE__, array('WP_Plugin_Template', 'deactivate'));
		$all_in_one_woo = new AllInOneWoo();
	}
}?>