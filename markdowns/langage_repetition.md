# `while`
La boucle `while` est le moyen le plus simple d'implémenter une boucle en PHP. Cette boucle se comporte de la même manière qu'en C. 

La signification d'une boucle `while` est très simple. PHP exécute l'instruction tant que l'expression de la boucle `while` est évaluée comme TRUE. La valeur de l'expression est vérifiée à chaque début de boucle, et, si la valeur change durant l'exécution de l'instruction, l'exécution ne s'arrêtera qu'à la fin de l'itération. Si l'expression du `while` est FALSE avant la première itération, l'instruction ne sera jamais exécutée.

```php runnable
<?php
	$i = 1; //Essayer avec $i qui vaut 10
	while ($i < 10) {
		echo $i . " ";
		$i++;
	}
?>
```

# `do while`
Les boucles `do while` ressemblent beaucoup aux boucles `while`, mais l'expression est testée à la fin de chaque itération plutôt qu'au début. La principale différence par rapport à la boucle `while` est que la première itération de la boucle `do while` est toujours exécutée.

```php runnable
<?php
	$i = 1; //Essayer avec $i qui vaut 10
	do {
		echo $i . " ";
		$i++;
	} while ($i < 10);
?>
```

# `for`

Les boucles `for` sont généralement utilisées quand le nombre d'itération est connu à l'avance.

```php
for (expr1; expr2; expr3)
    commandes
```
La première expression (expr1) est évaluée (exécutée), quoi qu'il arrive au début de la boucle.

Au début de chaque itération, l'expression expr2 est évaluée. Si l'évaluation vaut TRUE, la boucle continue et les commandes sont exécutées. Si l'évaluation vaut FALSE, l'exécution de la boucle s'arrête.

À la fin de chaque itération, l'expression expr3 est évaluée (exécutée).

```php runnable
<?php
	for ($i = 1; $i < 10; $i++) {
		echo $i . " ";
	}
?>
```

# `foreach`

La structure de langage foreach fournit une façon simple de parcourir des tableaux. foreach ne fonctionne que pour les tableaux et les objets, et émettra une erreur si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée. 

La première forme passe en revue le tableau array_expression. À chaque itération, la valeur de l'élément courant est assignée à $value et le pointeur interne de tableau est avancé d'un élément.

```php
foreach (array_expression as $value){
    //commandes
}
```

La seconde forme assignera en plus la clé de l'élément courant à la variable $key à chaque itération.

```php
foreach (array_expression as $key => $value){
    //commandes
}
```

```php runnable
<?php
	$arr = array(1, 2, 3, 4); //Ajouter des éléments au tableau
	foreach ($arr as $valeur) {
		echo $valeur . "\n";
	}
	
	echo "\n";
	
	foreach ($arr as $cle => $valeur) {
		echo '$arr[' . $cle . "] = " . $valeur . "\n";
	}	
?>
```