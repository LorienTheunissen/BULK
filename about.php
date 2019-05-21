<?php

    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Over ons</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link rel="stylesheet" href="css/balloon.css">
</head>
<body>
<nav>
    <div class="logo">
        <a href="#"><img alt="logo" src="images/logo/BULK_logo_white_slogan.svg"></a>
    </div>
    <div class="subnav">
        <ul>
            <li><a href="about">Over BULK</a></li>
            <li><a href="contact">Contact</a></li>
            <div class="dropdown">
                <li><a href="#">Welkom, <span><?php echo $_SESSION['firstName'] ?></span></a></li>
                <div class="dropdown-content">
                    <li><a href="profile.php">Accountoverzicht</a></li>
                    <li><a href="#">Mijn bestellingen</a></li>
                    <li><a href="logout">Uitloggen</a></li>
                </div>
            </div>
            <li data-balloon="Winkelmandje" data-balloon-pos="down"><a href="#"><img alt="basket" class="icon"
                                                                                     src="images/icons/BULK_icon_white_basket.png"></a>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="#">Start</a></li>
            <li><a href="products.php">Producten</a></li>
            <li><a href="suppliers.php">Leveranciers</a></li>
            <li><a href="initiatives.php">Initiatieven</a></li>
        </ul>
    </div>
    <!--
    <div class="search">
        <form action="">
            <input type="text" placeholder="Wat zoek je?" class="search">
            <a href="#" class="search"><img alt="search" class="icon" src="images/icons/BULK_icon_white_search.png"></a>
        </form>
    </div>
    -->
</nav>
<div class="container">
    <div class="main">
        <div class="about-title">
            <h1>Over ons</h1>
        </div>
        <div class="about-text">
            <p>BULK is een project dat bedacht en ontworpen is door drie studenten Interactive Multimedia Design aan
                Thomas More in Mechelen.
                Voor het vak Product Lab was het de bedoeling dat een concept werd bedacht met de Sustainable
                Development Goals in het achterhoofd.
                Met BULK hopen we dat men meer verantwoord consumeert en dat dit een alternatief is voor het aankopen
                van deze producten uit de supermarkt.
                We willen mensen aanzetten tot het kopen van producten bij lokale handelaars. Het bespaart de consument
                afval en meteen weet deze ook waar zijn of haar eten vandaan komt.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusamus aliquam deserunt, eos error
                facere inventore, iure libero nobis optio praesentium sapiente sunt unde. Cupiditate ea esse nulla optio
                repellendus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In itaque minus saepe veniam. A
                aliquid assumenda at, dolores eligendi ex fuga impedit ipsam laborum, mollitia nostrum officia quasi
                quidem velit!</p>
        </div>
    </div>
</div>
</body>
</html>