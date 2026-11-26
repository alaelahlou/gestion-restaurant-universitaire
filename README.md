# Gestion de Restaurant Universitaire

Application web de gestion de restaurant universitaire développée avec **Laravel**. Elle permet de gérer les étudiants, les menus, les avis, les réservations de repas et les paiements.

## Fonctionnalités

- Authentification et gestion des utilisateurs
- Gestion des étudiants
- Gestion des menus et des repas
- Réservation de repas
- Gestion des paiements

## Technologies utilisées

- **Backend** : Laravel
- **Frontend** : HTML5, CSS3, Bootstrap, JavaScript
- **Base de données** : MySQL

## Installation

1. Cloner le dépôt :
```bash
git clone https://github.com/alaelahlou/gestion-restaurant-universitaire.git
cd gestion-restaurant-universitaire
```

2. Installer les dépendances :
```bash
composer install
npm install
```

3. Configurer l'environnement :
```bash
cp .env.example .env
php artisan key:generate
```
Puis modifier dans le fichier `.env` les informations de la base de données (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4. Créer les tables de la base de données :
```bash
php artisan migrate
```

5. Lancer le projet :
```bash
npm run dev
php artisan serve
```
L'application sera accessible sur `http://127.0.0.1:8000`.

## Captures d'écran

Voici quelques interfaces de l'application :

### Interface 1
![Capture d'écran 1](./Photo1.png)

### Interface 2
![Capture d'écran 2](./photo2.png)

### Interface 3
![Capture d'écran 3](./photo3.png)

### Interface 4
![Capture d'écran 4](./photo4.png)

### Interface 5
![Capture d'écran 5](./photo5.png)

### Interface 6
![Capture d'écran 6](./photo6.png)

### Interface 7
![Capture d'écran 7](./photo7.png)

### Interface 8
![Capture d'écran 8](./photo8.png)

## Auteur

**Alae Lahlou**  
GitHub : [@alaelahlou](https://github.com/alaelahlou)
