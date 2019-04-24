<?php
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Producten</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/products.css" rel="stylesheet">
    <link href="css/balloon.css" rel="stylesheet">
</head>
<body>
<nav>
    <div class="logo">
        <a href="#"><img alt="logo" src="images/logo/BULK_logo_white_slogan.svg"></a>
    </div>
    <div class="subnav">
        <ul>
            <li><a href="about.php">Over BULK</a></li>
            <li><a href="contact.php">Contact</a></li>
            <div class="dropdown">
                <li><a href="#">Welkom, <span>Joris</span></a></li>
                <div class="dropdown-content">
                    <li><a href="#">Accountoverzicht</a></li>
                    <li><a href="#">Mijn bestellingen</a></li>
                    <li><a href="logout.php">Uitloggen</a></li>
                </div>
            </div>
            <li data-balloon="Winkelmandje" data-balloon-pos="down"><a href="#"><img alt="basket" class="icon" src="images/icons/BULK_icon_white_basket.png"></a></li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="#">Start</a></li>
            <li><a href="products.php">Producten</a></li>
            <li><a href="suppliers.html">Leveranciers</a></li>
            <li><a href="initiatives.html">Initiatieven</a></li>
        </ul>
    </div>
    <div class="search">
        <form action="">
            <input type="text" placeholder="Wat zoek je?" class="search">
            <a href="#" class="search"><img alt="search" class="icon" src="images/icons/BULK_icon_white_search.png"></a>
        </form>
    </div>
</nav>
<div class="container">
    <div class="main">
        <div class="title">
            <h1>Alle producten</h1>
        </div>
        <div class="filter">
            <p>Filteren op:</p>
            <div class="filter-1">
                <select>
                    <option disabled selected>Filter 1</option>
                    <option value="locatie">Locatie</option>
                    <option value="datum">Datum</option>
                    <option value="prijs">Prijs</option>
                </select>
            </div>
            <div class="filter-2">
                <select>
                    <option disabled selected>Filter 2</option>
                    <option value="locatie">Locatie</option>
                    <option value="datum">Datum</option>
                    <option value="prijs">Prijs</option>
                </select>
            </div>
            <div class="filter-3">
                <select>
                    <option disabled selected>Filter 3</option>
                    <option value="locatie">Locatie</option>
                    <option value="datum">Datum</option>
                    <option value="prijs">Prijs</option>
                </select>
            </div>
        </div>
        <div class="products">
            <div class="product">
                <div class="product-img" style="background-image: url('images/products/BULK_products_aardappelen.jpg')">
                </div>
                <div class="product-card">
                    <h2 class="product-name">Aardappelen</h2>
                    <div class="product-icons">
                        <ul>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_timer.png"><span>Resterende tijd</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_minimum.png"><span>Minimum aankoop</span>
                            </li>
                            <li><img alt="basket" class="icon"
                                     src="images/icons/BULK_icon_green_price.png"><span>Prijs</span></li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="supplier">
                            <a href="supplier.html"><img
                                    alt=""
                                    src="images/avatars/BULK_avatar_supplier_logo_1.jpeg"><span>Verkoper</span></a>
                        </div>
                        <div class="button">
                            <form action="product.html">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-img" style="background-image: url('images/products/BULK_products_bloemkool.png')">
                </div>
                <div class="product-card">
                    <h2 class="product-name">Bloemkool</h2>
                    <div class="product-icons">
                        <ul>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_timer.png"><span>Resterende tijd</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_minimum.png"><span>Minimum aankoop</span>
                            </li>
                            <li><img alt="basket" class="icon"
                                     src="images/icons/BULK_icon_green_price.png"><span>Prijs</span></li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="supplier">
                            <a href="supplier.html"><img
                                    alt=""
                                    src="images/avatars/BULK_avatar_supplier_logo_2.jpeg"><span>Verkoper</span></a>
                        </div>
                        <div class="button">
                            <form action="product.html">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-img" style="background-image: url('images/products/BULK_products_kersen.jpg')">
                </div>
                <div class="product-card">
                    <h2 class="product-name">Kersen</h2>
                    <div class="product-icons">
                        <ul>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_timer.png"><span>Resterende tijd</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_minimum.png"><span>Minimum aankoop</span>
                            </li>
                            <li><img alt="basket" class="icon"
                                     src="images/icons/BULK_icon_green_price.png"><span>Prijs</span></li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="supplier">
                            <a href="supplier.html"><img
                                    alt=""
                                    src="images/avatars/BULK_avatar_supplier_logo_3.jpeg"><span>Verkoper</span></a>
                        </div>
                        <div class="button">
                            <form action="product.html">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-img" style="background-image: url('images/products/BULK_products_aardbeien.jpg')">
                </div>
                <div class="product-card">
                    <h2 class="product-name">Aardbeien</h2>
                    <div class="product-icons">
                        <ul>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_timer.png"><span>Resterende tijd</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_minimum.png"><span>Minimum aankoop</span>
                            </li>
                            <li><img alt="basket" class="icon"
                                     src="images/icons/BULK_icon_green_price.png"><span>Prijs</span></li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="supplier">
                            <a href="supplier.html"><img
                                    alt=""
                                    src="images/avatars/BULK_avatar_supplier_logo_1.jpeg"><span>Verkoper</span></a>
                        </div>
                        <div class="button">
                            <form action="product.html">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-img" style="background-image: url('images/products/BULK_products_peren.png')">
                </div>
                <div class="product-card">
                    <h2 class="product-name">Peren</h2>
                    <div class="product-icons">
                        <ul>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_timer.png"><span>Resterende tijd</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_minimum.png"><span>Minimum aankoop</span>
                            </li>
                            <li><img alt="basket" class="icon"
                                     src="images/icons/BULK_icon_green_price.png"><span>Prijs</span></li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="supplier">
                            <a href="supplier.html"><img
                                    alt=""
                                    src="images/avatars/BULK_avatar_supplier_logo_2.jpeg"><span>Verkoper</span></a>
                        </div>
                        <div class="button">
                            <form action="product.html">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-img" style="background-image: url('images/products/BULK_products_witloof.jpg')">
                </div>
                <div class="product-card">
                    <h2 class="product-name">Witloof</h2>
                    <div class="product-icons">
                        <ul>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_timer.png"><span>Resterende tijd</span>
                            </li>
                            <li><img alt="basket" class="icon" src="images/icons/BULK_icon_green_minimum.png"><span>Minimum aankoop</span>
                            </li>
                            <li><img alt="basket" class="icon"
                                     src="images/icons/BULK_icon_green_price.png"><span>Prijs</span></li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="supplier">
                            <a href="supplier.html"><img
                                    alt=""
                                    src="images/avatars/BULK_avatar_supplier_logo_3.jpeg"><span>Verkoper</span></a>
                        </div>
                        <div class="button">
                            <form action="product.html">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="footer">
      <ul>
        <li><a href="#">Footer link 1</a></li>
        <li><a href="#">Footer link 2</a></li>
        <li><a href="#">Footer link 3</a></li>
      </ul>
    </div>-->
</div>
</body>
</html>