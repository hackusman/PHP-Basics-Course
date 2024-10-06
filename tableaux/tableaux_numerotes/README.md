# Documentation du Code PHP

Ce document explique un script PHP qui utilise des tableaux pour stocker et afficher des prénoms.

## Description du Code

Le code PHP ci-dessous montre comment déclarer et utiliser des tableaux pour stocker des valeurs, puis afficher certaines d'entre elles.

```php
<?php
$prenoms = array("Alicia", "Drake", "King", "Yao");
$autre_prenom = array();
$autre_prenom[0] = "Dane";
$autre_prenom[1] = "Kodjo";
$autre_prenom[2] = "Samuel";
$autre_prenom[3] = "Djo";

echo $prenoms[0] . "<br>";
echo $autre_prenom[1];
?>
```

## Explication du Code

1. **Déclaration des Tableaux**

   - **`$prenoms`**
     - Déclaration : `$prenoms = array("Alicia", "Drake", "King", "Yao");`
     - Description : Ce tableau contient quatre éléments de type chaîne de caractères. Les indices des éléments vont de `0` à `3`.
     - Contenu :
       - Index `0` : `"Alicia"`
       - Index `1` : `"Drake"`
       - Index `2` : `"King"`
       - Index `3` : `"Yao"`

   - **`$autre_prenom`**
     - Déclaration : `$autre_prenom = array();`
     - Description : Ce tableau est initialement vide. Les éléments sont ajoutés individuellement avec des indices spécifiques.
     - Affectation des éléments :
       - **`$autre_prenom[0] = "Dane";`**
       - **`$autre_prenom[1] = "Kodjo";`**
       - **`$autre_prenom[2] = "Samuel";`**
       - **`$autre_prenom[3] = "Djo";`**
     - Contenu :
       - Index `0` : `"Dane"`
       - Index `1` : `"Kodjo"`
       - Index `2` : `"Samuel"`
       - Index `3` : `"Djo"`

2. **Affichage des Valeurs**

   - **`echo $prenoms[0] . "<br>";`**
     - Affiche la valeur de l'élément à l'indice `0` du tableau `$prenoms`, suivi d'un saut de ligne HTML (`<br>`).
     - Résultat : `Alicia`

   - **`echo $autre_prenom[1];`**
     - Affiche la valeur de l'élément à l'indice `1` du tableau `$autre_prenom`.
     - Résultat : `Kodjo`

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

Alicia
Kodjo

