# Les fonctions

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