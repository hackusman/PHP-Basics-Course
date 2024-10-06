# Documentation du Code PHP

Ce document explique un script PHP qui utilise une boucle `for` pour afficher des en-têtes HTML avec des numéros.

## Description du Code

Le code PHP ci-dessous montre comment utiliser une boucle `for` pour itérer à travers une série de nombres et afficher chaque nombre dans une balise `<h1>` HTML.

```php
<?php
for ($i = 1; $i < 12; $i++) {
    echo "<h1>$i</h1>";
}
?>
```

## Explication du Code

1. **Structure de la Boucle `for`**

   - **Syntaxe :**
     ```php
     for (initialisation; condition; incrémentation) {
         // Code à exécuter
     }
     ```
   - **Détails :**
     - **Initialisation** : `$i = 1`
       - Initialise la variable `$i` à `1`.
     - **Condition** : `$i < 12`
       - Continue l'exécution de la boucle tant que la condition `$i < 12` est vraie.
     - **Incrémentation** : `$i++`
       - Augmente la valeur de `$i` de `1` à chaque itération de la boucle.

2. **Affichage avec `<h1>`**

   - **Code :**
     ```php
     echo "<h1>$i</h1>";
     ```
   - **Description :**
     - À chaque itération, le nombre courant de `$i` est affiché dans une balise HTML `<h1>`. Les balises `<h1>` sont utilisées pour afficher des en-têtes de niveau 1, qui sont généralement les plus grands et les plus importants.
     - Le nombre est inclus dans la chaîne avec l'utilisation de l'interpolation de variables (`$i`) dans les guillemets doubles.

## Résultat Attendu

Lorsque vous exécutez ce code PHP, le résultat affiché sera une série d'en-têtes HTML, chacun contenant un nombre de `1` à `11`, comme suit :

```html
<h1>1</h1>
<h1>2</h1>
<h1>3</h1>
<h1>4</h1>
<h1>5</h1>
<h1>6</h1>
<h1>7</h1>
<h1>8</h1>
<h1>9</h1>
<h1>10</h1>
<h1>11</h1>
```

Chaque nombre est affiché dans sa propre balise `<h1>`, ce qui les rend tous très visibles et bien formatés.
