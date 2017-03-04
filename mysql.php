<?php 
require "config.php";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    echo "ühendus olemas teeme midagi";
    mysqli_close($l);
?>

