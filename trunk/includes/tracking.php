<h1 class="screen-reader-text">Custom tracking code for the thanks page</h1>
<h2>Custom tracking code/conversion tracking code for the thanks page</h2><hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><?php _e('Add custom tracking code ?', 'allinonewoo-group');?></th>
		<td>
			<?php 
			$options = get_option( 'allinonewoo-group' );
			if (array_key_exists("custom-tracking-option",$options)):?>
			<input type="checkbox" name="allinonewoo-group[custom-tracking-option]" value="1" <?php checked($options['custom-tracking-option'], 1)?>/>
			<?php else: $options['custom-tracking-option'] = false; ?>
			<input type="checkbox" name="allinonewoo-group[custom-tracking-option]" value="1" <?php checked($options['custom-tracking-option'], 1)?>/>
			<?php endif;?>
		</td>
		</tr>
	
		<tr valign="top" class="tracking-label">
			<th scope="row"><?php _e('Copy & paste tracking code', 'allinonewoo-group');?></th>
		<td>
			<textarea rows="25" cols="30" name="allinonewoo-group[custom-tracking]" class="large-text" id="trackingCode"><?php echo (!empty($options['custom-tracking'])) ?  $options['custom-tracking'] : ''?></textarea>
		</td>
		</tr>
	</tbody>
</table>