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

<div id="welcome-panel" class="welcome-panel">
    <div class="welcome-panel-content">
        <h3>WordPresso’ya hoşgeldiniz!</h3>
        <p class="about-description">Başlamanız için bir kaç bağlantıyı bir araya getirdik.</p>
    </div>
</div>

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
        <tr valign="top">
            <th scope="row">
                <label for="">Blog sayfa başlığı</label>
            </th>
            <td>
                <input type="text" name="" id="" placeholder="BLOG" value="" class="regular-text"/>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="">Lab sayfa başlığı</label>
            </th>
            <td>
                <input type="text" name="" id="" placeholder="LAB" value="" class="regular-text"/>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="">Aktivite sayfa başlığı</label>
            </th>
            <td>
                <input type="text" name="" id="" placeholder="AKTİVİTE" value="" class="regular-text"/>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">
            </th>
            <td>
                <input type="submit" name="save_wordpresso_settings" id="submit" class="button button-primary" value="Değişiklikleri kaydet">
            </td>
        </tr>
    </table>
</form>