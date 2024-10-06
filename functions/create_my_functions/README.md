# Documentation du Code PHP

Ce document explique un script PHP qui définit des fonctions pour effectuer des calculs mathématiques et utilise ces fonctions pour afficher les résultats.

## Description du Code

Le code PHP ci-dessous définit deux fonctions : `carre` pour calculer le carré d'un nombre et `perimetre` pour calculer le périmètre d'un rectangle. Il affiche ensuite les résultats de ces calculs.

```php
<?php
function carre($nombre) {
    return $nombre ** 2;
}

echo "Le carré vaut: " . carre(5) . '<br>';

function perimetre($longueur, $largeur) {
    return ($longueur + $largeur) * 2;
}

echo "Le périmètre vaut: " . perimetre(4, 2);
?>
```

## Explication du Code

1. **Définition de la Fonction `carre`**

   - **Code :**
     ```php
     function carre($nombre) {
         return $nombre ** 2;
     }
     ```
   - **Description :**
     - La fonction `carre` prend un paramètre, `$nombre`.
     - Elle retourne le carré de `$nombre` en utilisant l'opérateur d'exponentiation `**` (qui élève `$nombre` à la puissance `2`).
     - Note : En PHP, `**` est utilisé pour l'exponentiation, mais vous pouvez également utiliser la fonction `pow($nombre, 2)` pour obtenir le même résultat.

2. **Appel de la Fonction `carre`**

   - **Code :**
     ```php
     echo "Le carré vaut: " . carre(5) . '<br>';
     ```
   - **Description :**
     - Appelle la fonction `carre` avec l'argument `5`.
     - Affiche le résultat du carré de `5`, qui est `25`, suivi d'un saut de ligne HTML (`<br>`).

3. **Définition de la Fonction `perimetre`**

   - **Code :**
     ```php
     function perimetre($longueur, $largeur) {
         return ($longueur + $largeur) * 2;
     }
     ```
   - **Description :**
     - La fonction `perimetre` prend deux paramètres, `$longueur` et `$largeur`.
     - Elle retourne le périmètre d'un rectangle en utilisant la formule `(longueur + largeur) * 2`.

4. **Appel de la Fonction `perimetre`**

   - **Code :**
     ```php
     echo "Le périmètre vaut: " . perimetre(4, 2);
     ```
   - **Description :**
     - Appelle la fonction `perimetre` avec les arguments `4` et `2`.
     - Affiche le résultat du calcul du périmètre pour un rectangle avec une longueur de `4` et une largeur de `2`, ce qui est `12`.

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

Le carré vaut: 25
Le périmètre vaut: 12


- **`Le carré vaut: 25`** : Affiche le carré de `5`.
- **`Le périmètre vaut: 12`** : Affiche le périmètre d'un rectangle avec une longueur de `4` et une largeur de `2`.
