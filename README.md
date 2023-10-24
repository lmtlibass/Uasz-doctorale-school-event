# Plateforme de Gestion de Conférences avec Diffusion en Ligne

## Table des matières

- [Introduction](#introduction)
- [Description du Projet](#description-du-projet)
- [Fonctionnalités](#fonctionnalités)
- [Technologies Utilisées](#technologies-utilisées)
- [Configuration et Installation](#configuration-et-installation)
- [Utilisation](#utilisation)
- [Contributeurs](#contributeurs)
- [Licence](#licence)

## Introduction

Ce projet a été réalisé dans le cadre de notre mémoire de master en management des systèmes d'informations automatisés. Il consiste en la conception et le développement d'une Plateforme de Gestion de Conférences avec Diffusion en Ligne, avec pour étude de cas l'École Doctorale de l'Université Assane Seck de Ziguinchor. La plateforme a été développée en utilisant Laravel en monolithique avec le moteur de templating Blade pour le frontend et une base de données MySQL.

## Description du Projet

La Plateforme de Gestion de Conférences avec Diffusion en Ligne a été créée pour répondre aux besoins spécifiques de l'École Doctorale de l'Université Assane Seck de Ziguinchor. Elle permet la gestion complète des conférences, des appels à communication, et des événements associés. Les administrateurs de l'école doctorale ainsi que les utilisateurs peuvent effectuer différentes actions, comme la publication d'appels à communication, la soumission de propositions, l'inscription à des événements, etc.

## Fonctionnalités

### Admin (Responsables de l'école doctorale)

En tant qu'administrateur, vous avez les fonctionnalités suivantes :

- Publier un appel à communication et/ou un événement.
- Consulter les propositions de communication soumises.
- Valider ou refuser une proposition de communication.
- Notifier les utilisateurs dont la proposition de communication a été validée.
- Démarrer ou programmer un appel.
- Partager le code d'un appel avec les participants.

### Utilisateur

En tant qu'utilisateur, vous pouvez effectuer les actions suivantes :

- Consulter la liste des événements et vous y inscrire.
- Envoyer une proposition de communication en réponse à un appel à communication.
- Partager, modifier ou supprimer un article que vous avez soumis.
- Participer à une visioconférence en utilisant le code fourni par l'administrateur.

## Technologies Utilisées

Ce projet a été développé en utilisant les technologies suivantes :

- Laravel (Monolithique)
- Blade (Moteur de templating pour le frontend)
- MySQL (Base de données)

## Configuration et Installation

Pour configurer et installer le projet sur votre système, suivez les étapes ci-dessous :

1. **Cloner le Répertoire :** Utilisez la commande suivante pour cloner le répertoire depuis GitHub :

git clone https://github.com/votre-nom-utilisateur/nom-du-projet.git

2. **Configuration de l'Environnement :** Assurez-vous d'avoir PHP, Composer et MySQL installés sur votre système. Ensuite, créez un fichier d'environnement `.env` en vous basant sur le modèle `.env.example`. Configurez les paramètres de base de données et d'autres paramètres selon vos besoins.

3. **Installer les Dépendances :** Utilisez Composer pour installer les dépendances du projet en exécutant la commande suivante dans le répertoire du projet :


4. **Créer la Base de Données :** Créez une base de données MySQL correspondante à votre configuration `.env`.

5. **Exécuter les Migrations :** Appliquez les migrations pour créer les tables de base de données en utilisant la commande :


6. **Générer une Clé d'Application :** Générez une nouvelle clé d'application Laravel en utilisant la commande :


7. **Lancer le Serveur de Développement :** Démarrez le serveur de développement avec la commande :


Le projet devrait maintenant être accessible à l'adresse `http://localhost:8000` dans votre navigateur.

## Utilisation

Pour utiliser la plateforme, suivez les instructions détaillées fournies dans le guide de l'utilisateur. Le guide de l'utilisateur est disponible dans le fichier `GUIDE_DE_L'UTILISATEUR.md` à la racine du projet. Il vous fournira des informations sur la navigation, l'inscription aux événements, la soumission de propositions de communication, et d'autres fonctionnalités clés de la plateforme.

N'hésitez pas à contacter notre équipe de support si vous avez des questions ou rencontrez des problèmes lors de l'installation ou de l'utilisation de la plateforme.



## Contributeurs

- [libasse thiam](https://github.com/lmtlibass)


## Licence


