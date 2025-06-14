<section class="galerie global">
  <h2>Galerie</h2>
  <div class="conteneur conteneur__galerie">
    <?php
    $galerie = new WP_Query(['posts_per_page' => 6]);
    while ($galerie->have_posts()) : $galerie->the_post(); ?>
      <article class="conteneur__carte">
        <?php the_post_thumbnail(); ?>
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>">Voir</a>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
