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
    ?>
    <div class="wrap">  
        <?php screen_icon('themes'); ?> <h2 class="nav-tab-wrapper">Wordpresso Theme Settings 
            <a href="<?php echo get_admin_url(null,'themes.php?page=wordpresso'); ?>" class="nav-tab<?php if(!isset($_GET['tab'])):?> nav-tab-active<?php endif;?>">Genel Ayarlar</a>
            <a href="<?php echo get_admin_url(null,'themes.php?page=wordpresso&tab=cover'); ?>" class="nav-tab<?php if(isset($_GET['tab']) && $_GET['tab'] == 'cover'):?> nav-tab-active<?php endif;?>">Kapak</a>
            <a href="<?php echo get_admin_url(null,'themes.php?page=wordpresso&tab=activity'); ?>" class="nav-tab<?php if(isset($_GET['tab']) && $_GET['tab'] == 'activity'):?> nav-tab-active<?php endif;?>">Aktivite</a>
        </h2>

        <div id="welcome-panel" class="welcome-panel">
            <div class="welcome-panel-content">
                <h3>WordPresso’ya hoşgeldiniz!</h3>
                <p class="about-description">Başlamanız için bir kaç bağlantıyı bir araya getirdik.</p>
            </div>
        </div>

        <?php
            $template_directory = get_template_directory();
            $tab = isset($_GET['tab'])  ? $_GET['tab'] : 'cover';

            if(is_file( $file = $template_directory .  '/admin/wordpresso-' . $tab . '.php') || $file = $template_directory .  '/admin/wordpresso-main.php')
                include $file;
        ?>

    </div>  

    <?php 
}