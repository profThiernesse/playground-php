# Syntaxe de base

Le PHP doit être délimité par les balises ouvrante `<?php` et fermante `?>`. Lorsque PHP traite un fichier, il cherche les balises d'ouverture et de fermeture qui délimitent le code qu'il doit interpréter. De cette manière, cela permet à PHP d'être intégré dans toutes sortes de documents, car tout ce qui se trouve en dehors des balises ouvrantes / fermantes de PHP est ignoré.

```php runnable
<p>Ceci sera ignoré par PHP et affiché au navigateur.</p>
<?php echo "Alors que ceci sera analysé par PHP.\n"; ?>
<p>Ceci sera aussi ignoré par PHP et affiché au navigateur.</p>
```

Comme en C ou en Perl, PHP requiert que les instructions soient terminées par un point-virgule à la fin de chaque instruction.

PHP supporte les commentaires de type C, C++ et Shell Unix (aussi appelé style Perl). Par exemple :

```php runnable
<?php
    echo "Ceci est un test\n"; // Ceci est un commentaire sur une seule ligne, style c++
    /* Ceci est un commentaire sur
       plusieurs lignes */
    echo "Ceci est un autre test\n";
    echo "Et un test final\n"; # Ceci est un commentaire style shell sur une seule ligne
?>
```

Comme mentionné précédemment, la syntaxe et les instructions de contrôle du PHP sont largement inspirées du C. Les deux différences les plus notables sont :
- la syntaxe des variables. Le langage est non-typé, il ne faut donc pas déclarer les variables. Afin de pouvoir les identifier malgré tout, les variables sont toujours précédées du symbole `$`.
- la non-présence d'une fonction `main` dans le code.
- le paradigme événementiel plutôt que séquentiel. L'intégralité du script est exécutée d'un seul coup sans arrêt.
	- Le PHP va réagir à un événement, envoyer une requête au serveur via le navigateur et recevoir un réponse.
	- Le C exécute tour à tour chaque ligne de code en marquant un arrêt sur certaines instructions nécessitant l'action de l'utilisateur.