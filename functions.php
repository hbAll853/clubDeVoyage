<?php
// Charger les styles (comme tu avais fait)
function club_voyage_enqueue_styles() {
    wp_enqueue_style('club-voyage-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'club_voyage_enqueue_styles');

// Définir le chemin vers le dossier "functions"
$functions_dir = get_template_directory() . '/functions/';

// Inclure les fichiers spécifiques
include_once $functions_dir . 'mon-customizer.php';
include_once $functions_dir . 'configuration-general.php';
include_once $functions_dir . 'composant.php';

// Enregistrer le menu principal
function clubdevoyage_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Menu Principal'),
    ));
}
add_action('init', 'clubdevoyage_register_menus');
