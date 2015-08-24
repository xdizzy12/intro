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

?>

<html>
<head>
    <title><?=$home['title']?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php include_once 'views/header.php'; ?>
<h1>
    <?=$home['title']?>
</h1>
<section>
    <?=$home['content']?>
</section>
</body>
</html>