Guide de Déploiement sur XAMPP
Ce guide vous explique comment déployer le projet localement en utilisant XAMPP sur votre machine. Suivez attentivement les étapes ci-dessous pour un déploiement réussi.

Prérequis
Avant de commencer, assurez-vous d'avoir installé XAMPP sur votre système. Vous pouvez le télécharger et l'installer à partir du site officiel de XAMPP : https://www.apachefriends.org/index.html.

Instructions de Déploiement
Cloner le Répertoire Git

bash
Copy code
git clone <URL_DU_REPO_GIT>
Placer le Projet dans le Répertoire htdocs de XAMPP

Copiez le répertoire du projet dans le répertoire htdocs de votre installation XAMPP. Par défaut, ce répertoire se trouve dans le dossier d'installation de XAMPP sur votre système.

Démarrer les Services Apache et MySQL de XAMPP

Lancez XAMPP.
Démarrez les services Apache et MySQL depuis le panneau de contrôle de XAMPP.
Configuration de la Base de Données

Ouvrez phpMyAdmin en accédant à http://localhost/phpmyadmin dans votre navigateur.
Créez une nouvelle base de données MySQL pour le projet.
Executez les lignes de codes ci-joint dans le document word SQL ecris a la main GARAGE PARROT

Renommez le fichier .env.example du projet en .env.
Modifiez les variables d'environnement dans le fichier .env pour correspondre à votre configuration locale, y compris les informations de base de données.
Installation des Dépendances

Ouvrez une nouvelle fenêtre de terminal ou de ligne de commande.

Accédez au répertoire du projet.

Exécutez la commande suivante :

Copy code
composer install
Génération de la Clé d'Application

Dans la même fenêtre de terminal, exécutez la commande suivante :

vbnet
Copy code
php artisan key:generate
Exécution des Migrations (si nécessaire)

Dans la même fenêtre de terminal, exécutez la commande suivante :

Copy code
php artisan migrate
Accéder au Projet dans le Navigateur

Ouvrez votre navigateur web et accédez à http://localhost/nom_du_projet/public.

Besoin d'Aide ?
Si vous rencontrez des problèmes lors du déploiement du projet sur XAMPP, n'hésitez pas à nous contacter à l'adresse suivante : adresse_email@example.com.

N'oubliez pas de personnaliser ce guide en fonction des spécificités de votre projet et de fournir des instructions claires et concises pour le déploiement sur XAMPP.
