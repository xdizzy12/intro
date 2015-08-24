<?php

// include core functions
include_once 'includes/core.php';

if(isset($_POST['name'], $_POST['pass'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $SQL = "INSERT INTO users(name, pass) VALUES (:name, :pass)";
    $sth = $dbh->prepare($SQL);
    $sth->bindParam(":name", $name);
    $sth->bindParam(":pass", $pass);
    $sth->execute();

    $success = TRUE;
}
?>

<html>
<head>
    <title>Registratie</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php include_once 'views/header.php'; ?>
<h1>
    Registratie
</h1>
<!-- registratie -->
<?php if(isset($success)){ ?>
<div id="success">Succes!</div>
<?php } ?>
<form method="post">
    <label for="name">Naam:</label>
    <input type="text" name="name" id="name">
    <label for="pass">Passwoord:</label>
    <input type="text" name="pass" id="pass">
    <input type="submit" value="Registreren">
</form>
</body>
</html>