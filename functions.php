<?php
    // 4sq map gorsel linkleri arasindaki x degerinin oldugu gibi kalmasi icin
    // tesekkurler @aligundogdu

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
            'Wordpesso Menu', '<div class="wp-menu-image wordpresso-icon"></div>Wordpresso', 'manage_options',   
            'wordpresso', 'wordpresso_settings');   
    }  

    function wordpresso_settings()
    {

        if(isset($_POST['save_wordpresso_settings']))
        {
            update_option('wordpresso_google_analytics_track_code', $_POST['wordpresso_google_analytics_track_code']);
        ?>
        <div id="message" class="updated">Settings saved</div>  
        <?php
        }      
    ?>
    <div class="wrap">  
        <?php screen_icon('themes'); ?> <h2>Wordpresso Theme Settings</h2>  
        <form method="POST" action="">  
            <table class="form-table">  
                <tr>
                    <th><label for="google_custom_search_api_key">Google Analytics Code</label></th>
                    <td><input type="text" name="wordpresso_google_analytics_track_code" size="53" id="wordpresso_google_analytics_track_code" value="<?php echo get_option('wordpresso_google_analytics_track_code'); ?>"/></td>
                </tr>
                <tr valign="top">  
                    <td colspan="2">  
                        <input type="submit" name="save_wordpresso_settings" class="button-primary" value="Save Changes"/>
                    </td>  
                </tr> 
            </table>  
        </form>  
    </div>  

    <?php 
}