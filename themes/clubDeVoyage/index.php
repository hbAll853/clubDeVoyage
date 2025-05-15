<?php
get_header();
?>

<main>
    <section class="contenu-principal">
        <?php
        if (have_posts()):
            while (have_posts()): the_post();
                the_content();
            endwhile;
        else:
            echo '<p>Contenu non trouvé.</p>';
        endif;
        ?>
    </section>
</main>

<?php
get_footer();
?>
