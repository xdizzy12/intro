<?php

// include core functions
include_once 'includes/core.php';

$page = null;
$pageSelect = null;

if(isset($_POST['pageSelect'])){
    $pageSelect = $_POST['pageSelect'];

    if($pageSelect == 'page1') {
        $page = $home;
    } elseif($pageSelect == 'page2') {
        $page = $contact;
    } else {
        $page = null;
        $pageSelect = null;
    }
}

if(isset($_POST['title']) && isset($_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];

    $sql = "UPDATE pages SET title = :title, content = :content WHERE id = :id";
    $sth = $dbh->prepare($sql);
    $sth->bindParam(":title", $title);
    $sth->bindParam(":content", $content);
    $sth->bindParam(":id", $id);
    $sth->execute();

    $success = true;
}

?>

<html>
<head>
    <title>Pagina's bewerken</title>
    <meta charset="utf-8">
</head>
<body>
<?php include_once 'views/header.php'; ?>
<h1>
    Pagina's bewerken
</h1>
<!-- Page selection -->
<form method="post">
    <label for="pageSelect">Kies een pagina</label>
    <select name="pageSelect" id="pageSelect" onchange="this.form.submit()">
        <option value="empty"></option>
        <option value="page1" <?php if($page['title'] == $home['title']){echo "selected";} ?>><?=$home['title'] ?></option>
        <option value="page2" <?php if($page['title'] == $contact['title']){echo "selected";} ?>><?=$contact['title']?></option>
    </select>
</form>
<?php if(!is_null($pageSelect) || isset($success)) {
    if(isset($success)) { ?>
        <div id="success">Success!</div>
    <?php } ?>
    <form method="post">
        <label for="editTitle">Titel</label>
        <input type="text" value="<?=$page['title']?>" name="title" id="editTitle">
        <label for="editContent">Inhoud</label>
        <input type="text" value="<?=$page['content']?>" name="content" id="editContent">
        <input type="hidden" value="<?=$page['id']?>" name="id">
        <input type="submit" value="Bevestigen">
    </form>
<?php } ?>
</body>
</html>