# Documentation du Code PHP

Ce document explique le code PHP fourni et décrit le rôle de chaque partie du script.

## Description du Code

Le code PHP ci-dessous illustre l'utilisation de différentes variables et leur affichage à l'écran.

```php
<?php
$nom="Je suis un nom"; // Chaine de caractère : string
$valeur_entiere=3; // Un nombre entier : int
$valeur_decimale=18.5; // Un nombre décimal : float
$geek=true; // C'est un boolean

echo $nom . "<br>";
echo $valeur_entiere . "<br>";
echo $valeur_decimale . "<br>";
echo $geek . "<br>"; 
?>
```

## Explication du Code

1. **Déclaration des Variables**

   - **`$nom`**
     - Type : Chaîne de caractères (`string`)
     - Valeur : `"Je suis un nom"`
     - Description : Stocke un texte.

   - **`$valeur_entiere`**
     - Type : Entier (`int`)
     - Valeur : `3`
     - Description : Stocke un nombre entier.

   - **`$valeur_decimale`**
     - Type : Décimal (`float`)
     - Valeur : `18.5`
     - Description : Stocke un nombre décimal.

   - **`$geek`**
     - Type : Booléen (`boolean`)
     - Valeur : `true`
     - Description : Stocke une valeur booléenne (`true` ou `false`).

2. **Affichage des Variables**

   - **`echo $nom . "<br>";`**
     - Affiche la valeur de `$nom` suivie d'un saut de ligne HTML (`<br>`).
     - Résultat : `Je suis un nom`

   - **`echo $valeur_entiere . "<br>";`**
     - Affiche la valeur de `$valeur_entiere` suivie d'un saut de ligne HTML.
     - Résultat : `3`

   - **`echo $valeur_decimale . "<br>";`**
     - Affiche la valeur de `$valeur_decimale` suivie d'un saut de ligne HTML.
     - Résultat : `18.5`

   - **`echo $geek . "<br>";`**
     - Affiche la valeur de `$geek` suivie d'un saut de ligne HTML.
     - En PHP, `true` est affiché comme `1` et `false` comme une chaîne vide.
     - Résultat : `1`

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

Je suis un nom
3
18.5
1

