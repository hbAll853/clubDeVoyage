<footer class="pieddepage">
  <div class="global pieddepage__contenu">

    <!-- Colonne 1 : Liens utiles -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Liens utiles</h4>
      <ul class="pieddepage__liens">
        <li><a href="#">Air Transat</a></li>
        <li><a href="#">TripAdvisor</a></li>
        <li><a href="#">Booking.com</a></li>
      </ul>
    </div>

    <!-- Colonne 2 : Menu principal -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Menu principal</h4>
      <?php wp_nav_menu(['theme_location' => 'menu-principal']); ?>
    </div>

    <!-- Colonne 3 : Recherche -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Recherche</h4>
      <form class="recherche">
        <input type="text" class="recherche__input" placeholder="Rechercher...">
        <button type="submit" class="recherche__bouton">🔍</button>
      </form>
    </div>

    <!-- Colonne 4 : Réseaux sociaux -->
    <div class="pieddepage__colonne">
      <h4 class="pieddepage__titre">Suivez-nous</h4>
      <a href="https://github.com/hbAll853" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/github.svg" alt="GitHub" width="24">
      </a>
    </div>

  </div>

  <p class="pieddepage__desc">© 2025 Club de Voyage — Ce site a été conçu par Hiba Ayech dans le cadre du TP1 du cours WordPress.</p>
</footer>
