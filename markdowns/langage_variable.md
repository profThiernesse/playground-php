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

## Les variables dynamiques

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
	echo "$a $$a";
?>
``` 