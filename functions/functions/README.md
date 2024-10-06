# Documentation du Code PHP

Ce document explique un script PHP qui utilise les fonctions `strlen` et `strtoupper` pour manipuler des chaînes de caractères.

## Description du Code

Le code PHP ci-dessous montre comment utiliser les fonctions `strlen` et `strtoupper` pour obtenir des informations sur une chaîne de caractères et la manipuler.

```php
<?php
$commentaire = "Tu peux le faire";
echo strlen($commentaire) . '<br>';
echo strtoupper($commentaire);
?>
```

## Explication du Code

1. **Déclaration de la Variable**

   - **`$commentaire`**
     - Déclaration : `$commentaire = "Tu peux le faire";`
     - Description : Cette variable contient une chaîne de caractères qui sera utilisée dans les fonctions de manipulation de chaînes.

2. **Fonction `strlen`**

   - **Code :**
     ```php
     echo strlen($commentaire) . '<br>';
     ```
   - **Description :**
     - La fonction `strlen` retourne la longueur de la chaîne de caractères passée en argument.
     - Ici, `strlen($commentaire)` renvoie le nombre de caractères dans la chaîne `"Tu peux le faire"`, y compris les espaces.
     - Le résultat est affiché suivi d'un saut de ligne HTML (`<br>`).

3. **Fonction `strtoupper`**

   - **Code :**
     ```php
     echo strtoupper($commentaire);
     ```
   - **Description :**
     - La fonction `strtoupper` convertit tous les caractères de la chaîne de caractères passée en argument en majuscules.
     - Ici, `strtoupper($commentaire)` convertit `"Tu peux le faire"` en `"TU PEUX LE FAIRE"`.
     - Le résultat est affiché directement après le saut de ligne HTML.

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

16
TU PEUX LE FAIRE

- **`16`** : La longueur de la chaîne `"Tu peux le faire"` est de `16` caractères.
- **`TU PEUX LE FAIRE`** : La chaîne convertie en majuscules.

