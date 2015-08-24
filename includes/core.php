<?php

// PDO login
try
{
    // database inloggegevens
    $database   = "introweek";   #database
    $host       = "localhost";  #hostname
    $user       = "root";       #username
    $pass       = "";           #password

    //inloggen
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
} catch(PDOException $e) // errors vangen
{
    echo ("Database error! " . $e->getMessage() . "<br>"); // Moet nog verwerkt worden tot een propere error
}
?>