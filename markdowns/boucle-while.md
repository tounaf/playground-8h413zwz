# La boucle while

Nous allons voir en détail le fonctionnement de la boucle `while`

Cette boucle est composée de trois éléments :

- l'initialisation de l'index utilisé pour la boucle : `initialisation`
- la condition que doit vérifier l'index pour continuer la boucle : `condition`
- la modification apportée à l'index : ̀`modification`

La structure de la boucle est la suivante :

```php
<?php
    initialisation ;
    while (condition) {
        actions;
        modification;
    }
?>
```

Contrairement à la boucle for, les trois éléments sont situés sur des lignes de code différentes.
Seule la `condition` se trouve directement associée au mot clé `while`.


## Quand utiliser cette boucle ?

La boucle while doit être utilisée plutôt dans les situations suivantes :

- le nombre d'itérations à effectuer n'est pas forcément connu : peut dépendre d'actions de l'utilisateur par exemple
- les conditions de poursuite de la boucle ne sont pas forcément simples : combinaison de conditions par exemple

La boucle while peut également être utilisée en lieu et place de la boucle for, c'est-à-dire pour faire exactement la même chose, même s'il est préférable d'utiliser une boucle for quand les conditions sont remplies.


## Un exemple d'utilisation

Ce programme permet d'afficher les entiers de 1 à 10 en passant une ligne à chaque fois :

```php runnable
<?php
    $i = 1;
    while ($i <= 10) {
        echo ("$i\n");
        $i++;
    }
?>
```

Modifiez ce programme pour qu'il affiche les entiers sur la même ligne, séparés par une tabulation, puis affiche un retour chariot après la boucle.
Attention, il ne faut pas ajouter de tabulation inutile après le dernier entier.

@[Bien manipuler la boucle while]({"stubs": ["boucle-while_exo1.php"], "command": "php boucle-while_exo1_test.php"})
