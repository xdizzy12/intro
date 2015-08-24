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

// include core functions
include_once 'includes/core.php';
include_once 'includes/getPage.php';


?>

<html>
<head>
    <title><?=$home['title']?></title>
</head>
<body>
<header>
    <a href="index.php"><?=$home['title']?></a>
    <a href="contact.php"><?=$contact['title']?></a>
</header>
<h1>
    <?=$home['title']?>
</h1>
<section>
    <?=$home['content']?>
</section>
</body>
</html>