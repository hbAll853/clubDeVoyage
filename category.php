<?php
/**
 * Modèle de la page de catégorie
 * Affiche les articles selon leur catégorie
 */
get_header();
?>

<main class="global">
  <h1 class="titre-page"><?php single_cat_title(); ?></h1>

  <div class="populaire__grille">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('gabarit/carte'); ?>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
