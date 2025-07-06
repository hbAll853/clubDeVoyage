<?php
/**
 * Fonctions réutilisables : icônes sociaux et vague décorative
 */

// Icônes sociales
function icone_sociaux($couleur) {
    $couleur = substr($couleur, 1); 
    ?>
    <a class="sociaux" href="https://github.com/eddytuto/33w-ete-25">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="https://facebook.com">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <?php
}

// Générateur de vague décorative
function vague($couleur_haut, $couleur_bas) { ?>
    <style>
        .style-vague {
            position: relative;
            top: 0;
            background-color: <?= $couleur_haut ?>;
        }
    </style>

    <svg class="style-vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
        <path
            fill="<?= $couleur_bas ?>"
            fill-opacity="1"
            d="M0,30 C360,80 1080,-20 1440,30 L1440,100 L0,100 Z">
        </path>
    </svg>
<?php }

