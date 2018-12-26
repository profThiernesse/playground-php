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

*Un page sera consacrée aux opérateurs booléen et de comparaison.*

## number

Number est un pseudo type indiquant qu'il s'agit aussi bien d'un entier que d'un nombre décimal.

### integer
Un entier est un nombre appartenant à la classe $`\mathbb{Z} = \{..., -2, -1, 0, 1, 2, ...\}`$.

Les entiers peuvent être spécifiés en notation décimale (base 10), hexadécimale (base 16), octale (base 8), ou binaire (base 2). L'opérateur de négation peut être utilisé pour désigner un entier négatif.
```php 
<?php
$a = 1234; // un nombre décimal
$a = -123; // un nombre négatif
$a = 0123; // un nombre octal (équivalent à 83 en décimal)
$a = 0x1A; // un nombre héxadecimal (équivalent à 26 en décimal)
$a = 0b11111111; // un nombre binaire (équivalent à 255 en decimal)
?>
```

### float
Les nombres décimaux (aussi connus comme nombres à virgule flottante, "floats", "doubles", ou "real numbers") peuvent être spécifiés en utilisant les syntaxes suivantes :
```php 
<?php
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
?>
```

### Opérateurs

Les opérateurs mathématiques du PHP sont repris dans le tableau ci-après.

|Exemple|Nom|Résultat|
|-------|---|--------|
|-$a|Négation|Opposé de $a.|
|$a + $b|Addition|Somme de $a et $b.|
|$a - $b|Soustraction|Différence de $a et $b.|
|$a * $b|Multiplication|Produit de $a et $b.|
|$a / $b|Division|Quotient de $a et $b.|
|$a % $b|Modulus|Reste de $a divisé par $b.|
|$a ** $b|Exponentielle|Résultat de l'élévation de $a à la puissance $b.|

L'opérateur de division `/` retourne une valeur à virgule flottante. Pour la division entière, il faut utiliser la fonction `intdiv`.

```php runnable
<?php
	$a=7;
	$b=2;
	
	var_dump(-$a);
	var_dump($a+$b);
	var_dump($a-$b);
	var_dump($a*$b);
	var_dump($a/$b);
	var_dump($a%$b);
	var_dump($a**$b);
	var_dump(intdiv($a,$b));
?>
```

## string
Une chaîne de caractères est une série de caractères.
Une chaîne de caractères littérale peut être spécifiée de 4 façons différentes :
- Entourée de guillemets simples `'`. Le contenu de la chaîne n'est pas analysé. 
- Entourée de guillemets doubles `"`. Le contenu de la chaîne est analysé, les variables sont remplacées par leur valeur.
- Syntaxe Heredoc qui se comporte comme les guillemets doubles.
- Syntaxe Nowdoc  qui se comporte comme les guillemets simples.

```php runnable
<?php
	$a = "Hello World";

	echo 'J\'affiche : $a';
	echo "\n";

	echo "J'affiche : $a\n";

	
//Heredoc
	echo <<<SYMBOL
J'affiche $a
	Et sur plusieurs lignes simplement avec indentation.

SYMBOL;

//Nowdoc
	echo <<<'SYMBOL'
J'affiche $a
Et sur plusieurs lignes simplement avec indentation.
SYMBOL;
?>
```

### Opérateurs

Il y a deux opérateurs de chaînes de caractères string. Le premier est l'opérateur de concaténation `.`, qui retourne la concaténation de ses deux arguments. Le second est l'opérateur d'affectation concaténant `.=`. 

```php runnable
<?php
	$a = "Hello";
	echo $a . " world\n";
	
	$a .= " world !";
	echo $a;
?>
```

## Les types composés

Les types composés sont construits de la composition d'une ou plusieurs variables de type scalaire (boolean, integer, float et string) ou de type composé. 

### array
Un tableau en PHP est en fait une carte ordonnée. Une carte est un type qui associe des valeurs à des clés. On parlera de tableau associatif. Pour définir un tableau on utilise le mot-clé `array` ou les `[ ]`. 

*Un page sera consacrée à l'usage des tableaux en PHP.*

```php runnable
<?php
//Avec un index numérique
$table = array(1,2,3,4); //Affiche tout le tableau grâce au var_dump
var_dump($table);


// Avec des clés associatives
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array['foo']); //Affiche l'entrée associée à la clé 'foo'

// depuis PHP 5.4
$tableau = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($tableau['bar']); //Affiche l'entrée associée à la clé 'bar'
?>
```

### object
Il s'agit d'objet dans le cadre de la programmation orientée objet qui ne fait pas partie de ce cours.


## Les types spéciaux

### resource

Une ressource est une variable spéciale, contenant une référence vers une ressource externe. Les ressources sont créées et utilisées par des fonctions spéciales.

Une ressource représente un fichier ouvert, une connexion à une base de données, une image, etc.
Lors de la connexion à une base de données, nous manipulerons une ressource. Il faudra donc la manipuler avec des fonctions spécifiques.

### NULL

La valeur spéciale NULL représente une variable sans valeur. NULL est la seule valeur possible du type NULL.

Une variable est considérée comme null si :
- elle s'est vue assigner la constante NULL.
- elle n'a pas encore reçu de valeur.
- elle a été effacée avec la fonction unset().


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
Afin de pouvoir utiliser les variables dynamiques avec les tableaux, vous avez à résoudre un problème ambigu. Si vous écrivez $$a[1], l'analyseur a besoin de savoir si vous parlez de la variable qui a pour nom $a[1] ou bien si vous voulez l'index [1] de la variable $$a. La syntaxe pour résoudre cette ambiguïté est la suivante : ${$a[1]} pour le premier cas et ${$a}[1] pour le deuxième.

# Les constantes

Une constante est un identifiant (un nom) qui représente une valeur simple. Comme son nom le suggère, cette valeur ne peut jamais être modifiée durant l'exécution du script. Par défaut, le nom d'une constante est sensible à la casse. Par convention, les constantes sont toujours en majuscules.

```php runnable
<?php
	define("FOO","Hello");
	echo FOO . "World";
?>
```