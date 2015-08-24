<?php
/**
 * Created by PhpStorm.
 * User: Mathieu
 * Date: 24-8-2015
 * Time: 11:23
 */

// include core functions
include_once 'includes/core.php';


?>

<html>
<head>
    <title><?=$contact['title']?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php include_once 'views/header.php'; ?>
<h1>
    <?=$contact['title']?>
</h1>
<section>
    <?=$contact['content']?>
</section>
</body>
</html>