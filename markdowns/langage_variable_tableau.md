# Les tableaux

Un tableau en PHP est en fait une carte ordonnée. Une carte est un type qui associe des valeurs à des clés. On parlera de tableau associatif. Pour définir un tableau on utilise le mot-clé `array` ou les `[ ]`. 

Les clés dans un tableau peuvent être de deux types :
1. numérique ;
2. chaîne de caractères.

Un même tableau peut utiliser à la fois des clés numériques et des clés chaînes de caractères.

```php runnable
<?php
	
	$tab1 = array(1, 2, 3);
	$tab2 = array("un" => 1, "deux" => 2, "trois" => 3);
	$tab3 = array(1, "deux" => 2, 3);
	
	var_dump($tab1);
	var_dump($tab2);
	var_dump($tab3);

?>
```

## Opérateurs

|Exemple|Nom|Résultat|
|-------|---|--------|
|$a + $b|Union|Union de $a et $b.|
|$a == $b|Egalité|TRUE si $a et $b contiennent les mêmes paires clés/valeurs.|
|$a === $b|Identique|TRUE si $a et $b contiennent les mêmes paires clés/valeurs dans le même ordre et du même type.|
|$a != $b|Inégalité|TRUE si $a n'est pas égal à $b.|
|$a <> $b|Inégalité|TRUE si $a n'est pas égal à $b.|
|$a !== $b|Non-identique|TRUE si $a n'est pas identique à $b.|

```php runnable
<?php
	$a = array("a" => "pomme", "b" => "banane");
	$b = array("b" => "banane", "a" => "pomme");
	
	var_dump($a==$b);
	var_dump($a===$b);
?>
```

L'opérateur + retourne le tableau de gauche auquel sont ajoutés les éléments du tableau de droite. Pour les clés présentes dans les 2 tableaux, les éléments du tableau de gauche seront utilisés alors que les éléments correspondants dans le tableau de droite seront ignorés.

```php runnable
<?php
	$a = array("a" => "pomme", "b" => "banane");
	$b = array("a" =>"poire", "b" => "fraise", "c" => "cerise");

	$c = $a + $b; // Union de $a et $b
	echo "Union de \$a et \$b : \n";
	var_dump($c);

	$c = $b + $a; // Union de $b et $a
	echo "Union de \$b et \$a : \n";
	var_dump($c);
?>
```