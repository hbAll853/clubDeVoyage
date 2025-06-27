<?php
/**
 * Template pour afficher un article (single destination)
 */
get_header();
?>

<main class="single">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="single__contenu">
        <?php the_post_thumbnail('large', ['class' => 'single__image']); ?>

        <div class="single__texte">
          <h1 class="single__titre"><?php the_title(); ?></h1>

          <div class="single__infos">
            <div class="temperature">
              <p><span class="pastille pastille--bleu"></span><strong>Température min :</strong> <?php the_field('temperature_min'); ?>°C</p>
              <p><span class="pastille pastille--rouge"></span><strong>Température max :</strong> <?php the_field('temperature_max'); ?>°C</p>
              <p><span class="pastille pastille--orange"></span><strong>Température moyenne :</strong> <?php the_field('temperature_moy'); ?>°C</p>
            </div>

            <p class="single__appreciation">
              <strong>Appréciation :</strong>
              <?php
              $note = get_field('appreciation');
              if ($note) {
                echo $note . ' <span class="etoile">⭐</span>';
              }
              ?>
            </p>
          </div>

          <div class="single__description">
            <?php the_content(); ?>
          </div>

          <p class="single__categories">
            <strong>Catégories :</strong>
            <?php the_category(', '); ?>
          </p>

          <a href="<?php echo site_url(); ?>" class="single__retour">← Retour à la galerie</a>
        </div>
      </article>
  <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>
