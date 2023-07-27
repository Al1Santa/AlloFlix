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
php -S 0.0.0.0:8080 -t public => en mode sans https
symfony server:start => avece https

```

## Création d'une route/controller

Pour pouvoir utiliser les annotations et que symfony les lise

```bash
composer require annotations
```

### cache:clear

Si j'ai une erreur `Script cache:clear returned with error code 1`

Bine lire les messages, il s'agit probablement de nom de fichier/nom de classe qui ne corresponde pas.

`Case mismatch between loaded and declared class names:`

Pour vérifier que tout est bon

```bash
bin/console cache:clear
```

## debug des routes

Pour voir la liste de toutes les routes du projet

```bash
 bin/console debug:router
```

## Installation twig

```bash
composer require twig
```