<section class="populaire global">
  <h2 class="populaire__titre">Destinations populaires</h2>
  <div class="populaire__grille">
    <?php
    $populaires = new WP_Query([
      'category_name' => 'aventure,culturel,sport',
      'posts_per_page' => 6
    ]);
    while ($populaires->have_posts()) : $populaires->the_post(); ?>
      <article class="carte">
        <div class="carte__image">
          <?php the_post_thumbnail('medium_large'); ?>
          <?php if (get_field('appreciation')) : ?>
            <div class="carte__etoile">
              <?= esc_html(get_field('appreciation')); ?> ⭐
            </div>
          <?php endif; ?>
        </div>

        <div class="carte__contenu">
          <h3><?php the_title(); ?></h3>

          <?php
          $categories = get_the_category();
          if ($categories) :
          ?>
            <div class="carte__categories">
              <?php foreach ($categories as $cat) : ?>
                <span class="carte__categorie"><?= esc_html($cat->name); ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="carte__temperature">
            <?php if (get_field('temperature_min')) : ?>
              <p>🔵 <strong>Température min:</strong> <?= esc_html(get_field('temperature_min')); ?>°C</p>
            <?php endif; ?>
            <?php if (get_field('temperature_max')) : ?>
              <p>🔴 <strong>Température max:</strong> <?= esc_html(get_field('temperature_max')); ?>°C</p>
            <?php endif; ?>
            <?php if (get_field('temperature_moy')) : ?>
              <p>🟠 <strong>Température moyenne:</strong> <?= esc_html(get_field('temperature_moy')); ?>°C</p>
            <?php endif; ?>
          </div>

          <p><?php the_excerpt(); ?></p>

          <a class="carte__bouton" href="<?php the_permalink(); ?>">Lire la suite →</a>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
