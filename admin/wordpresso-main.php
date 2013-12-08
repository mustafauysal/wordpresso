<?php
    if(isset($_POST['save_wordpresso_settings']))
    {
        update_option('wordpresso_google_analytics_track_code', $_POST['wordpresso_google_analytics_track_code']);
    ?>
    <div id="message" class="updated settings-error"> 
        <p><strong>Ayarlar kaydedildi.</strong></p>
    </div>
    <?php
    }      
?>
<form method="POST" action="">  
    <p>deneme genel ayarlar sayfasi</p>
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
        <input type="submit" name="save_wordpresso_settings" id="submit" class="button button-primary" value="Değişiklikleri kaydet">
    </p>
</form>