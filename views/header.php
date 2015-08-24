<header>
    <a href="index.php"><?=$home['title']?></a>
    <a href="contact.php"><?=$contact['title']?></a>
    <?php if(isset($_SESSION['name'])){ ?>
    <a href="edit.php">Pagina's bewerken</a>
    <a href="logout.php">Uitloggen</a>
    <?php } else { ?>
    <a href="register.php">Registreren</a>
    <a href="login.php">Inloggen</a>
    <?php }

    if(isset($_SESSION['name'])) {
        echo "<span id='welcome'>Welcome, " . $_SESSION['name'] . "</span>";
    }?>
</header>