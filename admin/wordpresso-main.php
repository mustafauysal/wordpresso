<?php
if ( isset( $_POST['save_wordpresso_settings'] ) ) {
	update_option( 'wordpresso_google_analytics_track_code', $_POST['wordpresso_google_analytics_track_code'] );
	?>
	<div id="message" class="updated settings-error">
		<p><strong><?php _e( 'Ayarlar kaydedildi.', 'WordPresso' ); ?></strong></p>
	</div>
<?php
}
?>
<form method="POST" action="">
	<p>deneme genel ayarlar sayfasi</p>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				<label for="wordpresso_google_analytics_track_code"><?php _e( 'Google Analytics Code', 'WordPresso' ); ?></label>
			</th>
			<td>
				<input type="text" name="wordpresso_google_analytics_track_code" id="wordpresso_google_analytics_track_code" placeholder="UA-17768654-1" value="<?php echo get_option( 'wordpresso_google_analytics_track_code' ); ?>" class="regular-text" />
			</td>
		</tr>
	</table>
	<p class="submit">
		<?php submit_button( __( 'Değişiklikleri kaydet', 'WordPresso' ), 'primary', 'save_wordpresso_settings', false ); ?>
	</p>
</form>