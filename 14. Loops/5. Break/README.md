# PHP Break and Continue
## PHP Break

You have already seen the ```break``` statement used in an earlier chapter of this tutorial. It was used to "jump out" of a ```switch``` statement.

The ```break``` statement can also be used to jump out of a loop.

### EXAMPLE jumps out of the loop when x is equal to 4:

```
<?php
    for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
    }
?> 
```

## PHP Continue

The ```continue``` statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

### EXAMPLE skips the value of 4:

```
<?php
    for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
    }
?> 
```

## Break and Continue in While Loop

You can also use ```break``` and ```continue``` in while loops:

### EXAMPLE Break:

```
 <?php
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
?> 
```

### EXAMPLE Continue

```
 <?php
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?> 
```

See [index.php](index.php) for the examples in detail.

[Next >](../../15.%20Functions/README.md)