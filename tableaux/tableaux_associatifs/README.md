# Documentation du Code PHP

Ce document explique un script PHP qui utilise des tableaux associatifs pour stocker et afficher des matières.

## Description du Code

Le code PHP ci-dessous montre comment déclarer et utiliser des tableaux associatifs pour stocker des valeurs avec des clés personnalisées, puis afficher certaines d'entre elles.

```php
<?php
$matiere = array(
    "100" => "MATHS",
    "106" => "PHY",
    "100" => "INFO",
);
$autre_matiere = array();
$autre_matiere["1"] = "GEO";
$autre_matiere["2"] = "ECM";
$autre_matiere["3"] = "SPORT";

echo $matiere["100"] . "<br>";
echo $autre_matiere["3"];
?>
```

## Explication du Code

1. **Déclaration des Tableaux Associatifs**

   - **`$matiere`**
     - Déclaration : `$matiere = array("100" => "MATHS", "106" => "PHY", "100" => "INFO");`
     - Description : Ce tableau associatif utilise des clés personnalisées pour indexer les valeurs. Notez que les clés doivent être uniques ; ici, `"100"` est redéfini pour la dernière valeur.
     - Contenu :
       - Clé `"100"` : `"INFO"` (remplace la précédente valeur `"MATHS"`)
       - Clé `"106"` : `"PHY"`
     - Note : En PHP, lorsqu'une clé est redéfinie, la dernière valeur associée à cette clé est celle qui sera conservée.

   - **`$autre_matiere`**
     - Déclaration : `$autre_matiere = array();`
     - Description : Ce tableau associatif est initialement vide. Les éléments sont ajoutés avec des clés personnalisées.
     - Affectation des éléments :
       - **`$autre_matiere["1"] = "GEO";`**
       - **`$autre_matiere["2"] = "ECM";`**
       - **`$autre_matiere["3"] = "SPORT";`**
     - Contenu :
       - Clé `"1"` : `"GEO"`
       - Clé `"2"` : `"ECM"`
       - Clé `"3"` : `"SPORT"`

2. **Affichage des Valeurs**

   - **`echo $matiere["100"] . "<br>";`**
     - Affiche la valeur associée à la clé `"100"` du tableau `$matiere`, suivie d'un saut de ligne HTML (`<br>`). Comme mentionné, la valeur affichée sera `"INFO"` (la dernière valeur définie pour la clé `"100"`).
     - Résultat : `INFO`

   - **`echo $autre_matiere["3"];`**
     - Affiche la valeur associée à la clé `"3"` du tableau `$autre_matiere`.
     - Résultat : `SPORT`

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

INFO
SPORT

