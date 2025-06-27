<?php
/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>

<main class="global">
  <h1 class="titre-page">
    Résultats de recherche pour : "<?php echo get_search_query(); ?>"
  </h1>

  <?php if (have_posts()) : ?>
    <div class="populaire__grille">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('gabarit/carte'); ?>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p>Aucun résultat trouvé pour votre recherche.</p>
    <a href="<?php echo home_url(); ?>" class="btn">← Retour à l'accueil</a>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
