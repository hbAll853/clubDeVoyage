<footer class="pieddepage">
  <div class="global pieddepage__contenu">

    <!-- Colonne 1 -->
    <div class="pieddepage__colonne">
      <h4>Liens utiles</h4>
      <ul>
        <li><a href="#">Air Transat</a></li>
        <li><a href="#">TripAdvisor</a></li>
        <li><a href="#">Booking.com</a></li>
      </ul>
    </div>

    <!-- Colonne 2 -->
    <div class="pieddepage__colonne">
      <h4>Menu principal</h4>
      <?php wp_nav_menu(['theme_location' => 'menu-principal']); ?>
    </div>

    <!-- Colonne 3 -->
    <div class="pieddepage__colonne">
      <h4>Recherche</h4>
      <form class="recherche">
        <input type="text" class="recherche__input" placeholder="Rechercher...">
        <button type="submit" class="recherche__bouton">🔍</button>
      </form>
    </div>

    <!-- Colonne 4 -->
    <div class="pieddepage__colonne">
      <h4>Suivez-nous</h4>
      <a href="https://github.com/hbAll853" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/github.svg" alt="GitHub" width="24">
      </a>
    </div>

  </div>

  <p class="pieddepage__desc">© 2025 Club de Voyage — Ce site a été conçu par Hiba Ayech dans le cadre du TP1 du cours WordPress.</p>
</footer>
