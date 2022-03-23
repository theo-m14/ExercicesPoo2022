# Enoncé de l'exercice

En utilisant les méthodes de votre choix, créez 3 classes **Animal**, **Poisson** et **Oiseau**.

Faites en sorte que la hiérarchie Parent-Enfant soit en place.

La classe parent sera une classe abstraite qui ne pourra donc pas avoir d'instances.

La classe parent possèdera 3 propriétés : **Race**,**Nom** et **Moyen de locomotion**.

Elle possèdera aussi 3 méthodes : - Identify : Une méthode qui permet à l'objet de s'identifier en utilisant son nom et sa race (Une phrase qui explique l'action) - Flee : Qui utilisera son moyen de locomotion pour s'enfuir (Une phrase qui explique l'action) - Eat : Qui sera une méthode abstraite à définir chez la classe enfant.

La propriété moyen de locomotion sera **surchargée** chez les classes enfant, et chacune des classes enfant possèdera une méthode unique qu'il vous adviendra de créer.

Créez des instances de ces classes et montrez un jeu d'essais sur différentes pages à l'aide d'un routeur que vous aurez implémenté (nul de besoin de le recréer de toutes pièces, prenez exemple sur le repository [OOP_2022](https://github.com/NegiAlba/OOP_2022.git)) dans le projet.

Ensuite créez une page d'accueil avec des boutons de redirection qui dirigent vers les différentes pages du jeu d'essai.

Vous pourrez créer une barre de navigation pour faciliter la navigation entre les différentes pages.

### BONUS

1. Créez une classe calculatrice qui permet d'effectuer des calculs sur des éléments. Cette classe possèdera 5 méthodes (add, multiply, divide, substract, median) qui effectueront une opération à partir d'un formulaire implanté sur une page.
   - Add : addition
   - Multiply : multiplication
   - Divide : division
