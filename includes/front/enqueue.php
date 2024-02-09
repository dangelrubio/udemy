<?php
    function u_enqueue() {
        wp_register_style(
            'u_font_rubik_and_pacifico',
            ''
        );
        wp_register_style(
            'u_bootstrap_icons',
            get_theme_file_uri( 'assets/bootstrap-icons/bootstrap-icons.php' )
        );
        wp_register_style(
            'u_theme',
            get_theme_file_uri( 'assets/public/index.css' )
        );
        wp_enqueue_style( 'u_font_rubik_and_pacifico' );
        wp_enqueue_style( 'u_bootstrap_icons' );
        wp_enqueue_style( 'u_theme' );
    }