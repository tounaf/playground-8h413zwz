# La boucle for

Nous allons voir en détail le fonctionnement de la boucle `for`

Cette boucle est composée de trois éléments :

- l'initialisation de l'index utilisé pour la boucle : `initialisation`
- la condition que doit vérifier l'index pour continuer la boucle : `condition`
- la modification apportée à l'index : ̀`modification`

La structure de la boucle est la suivante :

```php
<?php
for (initialisation ; condition ; modification) {
   actions;
}
?>
```
## Quand utiliser cette boucle ?

La boucle for doit être utilisée plutôt dans les situations suivantes :

- la répétition des mêmes actions un nombre prédéfini de fois
- le nombre d'itérations à effectuer est connu
- les conditions de poursuite de la boucle sont simple
- besoin d'énumérer des valeurs dans un intervalle donné et avec un pas régulier (espace entre deux valeurs contiguës)

## Un exemple d'utilisation

Ce programme permet d'afficher les entiers de 1 à 10 en passant une ligne à chaque fois :

```php runnable
<?php
   for ($i = 1 ; $i <= 10 ; $i++) {
      echo ("$i\n");
   }
?>
```

Modifiez ce programme pour qu'il affiche les entiers sur la même ligne, séparés par une tabulation, puis affiche un retour chariot après la boucle.
Attention, il ne faut pas ajouter de tabulation inutile après le dernier entier.

@[Remplissons des variables]({"stubs": ["boucle-for_exo1.php"], "command": "php boucle-for_exo1_test.php"})
