# Documentation du Code PHP

Ce document explique un script PHP qui utilise des structures conditionnelles pour afficher des messages basés sur la valeur d'une variable.

## Description du Code

Le code PHP ci-dessous montre comment utiliser les structures conditionnelles `if`, `elseif` et `else` pour afficher des messages différents en fonction de la valeur d'une variable.

```php
<?php
$nom = "Jolie";
if ($nom == "Aminata") {
    echo "Bienvenue dans la team <br>";
    echo "Bonne continuation";
}
elseif ($nom == "Jolie") {
    echo 'Felicitation' . "<br>";
    echo 'Tu as fait fort';
}
else {
    echo "J'ignore";
}
?>
```

## Explication du Code

1. **Déclaration de la Variable**

   - **`$nom`**
     - Déclaration : `$nom = "Jolie";`
     - Description : Cette variable contient une chaîne de caractères qui est comparée dans les structures conditionnelles.

2. **Structures Conditionnelles**

   - **Condition `if`**
     - **Code :**
       ```php
       if ($nom == "Aminata") {
           echo "Bienvenue dans la team <br>";
           echo "Bonne continuation";
       }
       ```
     - **Description :**
       - Vérifie si la valeur de `$nom` est égale à `"Aminata"`.
       - Si la condition est vraie, les messages `"Bienvenue dans la team"` et `"Bonne continuation"` sont affichés, suivis d'un saut de ligne HTML (`<br>`).
   
   - **Condition `elseif`**
     - **Code :**
       ```php
       elseif ($nom == "Jolie") {
           echo 'Felicitation' . "<br>";
           echo 'Tu as fait fort';
       }
       ```
     - **Description :**
       - Si la condition `if` est fausse, vérifie si la valeur de `$nom` est égale à `"Jolie"`.
       - Si cette condition est vraie, les messages `'Felicitation'` et `'Tu as fait fort'` sont affichés, suivis d'un saut de ligne HTML (`<br>`).
   
   - **Condition `else`**
     - **Code :**
       ```php
       else {
           echo "J'ignore";
       }
       ```
     - **Description :**
       - Si aucune des conditions précédentes n'est vraie, cette section est exécutée.
       - Affiche le message `"J'ignore"`.

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

Felicitation
Tu as fait fort

