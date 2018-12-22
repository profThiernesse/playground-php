# Les variables

En PHP, les variables commencent toujours par un `$` suivi du nom de la variable. Le nom est sensible à la casse.

```php
	//une variable
	$ma_variable = 5;
``` 

Le type d'une variable n'est généralement pas défini par le programmeur ; il sera défini par PHP au moment de l'exécution, suivant le contexte dans lequel la variable est utilisée.

```php runnable
<?php
$a_bool = TRUE;   // un booléen
$a_str  = "foo";  // une chaîne de caractères
$a_str2 = 'foo';  // une chaîne de caractères
$an_int = 12;     // un entier

echo gettype($a_bool); // affiche :  boolean
echo gettype($a_str);  // affiche :  string

// Si c'est un entier, incrément de 4
if (is_int($an_int)) {
    $an_int = $an_int + 4;
}

// Si $a_bool est une chaîne de caractères, on l'affiche
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>
```