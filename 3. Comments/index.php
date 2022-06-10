EXAMPLE 1:

<!DOCTYPE html>
<html>
<body>

<?php
    // This is a single-line comment

    # This is also a single-line comment
?>

</body>
</html> 

EXAMPLE 2:

<!DOCTYPE html>
<html>
<body>

    <?php
        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */
    ?>

</body>
</html> 

EXAMPLE 3:

<!DOCTYPE html>
<html>
<body>

<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

</body>
</html> 