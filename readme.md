# TP2 – Club de Voyage – Partie 1

## Description du projet

Ce projet WordPress constitue la première partie du TP2. Il s'inscrit dans la continuité du TP1 où un thème personnalisé a été développé. L’objectif de cette étape est de structurer davantage le thème en utilisant des champs personnalisés (ACF), des modèles conditionnels (`category.php`, `single.php`, `404.php`, etc.), et des gabarits réutilisables (`get_template_part`).

Le site présente différentes destinations de voyage, classées par catégories. Chaque destination dispose d’une fiche détaillée affichant des champs dynamiques tels que :

- Température minimale, maximale, moyenne (ACF)
- Niveau d’appréciation (ACF)
- Description complète
- Catégorie associée

Le thème est responsive, épuré et conçu avec Sass. Il comprend aussi un formulaire d’inscription moderne, ainsi qu’une galerie de destinations et une recherche fonctionnelle.

## Fichiers et modèles inclus

- `front-page.php` : page d’accueil
- `category.php` : affichage des destinations par catégorie
- `single.php` : fiche individuelle d’une destination
- `search.php` : résultats de recherche
- `404.php` : page d’erreur personnalisée
- `gabarit/carte.php` : composant réutilisable pour les cartes de destinations
- `gabarit/galerie.php` : composant de la galerie
- `sass/` : styles structurés selon les bonnes pratiques Sass

## Fonctionnalités implémentées

- Intégration de champs ACF
- Affichage dynamique des données personnalisées
- Navigation entre les destinations
- Formulaire d'inscription stylisé
- Composants modulaires avec `get_template_part()`
- Mise en page responsive
- Barre de recherche fonctionnelle sur toutes les pages

## Liens

**Dépôt GitHub**

Le projet est disponible dans la branche `tp1-part3` sur le lien suivant :

https://github.com/hbAll853/theme-33w-tp1

**Site WordPress en ligne**

https://gftnth00.mywhc.ca/33we_02/
