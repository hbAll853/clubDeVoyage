<?php get_header(); ?>

<main class="single global">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="single__article">
      
      <?php if (has_post_thumbnail()) : ?>
        <div class="single__image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="single__contenu">
        <h1 class="single__titre"><?php the_title(); ?></h1>
        <p class="single__date"><?= get_the_date(); ?></p>

        <div class="single__categories">
          <?php the_category(' • '); ?>
        </div>

        <div class="single__texte">
          <?php the_content(); ?>
        </div>
      </div>

    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
