# Opérateurs logiques et de comparaison

Le plus souvent les opérateurs logiques et de comparaison sont utilisés en tant qu'expression booléenne simple ou complexe dans les conditions de boucle ou les alternatives.

## Opérateurs logiques

Le tableau ci-dessous reprend la liste de opérateurs logiques par ordre de priorité.

|Exemple|Nom|Résultat|
|-------|---|--------|
|! $a|Not (Non)|TRUE si $a n'est pas TRUE.|
|$a && $b|And (Et)|TRUE si $a ET $b sont TRUE.|
|$a \|\| $b|Or (Ou)|TRUE si $a OU $b est TRUE.|
|$a and $b|And (Et)|TRUE si $a ET $b valent TRUE.|
|$a xor $b|XOR|TRUE si $a OU $b est TRUE, mais pas les deux en même temps.|
|$a or $b|Or (Ou)|TRUE si $a OU $b valent TRUE.|

```php runnable
<?php
	$a=true;
	$b=false;
	
	var_dump($a && $b);
	var_dump($a or $b);
	var_dump($a xor $a);
	
	//Les réponses des deux lignes ci-après sont différentes à cause de la priorité des opérateurs.
	var_dump($a || $b and $b);
	var_dump($a || $b && $b);
?>
```

## Opérateurs de comparaison

Les opérateurs de comparaison, comme leur nom l'indique, vous permettent de comparer deux valeurs.

|Exemple|Nom|Résultat|
|-------|---|--------|
|$a == $b|Egal|TRUE si $a est égal à $b après le transtypage.|
|$a === $b|Identique|TRUE si $a est égal à $b et qu'ils sont de même type.|
|$a != $b|Différent|TRUE si $a est différent de $b après le transtypage.|
|$a <> $b|Différent|TRUE si $a est différent de $b après le transtypage.|
|$a !== $b|Différent|TRUE si $a est différent de $b ou bien s'ils ne sont pas du même type.|
|$a < $b|Plus petit|TRUE si $a est strictement plus petit que $b.|
|$a > $b|Plus grand|TRUE si $a est strictement plus grand que $b.|
|$a <= $b|Inférieur ou égal|TRUE si $a est plus petit ou égal à $b.|
|$a >= $b|Supérieur ou égal|TRUE si $a est plus grand ou égal à $b.|

```php runnable
<?php
	$a=1;
	$b='1';
	
	var_dump($a==$b);
	var_dump($a===$b);
?>
```

Il existe un dernier opérateur un peu différent : 

|---------|-------|----------------------------------------------------------------------------------------------------------------------------------------|
|$a <=> $b|Combiné|Un entier inférieur, égal ou supérieur à zéro lorsque $a est respectivement inférieur, égal, ou supérieur à $b. Disponible depuis PHP 7.|

```php runnable
<?php	
	var_dump(1<=>1);
	var_dump(1<=>2);
	var_dump(2<=>1);
?>
```

## Fonctions

Deux fonctions peuvent encore être utiles lors d'opération de test 
- `isset()` - Détermine si une variable est définie et est différente de NULL
- `empty()` - Détermine si une variable est vide. Les valeurs ci-dessous sont considérées comme étant vides :
	- "" (une chaîne vide)
	- 0 (0 en tant qu'entier)
	- 0.0 (0 en tant que nombre à virgule flottante)
	- "0" (0 en tant que chaîne de caractères)
	- NULL
	- FALSE
	- array() (un tableau vide)
	
```php runnable
<?php
	var_dump(isset($a));
	$a="";
	var_dump(isset($a));
	var_dump(empty($a));
?>
```