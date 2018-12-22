# `if`

L'instruction `if` est une des plus importantes instructions de tous les langages, PHP inclus. Elle permet l'exécution conditionnelle d'une partie de code. 

Comme nous l'avons vu dans le paragraphe consacré aux expressions, expression est convertie en sa valeur booléenne. Si l'expression vaut TRUE, PHP exécutera l'instruction et si elle vaut FALSE, l'instruction sera ignorée. 

Les fonctionnalités de l'instruction `if` sont les mêmes en PHP qu'en C :

```php runnable
<?php
	$a=5;
	$b=3;
	if ($a > $b) {
		echo "a est plus grand que b";
	}
?>
```

## `else`

Souvent, vous voulez exécuter une instruction si une condition est remplie, et une autre instruction si cette condition n'est pas remplie. C'est à cela que sert `else`. `else` fonctionne après un `if` et exécute les instructions correspondantes au cas où l'expression du `if` est FALSE. Dans l'exemple suivant, ce bout de code affiche a est plus grand que b si la variable $a est plus grande que la variable $b, et a est plus petit que b sinon :

```php runnable
<?php
	$a=2;
	$b=3;
	if ($a > $b) {
		echo "a est plus grand que b";
	}
	else {
		echo "a est plus petit que b";
	}
?>
```

## `elseif` / `else if`

`elseif`, comme son nom l'indique, est une combinaison de `if` et de `else`. Comme l'expression `else`, il permet d'exécuter une instruction après un `if` dans le cas où le "premier" `if` est évalué comme FALSE. Mais, à la différence de l'expression else, il n'exécutera l'instruction que si l'expression conditionnelle `elseif` est évaluée comme TRUE. L'exemple suivant affichera a est plus grand que b, a est égal à b ou a est plus petit que b :

```php runnable
<?php
	$a=5;
	$a=5;
	if ($a > $b) {
		echo "a est plus grand que b";
	} elseif ($a == $b) {
		echo "a est égal à b";
	} else {
		echo "a est plus petit que b";
	}
?>
```

# `switch`

L'instruction `switch` équivaut à une série d'instructions `if`. En de nombreuses occasions, vous aurez besoin de comparer la même variable (ou expression) avec un grand nombre de valeurs différentes, et d'exécuter différentes parties de code suivant la valeur à laquelle elle est égale. C'est exactement à cela que sert l'instruction `switch`.

```php runnable
<?php
	$i=1;
	switch ($i) {
		case 0:
			echo "i égal 0";
			break;
		case 1:
			echo "i égal 1";
			break;
		case 2:
			echo "i égal 2";
			break;
		default:
			echo "i n'est ni égal à 2, ni à 1, ni à 0.";
}
?>
```

Le `break` est nécessaire pour arrêter l'exécution à la fin du `case`. Sans cela les instructions du `case` suivant seront également exécuter.

Le `default` est utiliser si aucune évalution de `case` n'était vraie.


# Alternative ternaire

Un autre opérateur conditionnel est l'opérateur ternaire `?` avec `:`.
L'expression `(expr1) ? (expr2) : (expr3)` est évaluée à expr2 si expr1 est évaluée à TRUE, et expr3 si expr1 est évaluée à FALSE.

```php runnable
<?php
	$a=-6;
	echo ($a<0) ? "Négatif" : "Positif";
?>
```