# Vtiger module template

## Table des matières

1. [Introduction](#introduction)
2. [Installation](#installation)
3. [Utilisation](#utilisation)
4. [Installation du module](#installation-du-module)

## Introduction

Le but de ce dépôt est de vous aider à rapidement et facilement générer une structure basique de module Vtiger pour vos projets de développement.

La structure de base contient :

- Un fichier `manifest.xml` contenant les métadonnées du module;
- Un fichier `[NomDuModule].php` qui sera éxecuté lors de l'installation, l'activation et la désactivation du module. Il est utile si votre module nécessite de créer des tables en base de données.
- Un fichier `Record.php` dans lequel vous pourrez manipuler la base de données;
- Un contrôleur de vue `Index.php` avec le template Smarty `Index.tpl` associé;
- Un contrôleur d'action `GetAjaxData.php` utile pour de la récupération de données en Ajax;
- Un fichier `[NomDuModule].js` utile si votre module nécessite d'éxecuter du Javascript sur toutes les pages du CRM.

## Installation

- Installez dans Visual Studio Code l'extension [Project Templates](https://marketplace.visualstudio.com/items?itemName=cantonios.project-templates);
- Clonez ce dépôt sur votre machine et ouvrez le dossier ModuleTemplate dans Visual Studio Code;
- Ouvrez la Palette de commande (`CTRL`+`SHIFT`+`P`), tapez "Project" et sélectionnez `Project: Save Project as Template`;
- Nommez ce template (Exemple: Vtiger module).

## Utilisation

Pour créer un nouveau module :

- Créez un dossier vide au nom de votre module et ouvrez le Visual Studio Code;
- Ouvrez la Palette de commande, tapez "Project" et sélectionnez `Project: Create Project from Template`.
- Dans la liste qui s'affiche, sélectionnez votre template créé précédemment;
- Un nom vous est alors demandé, saisissez le nom de votre nouveau module et faites `Entrer`.

L'arborescence complète de votre module ainsi que les fichiers de base sont générés et nommés correctement.

## Installation du module

Lorsque votre module est prêt et que vous souhaitez l'installer dans Vtiger :

- Créez un fichier `.zip` contenant toutes les sources de votre projet;
- Rendez vous dans les réglages de Vtiger (`/index.php?module=Vtiger&parent=Settings&view=Index`);
- Dans le panneau de gauche, ouvrez le sous menu `Gestion des modules` puis cliquez sur `Gestionnaire de Modules`;
- Dans le coin superieur droit, cliquez sur le bouton `Import Module from Zip`;
- Suivez les étapes et importez le fichier `.zip` de votre module.

## Annexes

- [Documentation pour développeurs Vtiger](https://community.vtiger.com/help/vtigercrm/developers/develop-extensions-for-vtiger.html)
