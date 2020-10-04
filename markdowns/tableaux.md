# Les tableaux

Nous allons voir en détail le fonctionnement des `tableaux`

Un tableau est une structure permettant de stocker dans une seule variable plusieurs éléments de même nature ou de natures différentes.

La déclaration d'un tableau se fait grâce au mot clé `array`.

De nombreuses fonctions permettent de manipuler les tableaux. Une liste exhaustive est disponible sur le site officiel de PHP : [Les tableaux en PHP](https://www.php.net/manual/fr/language.types.array.php).

Parmi ces fonctions, nous pouvons lister :
- count(tableau) : permet de déterminer le nombre d'éléments d'un tableau
- range(start, end, step) : permet de créer un tableau contenant les entiers compris entre `start` et `end`. Chaque entier est séparé de son voisin par `step` (par défaut 1)
- array_splice(tableau, start, quantité) : permet de retirer de tableau, depuis la position start, quantité éléments
- implode(glue, tableau) : permet de rassembler les éléments du tableau ensemble dans une chaîne de caractères. Les éléments sont séparés par `glue`

```php runnable
<?php
    $tableau = array();
    for ($i = 0; $i < 10; $i++) {
        $tableau[] = rand(10, 100);
    }
    print_r($tableau);
    echo ("le tableau contient les entiers : ".implode(',', $tableau)."\n");
?>
```
