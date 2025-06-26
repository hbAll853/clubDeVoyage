<footer class="pieddepage">
  <div class="global pieddepage__contenu">

    <!-- Colonne 1 : Contact -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Contact</h4>
      <ul class="pieddepage__liens">
        <li><strong>Adresse :</strong><br>123 Rue Example<br>Montréal, QC H1A 1A1</li>
        <li><strong>Téléphone :</strong><br><a href="tel:5141234567">(514) 123-4567</a></li>
        <li><strong>Courriel :</strong><br><a href="mailto:info@monclub.com">info@monclub.com</a></li>
      </ul>
    </div>

    <!-- Colonne 2 : Liens utiles -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Liens utiles</h4>
      <ul class="pieddepage__liens">
        <li><a href="#">Conseils aux voyageurs</a></li>
        <li><a href="#">Passeport Canada</a></li>
        <li><a href="#">Air Canada</a></li>
      </ul>
    </div>

    <!-- Colonne 3 : Menu principal -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Navigation</h4>
      <?php wp_nav_menu(['theme_location' => 'menu-principal']); ?>
    </div>

    <!-- Colonne 4 : Recherche + Suivez-nous -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Rechercher</h4>
      <form>
        <input type="text" class="recherche__input" placeholder="Recherche...">
        <button type="submit" class="recherche__bouton">🔍</button>
      </form>

      <h4 class="pieddepage__titre" style="margin-top: 1.5rem;">Suivez-nous</h4>
      <a href="https://github.com/hbAll853" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/github.png" alt="GitHub" width="24">
      </a>
      <a href="https://www.facebook.com/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" width="24">
      </a>
    </div>

  </div>

  <p class="pieddepage__desc">© 2025 Club de Voyage — Ce site a été conçu par Hiba Ayech dans le cadre du TP1 du cours WordPress.</p>
</footer>
