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
    <section class="formulaire">
        <form action="#">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Prénom">
            <input type="email" placeholder="Courriel">
            <input type="tel" placeholder="Téléphone">
            <button type="submit">S'INSCRIRE</button>
        </form>
    </section>

    <!-- Galerie -->
    <section class="galerie">
        <h2>Nos destinations favorites</h2>
        <div class="galerie__grille">
            <img src="<?php echo get_template_directory_uri(); ?>/images/destination1.jpg" alt="Destination 1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/destination2.jpg" alt="Destination 2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/destination3.jpg" alt="Destination 3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/destination4.jpg" alt="Destination 4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/destination5.jpg" alt="Destination 5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/destination6.jpg" alt="Destination 6">
        </div>
    </section>

</main>

<?php
get_footer();
?>
