# Les chaînes de caractères

Nous allons voir en détail le fonctionnement des `chaînes de caractères`

Une chaîne de caractères est une succession de caractères. Elle peut être considérée comme un tableau mais des fonctions spécifiques sont disponibles pour les manipuler.
Une liste exhaustive est disponible sur le site officiel de PHP : [Les chaînes de caractères en PHP](https://www.php.net/language.types.string).

Parmi ces fonctions, nous pouvons lister :
- strlen(string) : permet de déterminer le nombre de caractères d'une `string`
- str_split(string) : permet de créer un tableau contenant les caractères de la chaîne.
- count_chars(string) : retourne des statistiques sur les caractères utilisés dans une chaîne

L'opérateur permettant de concaténer deux chaînes de caractères, c'est-à-dire d'ajouter ces deux chaînes l'une à la suite de l'autre, est le point : `.`


## Un exemple d'utilisation

```php runnable
<?php
    $string = "Hello world!";

    foreach (count_chars($string, 1) as $i => $val) {
        echo "Il y a $val occurence(s) de \"" , chr($i) , "\" dans la phrase.\n";
    }
?>
```

