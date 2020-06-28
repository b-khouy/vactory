
# Vactory Publication

Ce module offre la possibilité de créer un contenu de type publication, où chaque publication est caractérisée par un titre, une image, une date ,une description et une thématique.
Les publications peuvent être listées sous forme de card, card-inline ou masonry.


## Table of Contents
 * [Requirements](#Requirements)
 * [Recommended modules](#recommended-modules)
 * [Installation](#installation)
 * [Configuration](#configuration)
 * [extend](#extend)
 * [Api](#api)
 * [Troubleshooting &FAQ](#Troubleshooting&FAQ)
 * [Maintainers](#Maintainers)

## Requirements

Les dépendances :
  - better_exposed_filters
  - block
  - block_class
  - content_translation
  - datetime
  - entityqueue
  - fences
  - field
  - image
  - language
  - menu_ui
  - node
  - path
  - pathauto
  - responsive_image
  - system
  - taxonomy
  - text
  - user
  - vactory_generator (génération du contenu de type publication)
  - vactory_core (réutilisation des champs et des modes de vues déjà définis)
  - views
  - wysiwyg_template

## Installation
- Activation du module via la commande drush suivante :

    drush en vactory_publication

## Configuration
Aucun

## Extends
Aucun

##  API
Aucun

## theming

*  templates
On distingue entre trois modes de vues :
	* card.html.twig : Template correspondante au mode de vue card (carte).
	* card-inline.html.twig : Template correspondante au mode de vue card-inline (alignement des cartes).
	* masonry.html.twig : Template correspondante au mode de vue masonry.
*  hook theme
	* vactory_publication_theme : Permet d'appliquer les templates aux noeuds et aux vues correspondantes.
	 * vactory_publication_preprocess_node : Un preprocess pour remplacer le titre de l'image de chaque publication par celui du cours correspondant.

## Troubleshooting & FAQ
Aucun

## Maintainers

Bouharras Rida
<r.bouharras@void.fr>
