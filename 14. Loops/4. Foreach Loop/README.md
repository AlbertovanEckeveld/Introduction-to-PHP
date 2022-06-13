# PHP foreach Loop

The ```foreach``` loop - Loops through a block of code for each element in an array.

## The PHP foreach Loop

The ```foreach``` loop works only on arrays, and is used to loop through each key/value pair in an array.

### Syntax

```
foreach ($array as $value) {
  code to be executed;
} 
```

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.


### EXAMPLE will output the values of the given array ($colors):

```
<?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
    echo "$value <br>";
    }
?> 
```

### EXAMPLE will output both the keys and the values of the given array ($age):

```
<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
    echo "$x = $val<br>";
    }
?> 
```

You will learn more about arrays in the [Arrays](../../16.%20Arrays) chapter.

See [index.php](index.php) for the examples in detail.

[Next >](../3.%20For%20Loop/README.md)