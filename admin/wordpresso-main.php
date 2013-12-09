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

<div id="welcome-panel" class="welcome-panel">
	<div class="welcome-panel-content">
		<h3><?php _e( 'WordPresso’ya hoşgeldiniz!', 'WordPresso' ); ?></h3>

		<p class="about-description"><?php _e( 'Başlamanız için bir kaç bağlantıyı bir araya getirdik.', 'WordPresso' ); ?></p>
	</div>
</div>

<form method="POST" action="">
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				<label for="wordpresso_google_analytics_track_code"><?php _e( 'Google Analytics Code', 'WordPresso' ); ?></label>
			</th>
			<td>
				<input type="text" name="wordpresso_google_analytics_track_code" id="wordpresso_google_analytics_track_code" placeholder="UA-17768654-1" value="<?php echo get_option( 'wordpresso_google_analytics_track_code' ); ?>" class="regular-text" />
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				<label for=""><?php _e( 'Blog sayfa başlığı', 'WordPresso' ); ?></label>
			</th>
			<td>
				<input type="text" name="" id="" placeholder="<?php _e( 'BLOG', 'WordPresso' ); ?>" value="" class="regular-text" />
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				<label for=""><?php _e( 'Lab sayfa başlığı', 'WordPresso' ); ?></label>
			</th>
			<td>
				<input type="text" name="" id="" placeholder="<?php _e( 'LAB', 'WordPresso' ); ?>" value="" class="regular-text" />
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				<label for=""><?php _e( 'Aktivite sayfa başlığı', 'WordPresso' ); ?></label>
			</th>
			<td>
				<input type="text" name="" id="" placeholder="<?php _e( 'AKTİVİTE', 'WordPresso' ); ?>" value="" class="regular-text" />
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
			</th>
			<td>
				<?php submit_button( __( 'Değişiklikleri kaydet', 'WordPresso' ), 'primary', 'save_wordpresso_settings', false ); ?>
			</td>
		</tr>
	</table>
</form>