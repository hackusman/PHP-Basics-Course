# Documentation du Code PHP

Ce document explique un script PHP qui utilise une boucle `foreach` pour parcourir un tableau associatif et afficher les clés et les valeurs associées.

## Description du Code

Le code PHP ci-dessous montre comment utiliser une boucle `foreach` pour itérer à travers un tableau associatif et afficher à la fois les clés et les valeurs de ce tableau.

```php
<?php
$matieres = array(
    "100" => "MATHS",
    "106" => "PHY"
);

foreach ($matieres as $cle => $val) {
    echo "La clé de " . $cle . " vaut : " . $val . "<br>";
}
?>
```

## Explication du Code

1. **Déclaration du Tableau Associatif**

   - **`$matieres`**
     - Déclaration : `$matieres = array("100" => "MATHS", "106" => "PHY");`
     - Description : Ce tableau associatif utilise des clés personnalisées pour indexer les valeurs. 
     - Contenu :
       - Clé `"100"` : Valeur `"MATHS"`
       - Clé `"106"` : Valeur `"PHY"`

2. **Boucle `foreach` pour Parcourir un Tableau Associatif**

   - **Code :**
     ```php
     foreach ($matieres as $cle => $val) {
         echo "La clé de " . $cle . " vaut : " . $val . "<br>";
     }
     ```
   - **Description :**
     - La boucle `foreach` parcourt chaque élément du tableau `$matieres`.
     - À chaque itération :
       - La clé de l'élément courant est assignée à la variable `$cle`.
       - La valeur de l'élément courant est assignée à la variable `$val`.
     - Ces valeurs sont ensuite affichées dans la phrase `"La clé de [clé] vaut : [valeur]"`, suivie d'un saut de ligne HTML (`<br>`).

   - **Résultat :**
     - Affiche :
       ```
       La clé de 100 vaut : MATHS
       La clé de 106 vaut : PHY
       ```

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

La clé de 100 vaut : MATHS
La clé de 106 vaut : PHY

