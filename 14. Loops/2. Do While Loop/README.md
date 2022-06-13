# PHP do while Loop

The ```do...while``` loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

## The PHP do...while Loop

The ```do...while``` loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

### Syntax

```
do {
  code to be executed;
} while (condition is true);
```

### Example first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:

```
<?php
    $x = 1;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
?> 
```

### EXAMPLE sets the $x variable to 6, then it runs the loop, and then the condition is checked:

```
<?php
    $x = 6;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
?> 
```

See [index.php](index.php) for the examples in detail.

[Next >](../3.%20For%20Loop/README.md)