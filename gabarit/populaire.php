<h2 class="populaire__titre">Destinations Populaires</h2>
<div class="populaire__grille">
  <?php
  $args = array(
    'posts_per_page' => 6,
    'orderby' => 'rand'
  );
  $populaires = new WP_Query($args);
  if ($populaires->have_posts()) :
    while ($populaires->have_posts()) : $populaires->the_post();
      get_template_part('gabarit/carte');
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>
