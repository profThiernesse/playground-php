# Les fonctions

En PHP, les fonctions n'ont pas besoin d'être définies avant d'être utilisées. Les noms de fonction sont insensibles à la casse, et il est généralement admis que les fonctions doivent être appelées avec le nom utilisé dans leur déclaration, y compris la casse.

Une fonction peut être définie en utilisant la syntaxe suivante :

```php
<?php
	function foo()
	{
		echo "Exemple de fonction.\n";
	}
?>
```

## Les arguments de fonction

Des informations peuvent être passées à une fonction en utilisant une liste d'arguments, dont chaque expression est séparée par une virgule. Les arguments seront évalués depuis la gauche vers la droite.

```php
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Exemple de fonction.\n";
}
?>
```

### Passage d'arguments par référence

Par défaut, les arguments sont passés à la fonction par valeur (aussi, changer la valeur d'un argument dans la fonction ne change pas sa valeur à l'extérieur de la fonction). Si vous voulez que vos fonctions puissent changer la valeur des arguments, vous devez passer ces arguments par référence.

```php runnable
<?php
	
	$var1=5;
	$var2=9;
	
	echo "var1=$var1\n";
	echo "var2=$var2\n";
	
	// L'échange attendu ne se produira pas car la fonction à reçu uniquement la valeur de la variable.
	echange($var1,$var2);
	
	echo "var1=$var1\n";
	echo "var2=$var2\n";
	
	function echange($a,$b) {
		$tmp=$a;
		$a=$b;
		$b=$tmp;
	}
?>
```


Si vous voulez qu'un argument soit toujours passé par référence, vous pouvez ajouter un `&` devant l'argument dans la déclaration de la fonction.

```php runnable
<?php
	
	$var1=5;
	$var2=9;
	
	echo "var1=$var1\n";
	echo "var2=$var2\n";
	
	echange($var1,$var2);
	
	echo "var1=$var1\n";
	echo "var2=$var2\n";
	
	function echange(&$a,&$b) {
		$tmp=$a;
		$a=$b;
		$b=$tmp;
	}
?>
```

## Les valeurs de retour

Les valeurs sont renvoyées en utilisant une instruction de retour optionnelle. Tous les types de variables peuvent être renvoyés, tableaux et objets compris. Cela fait que la fonction finit son exécution immédiatement et passe le contrôle à la ligne appelante.

```php runnable
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Exemple de fonction.\n";
    return $retval;
}
?>
```

## Valeur par défaut des arguments

Vous pouvez définir des valeurs par défaut pour les arguments de type scalaire.

```php runnable
<?php

	WhatToDoWithBeer("Servir","une Leffe");
	WhatToDoWithBeer("Affoner");
	WhatToDoWithBeer(NULL,"une Maes");
	WhatToDoWithBeer();
	
	function WhatToDoWithBeer($do="Boire",$beer="une Jupiler") {
		echo $do . " " . $beer . "\n";
	}
?>
```

Les arguments avec une valeur par défaut ne sont plus obligatoires. Il faut cependant que les arguments non-définis soient les derniers paramètres de la fonction pour ne pas devoir les renseigner.

### Nombre d'arguments variable

Le point précédent nous amène à la possibilité de définir un nombre variable d'arguments pour une fonction. PHP supporte les fonctions à nombre d'arguments variable. Ceci est implémenté en utilisant le mot clé `...` à partir de PHP 5.6. Les arguments seront passés dans la variable fournie sous forme d'un tableau 

```php runnable
<?php
	echo sum(1, 2, 3, 4);

	function sum(...$numbers) {
		$acc = 0;
		foreach ($numbers as $n) {
			$acc += $n;
		}
		return $acc;
	}
?>
```

Vous pouvez spécifier des arguments classiques avant le mot clé `...`. Dans ce cas, seuls les arguments finaux qui ne correspondent pas à un argument classique seront ajoutés au tableau généré par `...`.

```php runnable
<?php
	fratrie("frère et soeur");
	fratrie("frère", "Antoine");
	fratrie("soeur", "Marie", "Claire", "Lucie");

	function fratrie($type,...$noms) {
		echo "J'ai " . count($noms) . " " . $type . ". ";
		if (count($noms)>0) {
			$sp = (count($noms)>1) ? "les noms" : "le nom";
			$phrase = "Voici $sp : ";
			foreach($noms as $key => $nom) {
				$phrase .= $nom;
				if ($key != count($noms)-1) $phrase .= ", ";
			}
			echo $phrase . ".";
		}
		echo "\n";
	}
?>
```

## Fonctions variables

Comme pour les variables, PHP supporte le concept de fonctions variables. Cela signifie que si le nom d'une variable est suivi de parenthèses, PHP recherchera une fonction de même nom, et essaiera de l'exécuter.

```php runnable
<?php

	$ma_var = "foo";
	$autre_var = "bar";
	$ma_var();

	$autre_var();

/******************************************/
/********* Défintions de fonction *********/ 
/******************************************/

	function foo() {
		echo "Appel de la fonction foo\n";
	}

	function bar() {
		echo "Appel de la fonction bar\n";
	}
?>
```