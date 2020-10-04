# Les fonctions

Nous allons voir en détail le fonctionnement des `fonctions`

Une fonction permet de regrouper des instructions de programme réalisant une action logique et atomique, par exemple le calcul des nombres premiers.

Une fonction peut :

- prendre des paramètres
- effectuer des calculs et/ou affichages
- retourner un résultat

Une fonction peut également :

- ne pas prendre de paramètres
- ne pas renvoyer de résultat


## Quelques règles

- Le mot clé permettant de définir une fonction est `function`
- Le nom de la fonction doit respecter les mêmes règles de nommage que celles des variables
- Les paramètres de la fonction sont toujours passés entre parenthèses


## Un exemple d'utilisation

Ce programme permet définit une fonction `estPair` qui permet de définir si un entier est pair ou impair. La fonction renvoie `true` si l'entier est pair et `false` sinon.

```php runnable
<?php
    function estPair ($n) {
        return ($n % 2 == 0);
    }

    for ($i=0; $i<10; $i++) {
        $n = rand(10,100);
        if (estPair($n)) { echo ("[$i] $n est pair\n"); }
        else { echo ("[$i] $n est impair\n"); }
    }
?>
```

