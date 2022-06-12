EXAMPLE 1:

<?php
    define("GREETING", "Welcome to Github/AlbertovanEckeveld!");
    echo GREETING;
?> 

EXAMPLE 2:

<?php
    define("GREETING", "Welcome to Github/AlbertovanEckeveld!", true);
    echo greeting;
?>  

EXAMPLE 3:

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 

EXAMPLE 4:

<?php
define("GREETING", "Welcome to Github/AlbertovanEckeveld!");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 