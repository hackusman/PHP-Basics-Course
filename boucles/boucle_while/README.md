# Documentation du Code PHP

Ce document explique un script PHP qui utilise une boucle `while` pour afficher des nombres dans des balises `<h2>`.

## Description du Code

Le code PHP ci-dessous montre comment utiliser une boucle `while` pour itérer à travers une série de nombres et afficher chaque nombre dans une balise HTML `<h2>`.

```php
<?php
// Afficher les nombres de 1 à 10
$i = 1;
while ($i < 11) {
    echo "<h2>$i</h2>";
    $i = $i + 1;
}
?>
```

## Explication du Code

1. **Initialisation de la Variable**

   - **Code :**
     ```php
     $i = 1;
     ```
   - **Description :**
     - Initialise la variable `$i` à `1`. C'est le point de départ pour l'affichage des nombres.

2. **Boucle `while`**

   - **Syntaxe :**
     ```php
     while (condition) {
         // Code à exécuter
     }
     ```
   - **Code :**
     ```php
     while ($i < 11) {
         echo "<h2>$i</h2>";
         $i = $i + 1;
     }
     ```
   - **Description :**
     - **Condition** : `$i < 11`
       - La boucle continue à s'exécuter tant que la condition `$i < 11` est vraie.
     - **Affichage** : `echo "<h2>$i</h2>";`
       - À chaque itération, le nombre courant de `$i` est affiché dans une balise HTML `<h2>`. Les balises `<h2>` sont utilisées pour afficher des en-têtes de niveau 2, qui sont plus petits que les `<h1>`, mais toujours bien visibles.
     - **Incrémentation** : `$i = $i + 1;`
       - Augmente la valeur de `$i` de `1` à chaque itération de la boucle. Cela assure que la boucle finira lorsque `$i` atteindra `11`.

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera une série de balises `<h2>`, chacune contenant un nombre de `1` à `10`, comme suit :

```html
<h2>1</h2>
<h2>2</h2>
<h2>3</h2>
<h2>4</h2>
<h2>5</h2>
<h2>6</h2>
<h2>7</h2>
<h2>8</h2>
<h2>9</h2>
<h2>10</h2>
```

Chaque nombre est affiché dans sa propre balise `<h2>`, ce qui les rend tous bien formatés et visibles.

