<?php
/**
 * Created by PhpStorm.
 * User: Mathieu
 * Date: 24-8-2015
 * Time: 11:22
 *
 * Inloggen
Registreren
Pagina’s aanpassen
Strakke opmaak
Maximaal 3 kleuren
________________________________________
--DATABASE--
Users
User_name
User_pass
Pages
Page1_title
Page2_title
Page1_content
Page2_content

 */

include_once 'includes/getPage.php';


?>

<html>
<head>
    <title><?php // echo index title ?></title>
</head>
<body>
<header>
    <a href="contact.php">Contact</a>
    <a href="index.php">Home</a>
</header>
<h1>
    <?php // echo index title ?>
</h1>
<section>
    <?php // echo index content ?>
</section>
</body>
</html>