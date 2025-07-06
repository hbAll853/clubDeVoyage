<?php
/**
 * Configuration des panneaux personnalisés (Customizer)
 */

function theme_33w_customize_register($wp_customize) {

    // 🔷 SECTION HERO
    $wp_customize->add_section('hero_section', [
        'title' => __('Section Héro - Accueil'),
        'priority' => 30,
    ]);

    // Auteur
    $wp_customize->add_setting('hero_auteur', [
        'default' => 'Gustave Trotier',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('hero_auteur', [
        'label' => 'Auteur',
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    // Adresse
    $wp_customize->add_setting('hero_adresse', [
        'default' => '356 rue Hamel',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('hero_adresse', [
        'label' => 'Adresse',
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    // Image de fond
    $wp_customize->add_setting('hero_background', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', [
        'label' => 'Image en arrière-plan',
        'section' => 'hero_section',
    ]));

    // Couleur du texte
    $wp_customize->add_setting('hero_couleur', [
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', [
        'label' => 'Couleur du texte',
        'section' => 'hero_section',
    ]));

    // 🔶 SECTION FOOTER
    $wp_customize->add_section('footer_section', [
        'title' => __('Section pied de page'),
        'priority' => 40,
    ]);

    // Adresse footer
    $wp_customize->add_setting('footer_adresse', [
        'default' => '123 rue des Voyages, Montréal',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('footer_adresse', [
        'label' => 'Adresse (footer)',
        'section' => 'footer_section',
        'type' => 'text',
    ]);

    // Email footer
    $wp_customize->add_setting('footer_email', [
        'default' => 'contact@clubvoyage.com',
        'sanitize_callback' => 'sanitize_email'
    ]);
    $wp_customize->add_control('footer_email', [
        'label' => 'Courriel (footer)',
        'section' => 'footer_section',
        'type' => 'email',
    ]);

    // Texte du bas de page
    $wp_customize->add_setting('footer_texte', [
        'default' => '© 2025 Club de Voyage – Tous droits réservés',
        'sanitize_callback' => 'sanitize_text_field'
    ]);
    $wp_customize->add_control('footer_texte', [
        'label' => 'Texte bas de page',
        'section' => 'footer_section',
        'type' => 'text',
    ]);
}
add_action('customize_register', 'theme_33w_customize_register');
