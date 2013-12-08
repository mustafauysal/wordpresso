<form method="POST" action="">  
    <table class="form-table">
        <tr valign="top">
            <th scope="row">
                <label for="wordpresso_google_analytics_track_code">Google Analytics Code</label>
            </th>
            <td>
                <input type="text" name="wordpresso_google_analytics_track_code" id="wordpresso_google_analytics_track_code" placeholder="UA-17768654-1" value="<?php echo get_option('wordpresso_google_analytics_track_code'); ?>" class="regular-text"/>
            </td>
        </tr>
    </table>
    <p class="submit">
			<?php submit_button( __( 'Değişiklikleri kaydet', 'WordPresso' ), 'primary', 'save_wordpresso_settings', false ); ?>
    </p>
</form>