# Documentation du Code PHP

Ce document explique un script PHP qui utilise les boucles `for` et `foreach` pour parcourir et afficher les éléments de tableaux.

## Description du Code

Le code PHP ci-dessous montre comment utiliser les boucles `for` et `foreach` pour itérer à travers des tableaux et afficher leurs éléments.

```php
<?php
$prenom = array("Dane", "Christ", "Samuel");
for ($i = 0; $i < count($prenom); $i++) {
    echo $prenom[$i] . "<br>";
}

$autre_prenom = array("Ben", "Zeus", "Boris");
foreach ($autre_prenom as $autreprenom) {
    echo $autreprenom . "<br>";
}
?>
```

## Explication du Code

1. **Déclaration des Tableaux**

   - **`$prenom`**
     - Déclaration : `$prenom = array("Dane", "Christ", "Samuel");`
     - Description : Ce tableau contient trois éléments de type chaîne de caractères.
     - Contenu :
       - Index `0` : `"Dane"`
       - Index `1` : `"Christ"`
       - Index `2` : `"Samuel"`

   - **`$autre_prenom`**
     - Déclaration : `$autre_prenom = array("Ben", "Zeus", "Boris");`
     - Description : Ce tableau contient également trois éléments de type chaîne de caractères.
     - Contenu :
       - Index `0` : `"Ben"`
       - Index `1` : `"Zeus"`
       - Index `2` : `"Boris"`

2. **Boucle `for` pour Parcourir un Tableau**

   - **Code :**
     ```php
     for ($i = 0; $i < count($prenom); $i++) {
         echo $prenom[$i] . "<br>";
     }
     ```
   - **Description :**
     - La boucle `for` initialise une variable `$i` à `0` et l'incrémente jusqu'à ce qu'elle soit inférieure au nombre d'éléments dans le tableau `$prenom`.
     - La fonction `count($prenom)` retourne le nombre d'éléments dans le tableau, ce qui est utilisé comme condition d'arrêt pour la boucle.
     - À chaque itération, la valeur de `$prenom[$i]` est affichée, suivie d'un saut de ligne HTML (`<br>`).

   - **Résultat :**
     - Affiche :
       ```
       Dane
       Christ
       Samuel
       ```

3. **Boucle `foreach` pour Parcourir un Tableau Associatif**

   - **Code :**
     ```php
     foreach ($autre_prenom as $autreprenom) {
         echo $autreprenom . "<br>";
     }
     ```
   - **Description :**
     - La boucle `foreach` parcourt chaque élément du tableau `$autre_prenom`. À chaque itération, la valeur de l'élément courant est assignée à la variable `$autreprenom` et affichée, suivie d'un saut de ligne HTML (`<br>`).

   - **Résultat :**
     - Affiche :
       ```
       Ben
       Zeus
       Boris
       ```

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

Dane
Christ
Samuel
Ben
Zeus
Boris

