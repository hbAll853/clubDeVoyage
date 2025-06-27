<?php
/**
 * Modèle de la page d'accueil
 * Utilise des template-parts pour chaque section
 */
get_header();
?>

<!-- Section Hero -->
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero.jpg');">
  <?php get_template_part('gabarit/hero'); ?>
</section>

<!-- Section Formulaire -->
<section class="inscription">
  <?php get_template_part('gabarit/formulaire'); ?>
</section>

<!-- Section Galerie -->
<section class="galerie">
  <?php get_template_part('gabarit/galerie'); ?>
</section>

<!-- Section Populaire -->
<section class="populaire">
  <?php get_template_part('gabarit/populaire'); ?>
</section>

<?php get_footer(); ?>
