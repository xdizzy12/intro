<?php
// PDO DB connect
try
{
    // database inloggegevens
    $database   = "introweek";  #database
    $host       = "localhost";  #hostname
    $user       = "root";       #username
    $pass       = "";           #password

    //inloggen
    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
} catch(PDOException $e) // errors vangen
{
    die ("Database error! " . $e->getMessage() . "<br>"); // Moet nog verwerkt worden tot een propere error
}

// includes
include_once 'includes/getPage.php';

// functions
function pre($input){
    echo '<pre>';
    print_r($input);
    echo '</pre>';
}

