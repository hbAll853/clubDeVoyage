<?php
/**
 * Template-part pour une carte de destination
 */
?>
<article class="carte">
  <div class="carte__image">
    <?php the_post_thumbnail('medium_large'); ?>
    <?php if (get_field('appreciation')) : ?>
      <div class="carte__etoile"><?= esc_html(get_field('appreciation')); ?> ⭐</div>
    <?php endif; ?>
  </div>

  <div class="carte__contenu">
    <h3><?php the_title(); ?></h3>

    <div class="carte__temperature">
      <p>🔵 <strong>Température min:</strong> <?= get_field('temperature_min'); ?>°C</p>
      <p>🔴 <strong>Température max:</strong> <?= get_field('temperature_max'); ?>°C</p>
      <p>🟠 <strong>Température moyenne:</strong> <?= get_field('temperature_moy'); ?>°C</p>
    </div>

    <p><?php the_excerpt(); ?></p>
    <p><strong>Catégories :</strong> <?php the_category(', '); ?></p>
    <a class="carte__bouton" href="<?php the_permalink(); ?>">Voir plus →</a>
  </div>
</article>
