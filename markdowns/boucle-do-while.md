# La boucle do-while

Nous allons voir en détail le fonctionnement de la boucle `do - while`

Cette boucle est composée de trois éléments :

- l'initialisation de l'index utilisé pour la boucle : `initialisation`
- la condition que doit vérifier l'index pour continuer la boucle : `condition`
- la modification apportée à l'index : ̀`modification`

La structure de la boucle est la suivante :

```php
<?php
    initialisation ;
    do {
        actions;
        modification;
    } while (condition);
?>
```

Outre l'apparition du mot clé `do`, nous pouvons noter que la principale différence avec la boucle `while` est que la condition pour réaliser / continuer la boucle se situe à la fin de la boucle.

## Quand utiliser cette boucle ?

La boucle do-while doit être utilisée plutôt dans les situations suivantes :

- les actions à réaliser doivent au moins être effectuées une fois, indépendamment de la condition pour poursuivre la boucle
- le nombre d'itérations à effectuer n'est pas forcément connu : peut dépendre d'actions de l'utilisateur par exemple
- les conditions de poursuite de la boucle ne sont pas forcément simples : combinaison de conditions par exemple

Un cas d'utilisation classique de cette boucle est : une interaction avec l'utilisateur pour recueillir une information qui va conditionner la poursuite de la boucle.

## Un exemple d'utilisation

Ce programme permet de demander un entier à l'utilisateur, de calculer son carré et son cube puis de les afficher, tant que l'entier saisi par l'utilisateur est différent de 0 :

```php runnable
<?php
    $fin = rand(10, 100);
    do {
        $n = rand (10, 100);
        if ($n != $fin) {
            $carre = $n ** 2;
            $cube = $n ** 3;
            echo ("$n $carre $cube\n");
        } else { echo ("Fin de la boucle\n"); }
    } while ($n != $fin);
?>
```

Modifiez ce programme pour qu'il affiche les entiers sur la même ligne, séparés par une tabulation, puis affiche un retour chariot après la boucle.
Attention, il ne faut pas ajouter de tabulation inutile après le dernier entier.

@[Bien manipuler la boucle do-while]({"stubs": ["boucle-while_exo1.php"], "command": "php boucle-while_exo1_test.php"})
