# PHP while Loop

The ```while``` loop - Loops through a block of code as long as the specified condition is true.

## The PHP while Loop

The ```while``` loop executes a block of code as long as the specified condition is true.

### Syntax

```
while (condition is true) {
  code to be executed;
}
```

### Example The example below displays the numbers from 1 to 5:

```
<?php
    $x = 1;

    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
    }
?> 
```

Example Explained
- $x = 1; - Initialize the loop counter ($x), and set the start value to 1
- $x <= 5 - Continue the loop as long as $x is less than or equal to 5
- $x++; - Increase the loop counter value by 1 for each iteration

### EXAMPLE This example counts to 100 by tens:

```
<?php
    $x = 0;

    while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
    }
?> 
```

Example Explained
- $x = 0; - Initialize the loop counter ($x), and set the start value to 0
- $x <= 100 - Continue the loop as long as $x is less than or equal to 100
- $x+=10; - Increase the loop counter value by 10 for each iteration



See [index.php](index.php) for the examples in detail.

[Next >](../2.%20Do%20While%20Loop/README.md)