<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="entete">
    <div class="entete__contenu">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo Club de Voyage" class="entete__logo">

        <nav class="entete__nav">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'entete__menu',
                    'fallback_cb' => false
                ));
            ?>
        </nav>

        <form action="#" class="recherche">
            <input type="search" class="recherche__input" placeholder="Rechercher...">
            <button class="recherche__bouton">🔍</button>
        </form>
    </div>
</header>
