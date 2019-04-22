<?php
    require_once("bootstrap.php");

    if ( !empty($_POST) ) {
        $user = new User();
        try {
            $user->login();
        } catch (Throwable $t) {
            $error = $t->getMessage();
        }

        $user = new User();
        $user->setId($_POST['id']);

        if ( $user->login() ) {
            $_SESSION['id'] = $user->getId();
        }
    }
    else {
        $error = "Velden zijn verplicht.";
    }
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Inloggen</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="login">
    <main>
        <div>
            <h1>Log in met je account</h1>
            <div class="social">
                <span><img alt="facebook" src="images/icons/BULK_icon_social_Facebook.png"></span>
                <span><img alt="google" src="images/icons/BULK_icon_social_Google.png"></span>
            </div>
            <h3>of gebruik je e-mailadres</h3>
        </div>
        <div class="form-login">
            <form action="" method="POST">
                <input placeholder="E-mailadres" type="email">
                <input placeholder="Wachtwoord" type="password">
                <input placeholder="Login" type="submit" value="Login">
            </form>
            <?php if ( isset($error) ): ?>
                <p id="error">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>
        </div>
        <div>
            <p><a href="#">Wachtwoord vergeten?</a></p>
        </div>
    </main>
    <aside>
        <div class="logo">
            <a href="index.html"><img alt="logo" src="images/logo/BULK_logo_white_slogan.svg"></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <form action="index.html">
                <input class="button-outline" placeholder="Terug naar de startpagina" type="submit"
                       value="Terug naar Startpagina">
            </form>
            <form action="register">
                <input class="button-line" placeholder="Registreren" type="submit" value="Registreren">
            </form>
        </div>
    </aside>
</div>
</body>
</html>