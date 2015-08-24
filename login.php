<?php

// include core functions
include_once 'includes/core.php';

if(isset($_POST['name'], $_POST['pass'])){
    $SQL = "SELECT * FROM users WHERE name = :name AND pass = :pass";
    $sth = $dbh->prepare($SQL);
    $sth->bindParam(":name", $_POST['name']);
    $sth->bindParam(":pass", $_POST['pass']);
    $sth->execute();
    $results = $sth->fetch();

    if (!is_null($results)) {
        $_SESSION['name'] = $_POST['name'];
        header('Location: index.php');
    } else {
        $fail = TRUE;
    }
}
?>

<html>
<head>
    <title>Inloggen</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php include_once 'views/header.php'; ?>
<h1>
    Inloggen
</h1>
<!-- login -->
<?php if(isset($fail)){ ?>
    <div id="fail">Geen toegang</div>
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