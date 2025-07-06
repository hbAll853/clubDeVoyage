# TP2 – Club de Voyage – Partie 2

## Description du projet
u78Cette seconde partie du TP2 vise à enrichir le thème WordPress développé précédemment en intégrant des fonctionnalités de personnalisation via le Customizer WordPress. Elle s'inscrit dans la continuité du TP1, tout en mettant l'accent sur l'autonomie et la réutilisabilité du code.
L'objectif principal est d’ajouter des options dynamiques pour personnaliser les sections Hero et Footer à partir du tableau de bord WordPress, sans modifier le code. Ces options incluent : couleurs, textes, adresses, images et icônes.
Le site reste centré sur les destinations de voyage, présentées sous forme de cartes dynamiques et triées par catégories.

## Fichiers & Structure
functions/mon-customizer.php : ajoute les options dans le Customizer pour Hero et Footer
functions/configuration-general.php : enregistre les supports du thème, les styles/scripts, et modifie la requête d’accueil
functions/composant.php : fonctions PHP pour les icônes sociales et les vagues décoratives
header.php, footer.php, front-page.php, hero.php, populaire.php, etc.
gabarit/ : composants modulaires comme carte.php, galerie.php
style.css : styles responsive & animation dans le Hero

## Fonctionnalités ajoutées dans cette partie
1. Personnalisation complète de la section Hero :
 - Texte animé dynamique (titre, description)
 - Auteur du thème
 - Adresse du club
 - Couleur du texte
 - Image d’arrière-plan
2. Personnalisation de la section Footer :
 - Adresse, courriel, texte du pied de page
 - Icônes sociales dynamiques
3. Gabarits réutilisables avec get_template_part()
4.  Animation CSS dans le Hero
5.  Structure des fonctions selon la méthode du professeur
6. Ajout d’un SVG de séparation décoratif entre les sections
7. Footer soigné avec 4 colonnes : contact, liens utiles, menu, recherche
8. Utilisation de get_theme_mod() pour tous les contenus personnalisables

## Liens
**Dépôt GitHub** 
https://github.com/hbAll853/theme-33w-tp1

**Site WordPress déployé**
https://gftnth00.mywhc.ca/33we_02/