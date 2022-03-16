# fontawesome
lib fontawesome pour mon framework
Version 5.12.1

# install

```
composer require veka-server/fontawesome
```

Informer le framework que la lib est presente en editant le fichier config/plugin.php
```php
// ajouter la ligne dans le tableau retourné par le fichier
\VekaServer\FontAwesome\Autoload::class
```

Creer une route permettant de telecharger les fonts
```php
 // ...
    ->get('/fontawesome/(.+)',function($filename){\VekaServer\FontAwesome\Autoload::getFontByName($filename);})
 // ...
```
# utilisation
voir le site officiel : https://fontawesome.com/
