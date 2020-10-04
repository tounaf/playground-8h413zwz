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

## Un exemple d'utilisation

Ce programme permet de demander un entier à l'utilisateur, de calculer son carré et son cube puis de les afficher, tant que l'entier saisi par l'utilisateur est différent de 0.
Tech.io ne fournissant pas l'interaction avec l'utilisateur, nous avons simulé l'interaction utilisateur en générant un nombre aléatoirement dans l'intervale [-100, +100]. 

```php runnable
<?php
    do {
        $n = rand (10, 100);
        if ($n != 0) {
            $carre = $n ** 2;
            $cube = $n ** 3;
            echo("$n $carre $cube\n");
        } else { echo("Fin de la boucle\n"); }
    } while ($n != 0);
?>
```

### Un second exemple d'utilisation : 

- Tirage aléatoire de deux entiers.
- La boucle se poursuit tant que la différence entre les deux entiers est supérieure à 10.
- Dans ce cas, les deux entiers sont affichés.

```php runnable
<?php
    do {
        $n1 = rand (10, 100);
        $n2 = rand (10, 100);
        $cond = (abs($n - $n2) > 10);
        if ($cond) {
            echo("$n1 $n2\n");
        } else { echo("Fin de la boucle\n"); }
    } while ($cond);
?>
```