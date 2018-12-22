# Opérateurs logiques et de comparaison

Le tableau ci-dessous reprend la liste de opérateurs logiques par ordre de priorité.

|Exemple|Nom|Résultat|
|-------|---|--------|
|! $a|Not (Non)|TRUE si $a n'est pas TRUE.|
|$a && $b|And (Et)|TRUE si $a ET $b sont TRUE.|
|$a \|\| $b|Or (Ou)|TRUE si $a OU $b est TRUE.|
|$a and $b|And (Et)|TRUE si $a ET $b valent TRUE.|
|$a or $b|Or (Ou)|TRUE si $a OU $b valent TRUE.|
|$a xor $b|XOR|TRUE si $a OU $b est TRUE, mais pas les deux en même temps.|

```php runnable
<?php
	$a=true;
	$b=false;
	
	var_dump($a && $b);
	var_dump($a or $b);
	var_dump($a xor $a);
	
	var_dump($a || $b and $b);
	var_dump($a || $b && $b);
?>
```