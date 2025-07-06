<?php
/**
 * Gabarit : Section Hero (page d'accueil)
 */

$hero_couleur = get_theme_mod('hero_couleur', '#ffffff');
$hero_auteur = get_theme_mod('hero_auteur', 'Gustave Trotier');
$hero_adresse = get_theme_mod('hero_adresse', '356 rue Hamel');
$hero_image = get_theme_mod('hero_background');
?>

<section class="hero" style="background-image: url('<?= esc_url($hero_image) ?>'); background-size: cover; background-position: center;">
  <div class="hero__contenu animate__fadein" style="color: <?= esc_attr($hero_couleur) ?>;">
    <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <p>Auteur : <?= esc_html($hero_auteur) ?></p>
    <p>Adresse : <?= esc_html($hero_adresse) ?></p>
    <a href="#inscription" class="btn">Devenir membre</a>

    <?php icone_sociaux($hero_couleur); ?>
  </div>
</section>
