# La boucle foreach

Nous allons voir en détail le fonctionnement de la boucle `foreach`

Cette boucle permet de parcourir simplement les éléments d'un tableau.
Elle est composée de :

- le tableau à parcourir : `tableau`
- l'élément extrait à chaque itération : `element`

La structure de la boucle est la suivante :

```php
<?php
   foreach (tableau as element) {
      actions;
   }
?>
```
## Quand utiliser cette boucle ?

Cette boucle doit être utilisée lorsque vous manipulez un tableau.
Sa structure est plus simple à utiliser qu'une boucle for ou while.*


## Un exemple d'utilisation

Ce programme permet d'afficher les entiers de 1 à 10 en passant une ligne à chaque fois.
Une version avec la boucle foreach et l'autre avec la boucle for.

```php runnable
<?php
   $entiers = range(1,10);
   echo ("-- foreach --\n");
   foreach ($entiers as $valeur) {
      echo ("$valeur\n");
   }

   echo ("-- for --\n");
   for ($i = 0 ; $i < count($entiers) ; $i++) {
      echo ("$entiers[$i]\n");
   }
?>
```

La boucle `foreach` permet également de récupérer l'indice et l'élément courant.
La structure de la boucle est alors la suivante : 

```php
<?php
   foreach (tableau as indice => element) {
      actions;
   }
?>
```

En voici un exemple d'utilisation :


```php runnable
<?php
   $tableau = array(
      "un" => 1,
      "deux" => 2,
      "trois" => 3,
      "dix-sept" => 17
   );

   foreach ($tableau as $indice => $valeur) {
      echo "\$tableau[$indice] => $valeur\n";
   }
?>
```