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
            <a href="#" class="nav-tab">Kapak</a>
            <a href="#" class="nav-tab">Aktivite</a>
        </h2>

        <div id="welcome-panel" class="welcome-panel">
            <div class="welcome-panel-content">
                <h3>WordPresso’ya hoşgeldiniz!</h3>
                <p class="about-description">Başlamanız için bir kaç bağlantıyı bir araya getirdik.</p>
            </div>
        </div>

        <!-- Genel Ayarlar -->
        <?php include 'wordpresso-main.php'; ?>

        <!-- Kapak -->
        <?php include 'wordpresso-cover.php'; ?>

        <!-- Aktivite -->
        <?php include 'wordpresso-activity.php'; ?>

    </div>  

    <?php 
}