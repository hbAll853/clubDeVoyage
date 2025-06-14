<?php get_header(); ?>
<main class="global">
  <h1><?php single_cat_title(); ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="categorie__article">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_post_thumbnail('medium'); ?>
      <?php the_excerpt(); ?>
    </article>
  <?php endwhile; else : ?>
    <p>Aucun article trouvé.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
