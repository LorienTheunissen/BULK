<?php

require_once("bootstrap.php");
session_start();

$id = $_SESSION['id'];

$user = new User();
$user->getUserById($id);

if(!empty($_POST)){
    $user->setFirstName($_POST['firstName']);
    $user->setLastName($_POST['lastName']);
    $user->setEmail($_POST['email']);
    $user->setRegion($_POST['region']);
    $user->updateProfile();
    $status = "Profiel gewijzigd!";
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Profiel</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">
</head>
<body>
<aside>
    <div class="logo">
        <a href="index.php"><img alt="logo" src="images/logo/BULK_logo_white_slogan.svg"></a>
    </div>
    <nav>
        <a href="products.php"><span><i class="fas fa-home"></i></span>Startpagina</a>
        <a class="active" href="profile.php"><i class="fas fa-plus"></i>Profiel</a>
        <a href="products.php"><i class="fas fa-dolly"></i>Mijn producten</a>
        <a href="#"><i class="fas fa-cash-register"></i>Item</a>
        <a href="#"><i class="fas fa-cog"></i>Instellingen</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i>Uitloggen</a>
    </nav>
</aside>
<header>
    <div class="search">
        <input placeholder="Wat zoek je?" type="text">
        <input type="submit" value="Zoeken">
    </div>
    <div class="user">
        <!--<a href="#" class="notification">Notificaties</a>-->
        <a href="#">
            <div class="avatar"><img alt="avatar" src="images/avatars/BULK_avatar_user_1.jpg"><i
                        class="fas fa-sort-down"></i></div>
        </a>
    </div>
</header>
<main>
    <h1>Profiel</h1>
    <?php if(isset($status)): ?>
        <div class="error"><?php echo $status; ?></div>
    <?php endif; ?>
    <p>* Verplichte velden</p>
    <form action="" method="POST" class="add_product" enctype="multipart/form-data">
        <div class="row1">
            <div class="firstName">
                <label for="firstName">Voornaam*</label>
                <br>
                <input id="firstName" type="text" required name="firstName" value = "<?php echo $user->getFirstName(); ?>">
            </div>
            <div class="lastName">
                <label for="lastName">Achternaam*</label>
                <br>
                <input id="lastName" type="text" required name="lastName" value = "<?php echo $user->getLastName(); ?>">
            </div>
        </div>
        <div class="row1">
            <div class="email">
                <label for="email">Email*</label>
                <br>
                <input id="email" type="text" required name="email" value = "<?php echo $user->getEmail(); ?>">
            </div>            
        </div>
        <div class="row3">
            <div class="region">
                <label for="region">Region</label>
                <br>
                <input id="region" type="text" required name="region" value = "<?php echo $user->getRegion(); ?>">
            </div>
        </div>
        <div class="row4">
            <div class="password">
                <label for="password">Paswoord*</label>
                <br>
                <input id="password" type="password" name="password" value = "<?php echo $user->getPassword(); ?>">
            </div>
            <div class="passwordConfirmation">
                <label for="passwordConfirmation">Bevestig paswoord*</label>
                <br>
                <input id="passwordConfirmation" type="password" name="passwordConfirmation">
            </div>
        </div>
        
        <input class="button" type="submit" value="Opslaan">
    </form>
</main>
</body>
</html>