<?php
session_start();
require 'include/loginCheck.php';
require 'include/loginCheckAdmin.php';

// empty variables
$uError = $eError = $pError = $pError2 = $username = $email = $password2 = $password1 = $permError = $error = $errorList =  NULL;
$errorList = array(NULL); // error array

// if form is send
if(isset($_POST['username'], $_POST['password1'], $_POST['password2'])) {
    // includes
    require 'include/dbConnect.php';

    // POST values from form
    $username   = $_POST['username'];
    $password1  = $_POST['password1'];
    $password2  = $_POST['password2'];

    // validation - if < 1 then the validation procession will fail
    $validation = 1;

    // username validation
    if(empty($username)){
        array_push($errorList, "<li>Naam mag niet leeg zijn</li>");
    } elseif(preg_match($regex, $username)){
        // check name availability
        $sql    = "SELECT * FROM users WHERE user_name = :username";
        $query  = $db->prepare($sql);
        $query->bindParam(":username", $username);
        $query->execute();
        // check rowCount
        if($query->rowCount() > 0){
            // error
            $validation--;
            array_push($errorList, "<li>Deze naam bestaat al</li>");

        } else {
            // add slashes/htmlspecialchars to username for database storage
            $usernameSlash = slashName($username);
        }
    } else {
        // error
        $validation--;
        array_push($errorList, "<li>Naam is incorrect</li>");
    }

    // password validation
    if(strlen($password1) >= 6){
        // Options (cost = performance/speed)(salt is optional)
        $options = [
            'cost' => 12,
        ];
        
        if {
            $validation--;
            array_push($errorList, "<li>Wachtwoord is incorrect</li>");
        }
    } else {
        // error
        $validation--;
        array_push($errorList, "<li>Wachtwoord is niet lang genoeg</li>");
    }

    // check both passwords
    if($password1 !== $password2) {
        // error
        $validation--;
        array_push($errorList, "<li>Wachtwoorden zijn niet gelijk</li>");
    }

    // if validation then insert into database
    if($validation == 1){
        // correct
        // insert userinfo into database
        $sql    = "INSERT INTO users (user_name, user_password, user_email, user_permissions)
                  VALUES
                  (:name, :password, :email, :permissions)";
        $query  = $db->prepare($sql);
        $query->bindParam(":name", $usernameSlash);
        $query->bindParam(":password", $hash);
        $query->execute();

        $success = TRUE;
    } else {
        // error handling
        if($permission == "admin"){
            $permError = "SELECTED";
        }
    }

    // error check
    if($validation !== 1) {
        // Create errorlist title
        $error = "Error:";
    }
}
?>

<html>
<head>
    <title>Registreer een nieuwe gebruiker</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
</head>
<body>
<?php require 'include/layout/cmsHeader.php';?>
<h1>Nieuwe gebruiker</h1>
<?php
// if errors
if(!empty($error)) {
    echo "<div class='errorList'><span>$error</span><ul>";
    // list every error in <li> tags
    foreach ($errorList as $errorItem) {
        echo $errorItem;
    }
    echo "</ul></div>";
}

if(isset($success)) {
    echo "<div class='success'><span>Gebruiker is toegevoegd</span></div>";
}
?>
<form action="" method="post" id="userForm">
    <label for="username">Naam: </label>
        <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            <?php echo $uError; // if error echo ?>
    <label for="password1">Wachtwoord: </label>
        <input type="password" name="password1" id="password1">
            <?php echo $pError; // if error echo ?>
    <label for="password2">Herhaal wachtwoord: </label>
        <input type="password" name="password2" id="password2">
            <?php echo $pError2; // if error echo ?>
    <input type="submit" value="Versturen">
</form>
<?php require 'include/layout/cmsFooter.php'; ?>
</body>
</html>
