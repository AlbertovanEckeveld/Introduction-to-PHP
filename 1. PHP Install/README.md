# PHP Installation

## What Do I Need?
### To start using PHP, you can:
- Find a web host with PHP and MySQL support
- Install a web server on your own PC, and then install PHP and MySQL  ||  I will recommend taking a look at the folder "XAMPP".

### Use a Web Host With PHP Support
##### If your server has activated support for PHP you do not need to do anything.
###### Just create some .php files, place them in your web directory, and the server will automatically parse them for you.
##### You do not need to compile anything or install any extra tools.
##### Because PHP is free, most web hosts offer PHP support.

### Set Up PHP on Your Own PC   ||  (See [index.php](index.php))

#### However, if your server does not support PHP, you must:
- install a web server
- install PHP
- install a database, such as MySQL

NOTE: XAMPP provides all three applications in 1 program.

The official PHP website (PHP.net) has installation instructions for PHP: http://php.net/manual/en/install.php

# Your first php file:
(See [index.php](index.php))
```
<?php
    $txt = "PHP";
    echo "I love $txt!";
?> 
```
Output:
```
I love PHP!
```

Place your index.php file in 'C:\xampp\htdocs'. 

Then open your web browser and search in the url bar: 'localhost:80/index.php'.

[Next >](../2.%20Syntax/README.md)