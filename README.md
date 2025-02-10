# API laravel

## Introduction

Ce TP a pour but de familiariser avec la création d'API en utilisant Laravel. En s'appuyant sur les notions abordées dans les TP précédents, il permet d'apprendre à concevoir une API capable de gérer efficacement des données, en mettant en œuvre les bonnes pratiques du développement web.

## Fonctionnalités

- ** Récupération de la liste complète des produits via GET /api/produits.
- ** Obtention d'un produit spécifique en utilisant GET /api/produit/{id}.
- ** Ajout d'un nouveau produit à la base de données avec POST /api/produit.
- ** Création d'une nouvelle commande associant un produit et un client grâce à POST /api/commande.

## Installation

- ** composer install
- ** php artisan install:api

### Prérequis

- PHP >= 8.3
- Composer
- Laravel >= 11.x
- MySQL ou tout système de base de données compatible

### Étapes

1. Cloner le dépôt Git :
2. Installer les dépendances PHP avec Composer : `composer install`
3. Créer un fichier `.env` à partir du modèle `.env.example`.
4. Générer une clé d'application Laravel : `php artisan key:generate`
5. Configurer les informations de base de données dans le fichier `.env` (`DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
6. Lancer le projet avec Laravel : `php artisan serve`

## Documentation


