<?php

    add_filter( "the_title", "unhtmlentities" );
    add_action("admin_menu", "setup_wordpresso_menu");

    function unhtmlentities( $string ) {
        $trans_tbl = get_html_translation_table( HTML_ENTITIES );
        $trans_tbl = array_flip( $trans_tbl );
        $ret       = strtr( $string, $trans_tbl );

        return preg_replace( '/\&\#([0-9]+)\;/me', "chr('\\1')", $ret );
    }

    function get_section( $section_name ) {
        return get_template_part( 'pages/Section' . $section_name );
    }

    function setup_wordpresso_menu() 
    {  
        add_submenu_page('themes.php',   
            'Wordpesso Menu', '<div style="margin-left: -6px; margin-top: -6px;" class="wp-menu-image wordpresso-icon"></div>Wordpresso', 'manage_options',   
            'wordpresso', 'wordpresso_settings');   
    }  

    function wordpresso_settings()
    {

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
    <div class="wrap">  
        <?php screen_icon('themes'); ?> <h2 class="nav-tab-wrapper">Wordpresso Theme Settings 
            <a href="#" class="nav-tab nav-tab-active">Genel Ayarlar</a>
            <!-- <a href="#" class="nav-tab">Sosyal Hesaplar</a> -->
        </h2>

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

                <!--tr valign="top">
                    <th scope="row">UI ornek kullanım sekıllerı</th>
                    <td>
                        <input name="blogdescription" type="text" id="blogdescription" placeholder="burası placeholder" class="regular-text">
                        <p class="description">Ornek acıklama alanı.</p>

                        <label for="deneme1">
                            <input name="deneme1" type="checkbox" id="deneme1" value=""> Ornek checkbox alanı 1
                        </label>

                        <br>
                        <label for="deneme2">
                            <input name="deneme2" type="checkbox" id="deneme2" value="" checked="checked"> Ornek checkbox alanı 2
                        </label>
                        <label for="deneme3">
                            <input name="deneme3" type="number" step="1" min="0" id="deneme3" value="50" class="small-text"> üst seviye yorum olacak şekilde ve varsayılan olarak
                        </label>

                        <br>
                        <label for="deneme4">
                            <input name="deneme4" type="checkbox" id="deneme4" value="" checked="checked"> Ornek checkbox alanı 2
                        </label>
                        <label for="deneme5">
                            <select name="deneme5" id="deneme5">
                                <option value="newest" selected="selected">son</option>
                                <option value="oldest">ilk</option>
                            </select> sayfa gösterilecek şekilde yorumları sayfalara böl
                        </label>

                        <br>
                        <small><em>(Bu kısım dıpnot olarak kullanılır)</em></small>
                    </td>
                </tr-->
                
            </table>
            <p class="submit">
                <input type="submit" name="save_wordpresso_settings" id="submit" class="button button-primary" value="Değişiklikleri kaydet">
            </p>
        </form>  
    </div>  

    <?php 
}