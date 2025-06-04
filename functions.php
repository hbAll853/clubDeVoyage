<?php
function club_voyage_enqueue_styles() {
    wp_enqueue_style('club-voyage-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'club_voyage_enqueue_styles');

// Enregistrement du menu principal
function clubdevoyage_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Menu Principal'),
    ));
}
add_action('init', 'clubdevoyage_register_menus');
?>
