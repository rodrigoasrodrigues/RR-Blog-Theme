<?php

function rrinfo_assets() {
    wp_enqueue_style('rrinfo-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', [], '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'rrinfo_assets');

function rrinfo_admin_assets() {
    wp_enqueue_style('rrinfo-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', [], '1.0.0', 'all');
}

add_action('admin_enqueue_scripts', 'rrinfo_admin_assets');

?>