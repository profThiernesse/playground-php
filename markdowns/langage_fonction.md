# Les fonctions

En PHP, les fonctions n'ont pas besoin d'être définies avant d'être utilisées. Les noms de fonctions sont insensibles à la casse, et il est généralement admis que les fonctions doivent être appelées avec le nom utilisé dans leur déclaration, y compris la casse.

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

<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Exemple de fonction.\n";
    return $retval;
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