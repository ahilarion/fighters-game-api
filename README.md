# API Fighters Game

Bienvenue dans le projet de l'API `Fighters Game` développé pour LiveCampus. Cette API, construite avec Laravel, permet de gérer les aspects essentiels du jeu, comme les personnages, les combats, et plus encore.

## Technologies

- **PHP**: 8.3
- **Laravel**: 11

## Installation

Pour installer et configurer l'API en local, suivez ces étapes :

1. **Clonez le dépôt GitHub :**

   ```bash
   git clone https://github.com/ahilarion/fighters-game-api.git
   ```

2. **Accédez au répertoire du projet :**

   ```bash
   cd fighters-game-api
   ```

3. **Installez les dépendances :**

   ```bash
   composer install
   ```

4. **Configurez votre environnement :**

   Copiez le fichier `.env.example` en `.env` et ajustez les paramètres selon votre configuration locale :

   ```bash
   cp .env.example .env
   ```

   N'oubliez pas de configurer la connexion à votre base de données et d'autres paramètres nécessaires dans le fichier `.env`.

5. **Générez la clé d'application Laravel :**

   ```bash
   php artisan key:generate
   ```

6. **Exécutez les migrations pour créer les tables nécessaires :**

   ```bash
   php artisan migrate
   ```

7. **Démarrez le serveur de développement :**

   ```bash
   php artisan serve
   ```

   L'API sera disponible à l'adresse [http://localhost:8000](http://localhost:8000).

## Documentation de l'API

Pour tester l'API, vous pouvez utiliser l'URL suivante : [https://fighters-game-api.luwa.fr/api](https://fighters-game-api.luwa.fr/api)

La documentation complète des endpoints est disponible à cette adresse : [Documentation de l'API](https://fighters-game-api.luwa.fr/api/docs)

## Contribuer

Si vous souhaitez contribuer à ce projet, veuillez suivre ces étapes :

1. Forkez le dépôt.
2. Créez une branche pour votre fonctionnalité ou correction de bug (`git checkout -b feature/ma-fonctionnalité`).
3. Commitez vos changements (`git commit -am 'Ajout de ma fonctionnalité'`).
4. Poussez la branche (`git push origin feature/ma-fonctionnalité`).
5. Créez une pull request sur GitHub.

## License

Ce projet est sous la licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Contact

Pour toute question ou remarque, vous pouvez me contacter à l'adresse suivante : [ahilarion@livecampus.tech](mailto:ahilarion@livecampus.tech).

---

Merci d'avoir consulté la documentation de l'API Fighters Game. Nous espérons que vous trouverez ce projet utile et amusant !
