<?php
/**
 * Pied de page personnalisé
 */
$footer_couleur = "#356494";
$adresse = get_theme_mod('footer_adresse', '456 rue club voyage');
$email   = get_theme_mod('footer_email', 'clubvoyage@example.com');
$texte   = get_theme_mod('footer_texte', '© 2025 Club de Voyage – Tous droits réservés');

vague('#ddd', $footer_couleur);
?>

<footer class="piedpage" style="background-color: <?= $footer_couleur ?>;">
  <div class="global pieddepage__contenu">

    <!-- Colonne Contact -->
    <div class="pieddepage__colonne">
      <h4>Contact</h4>
      <p><strong>Adresse :</strong><br><?= esc_html($adresse) ?></p>
      <p><strong>Téléphone :</strong><br><a href="tel:5141234567">(514) 123-4567</a></p>
      <p><strong>Courriel :</strong><br><a href="mailto:<?= esc_attr($email) ?>"><?= esc_html($email) ?></a></p>
    </div>

    <!-- Colonne Liens utiles -->
    <div class="pieddepage__colonne">
      <h4>Liens utiles</h4>
      <ul>
        <li><a href="#">Conseils aux voyageurs</a></li>
        <li><a href="#">Passeport Canada</a></li>
        <li><a href="#">Air Canada</a></li>
      </ul>
    </div>

    <!-- Colonne Navigation -->
    <div class="pieddepage__colonne">
      <h4>Navigation</h4>
      <?php wp_nav_menu([
        'menu' => 'externe',
        'container' => false,
        'items_wrap' => '<ul>%3$s</ul>',
      ]) ?>
    </div>

    <!-- Colonne Recherche -->
    <div class="pieddepage__colonne">
      <h4>Rechercher</h4>
      <?php get_search_form(); ?>
      <h4>Suivez-nous</h4>
      <?php icone_sociaux('#ffffff'); ?>
    </div>
  </div>

  <div class="pieddepage__desc">
    <?= esc_html($texte) ?>
  </div>
</footer>

<script src="<?= get_template_directory_uri(); ?>/script/checkbox.js"></script>
<?php wp_footer(); ?>
</body>
</html>
