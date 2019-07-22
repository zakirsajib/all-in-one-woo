<?php $options = get_option('allinonewoo-group');?>
<style>
	.woocommerce .button.product_type_simple.add_to_cart_button,
	.woocommerce form.cart button.add_to_cart_button,
	.woocommerce form.cart button.single_add_to_cart_button.button.alt {
		color: <?php echo $options['add-to-cart-color']?> !important;
		border-color: <?php echo $options['add-to-cart-border']?> !important;
		background-color: <?php echo $options['add-to-cart-bgcolor']?>!important;
	}
	.woocommerce .button.product_type_external,
	.woocommerce .single_add_to_cart_button.button.alt{
		color: <?php echo $options['buy-product-color']?> !important;
		border-color: <?php echo $options['buy-product-border']?> !important;
		background-color: <?php echo $options['buy-product-bgcolor']?>!important;
	}
	.woocommerce .button.product_type_grouped{
		color: <?php echo $options['view-product-color']?> !important;
		border-color: <?php echo $options['view-product-border']?> !important;
		background-color: <?php echo $options['view-product-bgcolor']?>!important;
	}
	.woocommerce .button.product_type_variable.add_to_cart_button{
		color: <?php echo $options['select-options-color']?> !important;
		border-color: <?php echo $options['select-options-border']?> !important;
		background-color: <?php echo $options['select-options-bgcolor']?>!important;
	}
</style>