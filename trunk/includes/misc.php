<h1 class="screen-reader-text">Misc</h1>
<h2>Misc</h2>
<div class="description"><p>Misc settings</p></div><hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Minimum Order Amount', 'allinonewoo-group');?></th>
		<td>
			<input type="number" name="allinonewoo-group[min-amount]" value="<?php echo (!empty($options['min-amount'])) ?  $options['min-amount'] : 0 ?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Don’t allow PO BOX shipping', 'allinonewoo-group');?></th>
		<td>
			<?php 
			$options = get_option( 'allinonewoo-group' );
			if (array_key_exists("no-pobox",$options)):?>
			<input type="checkbox" name="allinonewoo-group[no-pobox]" value="1" <?php checked($options['no-pobox'], 1)?>/>
			<?php else:
			$options['no-pobox'] = false; ?>
			<input type="checkbox" name="allinonewoo-group[no-pobox]" value="1" <?php checked($options['no-pobox'], 1)?>/>
			<?php endif;?>
		</td>
		</tr>
	</tbody>
</table>