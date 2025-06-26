<?php
/* 
 * Template Name: Page d'accueil
 * Description: Modèle de la page d'accueil du thème Club de Voyage
 */

get_header();
?>

<main>

    <!-- Hero Section -->
    <section class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="Plage paradisiaque" class="hero__image">
        <div class="hero__overlay">
            <h1>Voyagez Autrement avec Mondo Voyages !</h1>
            <p>Découvrez des destinations uniques et inoubliables avec Mondo Voyages.<br>Nous offrons des expériences authentiques, des paysages à couper le souffle et des aventures inspirantes.</p>
            <button class="cta">S'INSCRIRE</button>
            <div class="contact-info">
                <p>300, rue Sherbrooke, Montréal</p>
                <p>info@mondovoyage.ca | 514-999-7921</p>
            </div>
        </div>
    </section>

    <!-- Formulaire d'inscription -->
    <section class="inscription">
      <form class="inscription__form">
        <div class="champ">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" placeholder="Écrivez votre nom" required>
        </div>
        <div class="champ">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" placeholder="Écrivez votre prénom" required>
        </div>
        <div class="champ">
          <label for="email">Courriel</label>
          <input type="email" id="email" name="email" placeholder="Écrivez votre courriel" required>
        </div>
        <div class="champ">
          <label for="telephone">Téléphone</label>
          <input type="tel" id="telephone" name="telephone" placeholder="Écrivez votre téléphone" required>
        </div>
        <button type="submit" class="btn">S'INSCRIRE</button>
      </form>
    </section>

    <!-- Galerie -->
<section class="galerie">
  <h2 class="galerie__titre">Nos Destinations</h2>
  <div class="galerie__grille">
    <div class="galerie__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/destination1.jpg" alt="Bali, Indonésie" class="galerie__image">
      <h3>Bali, Indonésie</h3>
      <p>Plages de sable fin, temples majestueux et rizières en terrasses, un paradis exotique à découvrir.</p>
    </div>
    <div class="galerie__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/destination2.jpg" alt="Paris, France" class="galerie__image">
      <h3>Paris, France</h3>
      <p>La Ville Lumière avec sa Tour Eiffel, ses musées et sa gastronomie inoubliable.</p>
    </div>
    <div class="galerie__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/destination3.jpg" alt="Tokyo, Japon" class="galerie__image">
      <h3>Tokyo, Japon</h3>
      <p>Un mélange fascinant de traditions et de modernité, entre temples anciens et gratte-ciel futuristes.</p>
    </div>
    <div class="galerie__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/destination4.jpg" alt="New York, USA" class="galerie__image">
      <h3>New York, USA</h3>
      <p>La ville qui ne dort jamais, entre gratte-ciel, comédies musicales et Central Park.</p>
    </div>
    <div class="galerie__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/destination5.jpg" alt="Rome, Italie" class="galerie__image">
      <h3>Rome, Italie</h3>
      <p>Histoire et art à chaque coin de rue, du Colisée à la Fontaine de Trevi.</p>
    </div>
    <div class="galerie__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/destination6.jpg" alt="Le Caire, Égypte" class="galerie__image">
      <h3>Le Caire, Égypte</h3>
      <p>Les pyramides de Gizeh, le Nil et un riche patrimoine culturel à explorer.</p>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
?>
