EXAMPLE 1:

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?> 

EXAMPLE 2:

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?> 

EXAMPLE 3:

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

