<?php # -*- coding: utf-8 -*-
// Plugin Name: Cambio tema ULE-SIC-2019
//Cambio prueba
//Version: 1.0
//add_filter( 'template_directory', 't5_switch_theme', 10, 3 );

function switch_all_multisite_themes() {
    foreach ( get_sites() as $site ) {
        switch_to_blog( $site->blog_id );

        switch_theme( 'ule-wp-2018' );

        restore_current_blog();
    }
}
switch_all_multisite_themes(); 
