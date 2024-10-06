# Documentation du Code PHP

Ce document explique un script PHP qui utilise des structures conditionnelles pour afficher des messages en fonction des valeurs de variables.

## Description du Code

Le code PHP ci-dessous montre comment utiliser les structures conditionnelles `if` avec des opérateurs logiques pour déterminer quel message afficher en fonction des valeurs des variables.

```php
<?php
$name = "AMOU";
$prenom = "Kouevi";
$age_1 = 15;
$age_2 = 20;

if ($name == "AMOU" && $prenom == "Kouevi") {
    echo "Très Bien <br>";
}

if ($age_1 == 15 || $age_2 == 20) {
    echo 'Vous êtes sélectionnés' . "<br>";
} else {
    echo "Hors programme";
}
?>
```

## Explication du Code

1. **Déclaration des Variables**

   - **`$name`**
     - Déclaration : `$name = "AMOU";`
     - Description : Contient le prénom.

   - **`$prenom`**
     - Déclaration : `$prenom = "Kouevi";`
     - Description : Contient le nom de famille.

   - **`$age_1`**
     - Déclaration : `$age_1 = 15;`
     - Description : Contient une première valeur d'âge.

   - **`$age_2`**
     - Déclaration : `$age_2 = 20;`
     - Description : Contient une deuxième valeur d'âge.

2. **Condition `if` avec Opérateurs Logiques**

   - **Première Condition**
     - **Code :**
       ```php
       if ($name == "AMOU" && $prenom == "Kouevi") {
           echo "Très Bien <br>";
       }
       ```
     - **Description :**
       - Vérifie si `$name` est égal à `"AMOU"` **et** si `$prenom` est égal à `"Kouevi"`.
       - Utilisation correcte de l'opérateur logique `&&` pour combiner les conditions.
       - Si les deux conditions sont vraies, affiche le message `"Très Bien"` suivi d'un saut de ligne HTML (`<br>`).
   
   - **Deuxième Condition**
     - **Code :**
       ```php
       if ($age_1 == 15 || $age_2 == 20) {
           echo 'Vous êtes sélectionnés' . "<br>";
       } else {
           echo "Hors programme";
       }
       ```
     - **Description :**
       - Vérifie si `$age_1` est égal à `15` **ou** si `$age_2` est égal à `20`.
       - Utilisation correcte de l'opérateur logique `||` pour combiner les conditions.
       - Si l'une des conditions est vraie, affiche le message `'Vous êtes sélectionnés'` suivi d'un saut de ligne HTML (`<br>`).
       - Si aucune des conditions n'est vraie, le message `"Hors programme"` est affiché.

## Correction des Erreurs

- **Erreurs de Syntaxe :**
  - Dans les conditions, utilisez `==` pour comparer les valeurs, pas `=` (qui est l'opérateur d'affectation).
  - La variable `$apge_2` a été corrigée en `$age_2` pour correspondre au nom correct de la variable.

## Résultat Attendu

Lorsque vous exécutez ce code PHP avec les valeurs définies, le résultat affiché sera :

Très Bien
Vous êtes sélectionnés

- Le premier message est affiché car les deux conditions du premier `if` sont vraies.
- Le deuxième message est affiché car au moins une des conditions du second `if` est vraie.

