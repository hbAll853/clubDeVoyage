<section class="populaire global">
  <h2>Destinations populaires</h2>
  <div class="conteneur">
    <?php
    $populaires = new WP_Query([
      'category_name' => 'aventure,culturel,sport',
      'posts_per_page' => 3
    ]);
    while ($populaires->have_posts()) : $populaires->the_post(); ?>
      <article class="conteneur__carte">
        <?php the_post_thumbnail(); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Lire plus</a>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>