# Les variables

En PHP, les variables commencent toujours par un `$` suivi du nom de la variable. Le nom est sensible à la casse.

```php
<?php
	//une variable
	$ma_variable = 5;
?>
``` 

Le type d'une variable n'est généralement pas défini par le programmeur ; il sera défini par PHP au moment de l'exécution, suivant le contexte dans lequel la variable est utilisée.

```php runnable
<?php
	$a_bool = TRUE;   // un booléen
	$a_str  = "foo";  // une chaîne de caractères
	$a_str2 = 'foo';  // une chaîne de caractères
	$an_int = 12;     // un entier

	echo gettype($a_bool) ."\n"; // affiche :  boolean
	echo gettype($a_str) ."\n";  // affiche :  string

	var_dump($an_int);
	var_dump($an_str2);
?>
```

- `var_dump()` : Affiche les informations structurées d'une variable, y compris son type et sa valeur. Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure.
- `gettype()` : Retourne le type d'une variable.

# Les types de variable
Bien que le PHP soit un langage non-typé, des types sont bien définis pour les variables.

## boolean
C'est le type le plus simple. Un booléen représente une valeur de vérité. Il peut valoir TRUE ou FALSE.
```php
<?php
	$ma_variable = true; //assigne la valeur TRUE à $ma_variable
?>
```

## integer
Un entier est un nombre appartenant à la classe $`\mathbb{Z}`$ Z = {..., -2, -1, 0, 1, 2, ...}.

Les entiers peuvent être spécifiés en notation décimale (base 10), hexadécimale (base 16), octale (base 8), ou binaire (base 2). L'opérateur de négation peut être utilisé pour désigner un entier négatif.

## float

## string

# Les variables dynamiques

Il est pratique d'avoir parfois des noms de variables qui sont variables. C'est-à-dire un nom de variable qui est affecté et utilisé dynamiquement. Une variable classique est affectée avec l'instruction suivante :
```php
<?php
	$a = 'bonjour';
?>
``` 

Une variable dynamique prend la valeur d'une variable et l'utilise comme nom d'une autre variable. Dans l'exemple ci-dessous, bonjour peut être utilisé comme le nom d'une variable en utilisant le "$$" précédent la variable. C'est-à-dire :
```php
<?php
	$a = 'bonjour';
	$$a = 'monde';
?>
``` 
À ce niveau, deux variables ont été définies et stockées dans l'arbre des symboles PHP : $a avec comme valeur "bonjour" et $bonjour avec comme valeur "monde".

```php runnable
<?php
	$a = 'bonjour';
	$$a = 'monde';
	echo "$a ${$a}";
?>
``` 
Afin de pouvoir utiliser les variables dynamiques avec les tableaux, vous avez à résoudre un problème ambigu. Si vous écrivez $$a[1], l'analyseur a besoin de savoir si vous parler de la variable qui a pour nom $a[1] ou bien si vous voulez l'index [1] de la variable $$a. La syntaxe pour résoudre cette ambiguïté est la suivante : ${$a[1]} pour le premier cas et ${$a}[1] pour le deuxième.