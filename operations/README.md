# Documentation du Code PHP

Ce document explique un script PHP simple qui effectue des opérations arithmétiques de base et affiche les résultats.

## Description du Code

Le code PHP ci-dessous montre comment effectuer des opérations arithmétiques de base avec des variables et afficher les résultats.

```php
<?php
$var1 = 10;
$var2 = 20;
$var3 = $var2 + $var1; // Addition
$var4 = $var2 - $var1; // Soustraction
$var5 = $var2 / $var1; // Division
$var6 = $var2 % $var1; // Modulo (reste de la division)
echo "Resultat var3: " . $var3 . "<br>";
echo "Resultat var4: " . $var4 . "<br>";
echo "Resultat var5: " . $var5 . "<br>";
echo "Resultat var6: " . $var6 . "<br>";
?>
```

## Explication du Code

1. **Déclaration des Variables**

   - **`$var1`**
     - Valeur : `10`
     - Description : Stocke un nombre entier utilisé pour les opérations.

   - **`$var2`**
     - Valeur : `20`
     - Description : Stocke un autre nombre entier utilisé pour les opérations.

2. **Opérations Arithmétiques**

   - **Addition**
     - **`$var3 = $var2 + $var1;`**
       - Opération : Additionne `$var2` et `$var1`.
       - Résultat : `30` (puisque `20 + 10 = 30`).

   - **Soustraction**
     - **`$var4 = $var2 - $var1;`**
       - Opération : Soustrait `$var1` de `$var2`.
       - Résultat : `10` (puisque `20 - 10 = 10`).

   - **Division**
     - **`$var5 = $var2 / $var1;`**
       - Opération : Divise `$var2` par `$var1`.
       - Résultat : `2` (puisque `20 / 10 = 2`).

   - **Modulo**
     - **`$var6 = $var2 % $var1;`**
       - Opération : Calcule le reste de la division de `$var2` par `$var1`.
       - Résultat : `0` (puisque `20 % 10 = 0`).

3. **Affichage des Résultats**

   - **`echo "Resultat var3: " . $var3 . "<br>";`**
     - Affiche le résultat de l'addition, suivi d'un saut de ligne HTML (`<br>`).
     - Résultat : `Resultat var3: 30`

   - **`echo "Resultat var4: " . $var4 . "<br>";`**
     - Affiche le résultat de la soustraction, suivi d'un saut de ligne HTML.
     - Résultat : `Resultat var4: 10`

   - **`echo "Resultat var5: " . $var5 . "<br>";`**
     - Affiche le résultat de la division, suivi d'un saut de ligne HTML.
     - Résultat : `Resultat var5: 2`

   - **`echo "Resultat var6: " . $var6 . "<br>";`**
     - Affiche le résultat du modulo, suivi d'un saut de ligne HTML.
     - Résultat : `Resultat var6: 0`

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera :

Resultat var3: 30
Resultat var4: 10
Resultat var5: 2
Resultat var6: 0

