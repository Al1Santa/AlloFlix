# Création du projet

## Création d'un projet skeleton (projet minimum)

```bash
composer create-project symfony/skeleton oflix
```

On déplace les fichier du sous-dossier du projet, puis on supprime le sous-dossier

```bash
mv alloflix/* alloflix/.* .
```

## Lancer le projet

On utilise `php -S` pour ne pas être dépendant d'un serveur web

```bash
php -S 0.0.0.0:8080 -t public
```

## Création d'une route/controller

Pour pouvoir utiliser les annotations et que symfony les lise

```bash
composer require annotations
```