# PHP for Loop

The ```for``` loop - Loops through a block of code a specified number of times.

## The PHP for Loop

The ```for``` loop is used when you know in advance how many times the script should run.

### Syntax
```
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
```

Parameters:

- init counter: Initialize the loop counter value
- test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
- increment counter: Increases the loop counter value

### EXAMPLE below displays the numbers from 0 to 10:

```
<?php
    for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
    }
?> 
```

Example Explained

- $x = 0; - Initialize the loop counter ($x), and set the start value to 0
- $x <= 10; - Continue the loop as long as $x is less than or equal to 10
- $x++ - Increase the loop counter value by 1 for each iteration

### EXAMPLE counts to 100 by tens:

```
<?php
    for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
    }
?> 
```

Example Explained

- $x = 0; - Initialize the loop counter ($x), and set the start value to 0
- $x <= 100; - Continue the loop as long as $x is less than or equal to 100
- $x+=10 - Increase the loop counter value by 10 for each iteration



See [index.php](index.php) for the examples in detail.

[Next >](../4.%20Foreach%20Loop/README.md)