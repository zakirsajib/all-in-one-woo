<h1 class="screen-reader-text">Extra custom fields for registration form in my accounts page</h1>
<h2>Extra custom fields for registration form in my accounts page</h2><hr>
<table class="form-table">
	<tbody>
	<tr valign="top">
	<th scope="row"><?php _e('Select All', 'allinonewoo-group');?></th>
	<td>
	<input type="checkbox" name="select-all" id="select-all" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show First Name', 'allinonewoo-group');?></th>
	<td>
		<?php 
			$options = get_option( 'allinonewoo-group' );
			if (array_key_exists("first-name",$options)):?>
		<input type="checkbox" name="allinonewoo-group[first-name]" value="1" <?php checked($options['first-name'], 1)?>/>
		<?php else: $options['first-name'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[first-name]" value="1" <?php checked($options['first-name'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Last Name', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("last-name",$options)):?>
		<input type="checkbox" name="allinonewoo-group[last-name]" value="1" <?php checked($options['last-name'], 1)?>/>
		<?php else: $options['last-name'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[last-name]" value="1" <?php checked($options['last-name'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Address Line 1', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("address1",$options)):?>
		<input type="checkbox" name="allinonewoo-group[address1]" value="1" <?php checked($options['address1'], 1)?>/>
		<?php else: $options['address1'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[address1]" value="1" <?php checked($options['address1'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Address Line 2', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("address2",$options)):?>
		<input type="checkbox" name="allinonewoo-group[address2]" value="1" <?php checked($options['address2'], 1)?>/>
		<?php else: $options['address2'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[address2]" value="1" <?php checked($options['address2'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Company', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("company",$options)):?>
		<input type="checkbox" name="allinonewoo-group[company]" value="1" <?php checked($options['company'], 1)?>/>
		<?php else: $options['company'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[company]" value="1" <?php checked($options['company'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Website', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("website",$options)):?>
		<input type="checkbox" name="allinonewoo-group[website]" value="1" <?php checked($options['website'], 1)?>/>
		<?php else: $options['website'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[website]" value="1" <?php checked($options['website'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Biographical Info', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("user-bio",$options)):?>
		<input type="checkbox" name="allinonewoo-group[user-bio]" value="1" <?php checked($options['user-bio'], 1)?>/>
		<?php else: $options['user-bio'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[user-bio]" value="1" <?php checked($options['user-bio'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show City', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("city",$options)):?>
		<input type="checkbox" name="allinonewoo-group[city]" value="1" <?php checked($options['city'], 1)?>/>
		<?php else: $options['city'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[city]" value="1" <?php checked($options['city'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Postcode / ZIP', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("postcode",$options)):?>
		<input type="checkbox" name="allinonewoo-group[postcode]" value="1" <?php checked($options['postcode'], 1)?>/>
		<?php else: $options['postcode'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[postcode]" value="1" <?php checked($options['postcode'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Phone', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("phone",$options)):?>
		<input type="checkbox" name="allinonewoo-group[phone]" value="1" <?php checked($options['phone'], 1)?>/>
		<?php else: $options['phone'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[phone]" value="1" <?php checked($options['phone'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show Country', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("country",$options)):?>
		<input type="checkbox" name="allinonewoo-group[country]" value="1" <?php checked($options['country'], 1)?>/>
		<?php else: $options['country'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[country]" value="1" <?php checked($options['country'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Show State / County', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("district",$options)):?>
		<input type="checkbox" name="allinonewoo-group[district]" value="1" <?php checked($options['district'], 1)?>/>
		<?php else: $options['district'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[district]" value="1" <?php checked($options['district'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	</tbody>
</table>