# PHP Constants
Constants are like variables except that once they are defined they cannot be changed or undefined.

## PHP Constants

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

## Create a PHP Constant

To create a constant, use the ```define()``` function.

### Syntax

```define(name, value, case-insensitive)```

Parameters:

- name: Specifies the name of the constant
- value: Specifies the value of the constant
- case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false


### EXAMPLE Create a constant with a case-sensitive name:

```
<?php
    define("GREETING", "Welcome to Github/AlbertovanEckeveld!");
    echo GREETING;
?> 
```

### EXAMPLE Create a constant with a case-insensitive name:

```
<?php
    define("GREETING", "Welcome to Github/AlbertovanEckeveld!", true);
    echo greeting;
?> 
```

## PHP Constant Arrays

In PHP7, you can create an Array constant using the ```define()``` function.

### EXAMPLE Create an Array constant:

```
<?php
    define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
    ]);
    echo cars[0];
?> 
```

## Constants are Global

Constants are automatically global and can be used across the entire script.

### EXAMPLE This example uses a constant inside a function, even if it is defined outside the function:

```
<?php
    define("GREETING", "Welcome to Github/AlbertovanEckeveld!");

    function myTest() {
    echo GREETING;
    }
    
    myTest();
?> 
```

See [index.php](index.php) for the examples in detail.

[Next >](../11.%20Operators/README.md)