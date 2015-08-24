<?php
/*
 * Get page info for:
 * Page 1
 * Page 2
 */


function getPage($page){
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

    // get data
    if($page == 1) {
        $sth = $dbh->prepare("SELECT * FROM pages WHERE id = 1");
        $sth->execute();
        $results = $sth->fetch();
        return $results;
    } elseif($page == 2) {
        $sth = $dbh->prepare("SELECT * FROM pages WHERE id = 2");
        $sth->execute();
        $results = $sth->fetch();
        return $results;
    } else {
        die('Error');
    }
}

// arrays containing page data
$home       = getPage(1); // page 1 in array keys: title, content
$contact    = getPage(2); // page 2 in array keys: title, content
