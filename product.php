<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Product</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
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
            <li><a href="initiatives.php">Initiatieven</a></li>
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
        <div class="breadcrumbs">
            <a href="products.php"><< Terug naar alle resultaten</a>
        </div>
    </div>
    <div class="product">
        <div class="product-row1">
            <div class="product-img" style="background-image: url('images/products/BULK_products_kersen.jpg');"></div>
            <div class="product-info">
                <h1 class="product-title">Product titel</h1>
                <ul class="product-data">
                    <li>Prijs per kg</li>
                    <li>€ 5,-</li>
                    <li>Minimum aankoop</li>
                    <li>500 g</li>
                    <li>Resterende hoeveelheid</li>
                    <li>10 kg</li>
                    <li>Resterende tijd</li>
                    <li>5 dagen 2 uur</li>
                </ul>
            </div>
        </div>
        <div class="product-row2">
            <div class="product-supplier">
                <img alt="logo" src="images/avatars/BULK_avatar_supplier_logo_1.jpeg">
                <h3>Naam verkoper</h3>
                <form action="supplier.html">
                    <input id="contact-supplier" type="submit" value="Contacteer verkoper">
                </form>
            </div>
            <div class="product-order">
                <form action="product.php" class="product-order" method="POST">
                    <div class="order-fields">
                        <input id="aantal" placeholder="Aantal" required type="text">
                        <select id="soort" required>
                            <option disabled selected>Selecteer eenheid</option>
                            <option value="kilogram">Kilogram</option>
                            <option value="gram">Gram</option>
                        </select>
                    </div>
                    <input id="order-button" type="submit" value="Bestel">
                </form>
                <p id="error">Hier komen de error berichten voor het invullen van de bestelling.</p>
            </div>
        </div>
    </div>
    <div class="others">
        <h2>Andere producten die hierop lijken</h2>
        <div class="products">
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
                            <form action="product.php">
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
                            <form action="product.php">
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
                            <form action="product.php">
                                <input type="submit" value="Bekijk product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>