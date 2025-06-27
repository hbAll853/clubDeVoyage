<?php
/**
 * Template pour la page 404
 * Affiche une page d'erreur lorsque l'article ou la page n'existe pas
 */
get_header(); ?>

<main class="erreur404">
  <div class="erreur404__contenu">
    <h1 class="erreur404__titre">Oups ! Page introuvable 😕</h1>
    <p class="erreur404__texte">
      Il semble que la page que vous cherchez n'existe pas ou a été déplacée.
    </p>
    <a href="<?= home_url(); ?>" class="erreur404__bouton">Retour à l'accueil</a>
  </div>
</main>

<?php get_footer(); ?>
