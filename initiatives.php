<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Initatieven</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/products.css" rel="stylesheet">
    <link rel="stylesheet" href="css/initatives.css">
    <link href="css/progressbar.css" rel="stylesheet">
    <link href="css/balloon.css" rel="stylesheet">
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
                    <li><a href="#">Accountoverzicht</a></li>
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
        <div class="title">
            <h1>Alle initiatieven</h1>
        </div>
        <div class="filter">
            <p>Filteren op:</p>
            <div class="filter-1">
                <select>
                    <option disabled selected>Filter 1</option>
                    <option value="locatie">Locatie</option>
                    <option value="datum">Datum</option>
                    <option value="prijs">Categorie</option>
                </select>
            </div>
            <div class="filter-1">
                <select>
                    <option disabled selected>Filter 2</option>
                    <option value="locatie">Locatie</option>
                    <option value="datum">Datum</option>
                    <option value="prijs">Categorie</option>
                </select>
            </div>
        </div>
        <div class="public">
            <h2>Publieke initiatieven</h2>
            <p>Aan deze initatieven kan iedereen deelnemen.</p>
            <div class="products">
                <div class="product ">
                    <div class="product-img" style="background-image: url('images/products/BULK_products_tofu.jpg')">
                    </div>
                    <div class="product-card">
                        <h2 class="product-name">Tofu</h2>
                        <div class="progress-container" data-balloon="50%" data-balloon-pos="down">
                            <div class="progress">
                                <div class="progress-bar">50%</div>
                            </div>
                        </div>
                        <div class="product-icons">
                            <ul>
                                <li><img alt="basket" class="icon"
                                         src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
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
                            <div class="supplier distributor">
                                <a href="distributor.php"><img
                                            alt=""
                                            src="images/avatars/BULK_avatar_distributor_1.jpg"><span>Verdeler</span></a>
                            </div>
                            <div class="button">
                                <form action="initiative.php">
                                    <input type="submit" value="Bekijk initiatief">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product ">
                    <div class="product-img" style="background-image: url('images/products/BULK_products_kaas.jpeg')">
                    </div>
                    <div class="product-card">
                        <h2 class="product-name">Kaas</h2>
                        <div class="progress-container" data-balloon="50%" data-balloon-pos="down">
                            <div class="progress">
                                <div class="progress-bar">50%</div>
                            </div>
                        </div>
                        <div class="product-icons">
                            <ul>
                                <li><img alt="basket" class="icon"
                                         src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
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
                            <div class="supplier distributor">
                                <a href="distributor.php"><img
                                            alt=""
                                            src="images/avatars/BULK_avatar_distributor_1.jpg"><span>Verdeler</span></a>
                            </div>
                            <div class="button">
                                <form action="initiative.php">
                                    <input type="submit" value="Bekijk initiatief">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product ">
                    <div class="product-img"
                         style="background-image: url('images/products/BULK_products_yoghurt.jpeg')">
                    </div>
                    <div class="product-card">
                        <h2 class="product-name">Yoghurt</h2>
                        <div class="progress-container" data-balloon="50%" data-balloon-pos="down">
                            <div class="progress">
                                <div class="progress-bar">50%</div>
                            </div>
                        </div>
                        <div class="product-icons">
                            <ul>
                                <li><img alt="basket" class="icon"
                                         src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
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
                            <div class="supplier distributor">
                                <a href="distributor.php"><img
                                            alt=""
                                            src="images/avatars/BULK_avatar_distributor_1.jpg"><span>Verdeler</span></a>
                            </div>
                            <div class="button">
                                <form action="initiative.php">
                                    <input type="submit" value="Bekijk initiatief">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product ">
                    <div class="product-img" style="background-image: url('images/products/BULK_products_melk.jpg')">
                    </div>
                    <div class="product-card">
                        <h2 class="product-name">Melk</h2>
                        <div class="progress-container" data-balloon="50%" data-balloon-pos="down">
                            <div class="progress">
                                <div class="progress-bar">50%</div>
                            </div>
                        </div>
                        <div class="product-icons">
                            <ul>
                                <li><img alt="basket" class="icon"
                                         src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
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
                            <div class="supplier distributor">
                                <a href="distributor.php"><img
                                            alt=""
                                            src="images/avatars/BULK_avatar_distributor_1.jpg"><span>Verdeler</span></a>
                            </div>
                            <div class="button">
                                <form action="initiative.php">
                                    <input type="submit" value="Bekijk initiatief">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="private">
            <h2>Privé-initatieven</h2>
            <p>Aan deze initatieven kan u enkel deelnemen als u beschikt over een code.</p>
            <div class="products">
                <div class="product ">
                    <div class="product-img"
                         style="background-image: url('images/products/BULK_products_yoghurt.jpeg')">
                    </div>
                    <div class="product-card">
                        <h2 class="product-name">Yoghurt</h2>
                        <div class="progress-container" data-balloon="50%" data-balloon-pos="down">
                            <div class="progress">
                                <div class="progress-bar">50%</div>
                            </div>
                        </div>
                        <div class="product-icons">
                            <ul>
                                <li><img alt="basket" class="icon"
                                         src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
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
                            <div class="supplier distributor">
                                <a href="distributor.php"><img
                                            alt=""
                                            src="images/avatars/BULK_avatar_distributor_1.jpg"><span>Verdeler</span></a>
                            </div>
                            <div class="button">
                                <form action="initiative.php">
                                    <input type="submit" value="Bekijk initiatief">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product ">
                    <div class="product-img" style="background-image: url('images/products/BULK_products_melk.jpg')">
                    </div>
                    <div class="product-card">
                        <h2 class="product-name">Melk</h2>
                        <div class="progress-container" data-balloon="50%" data-balloon-pos="down">
                            <div class="progress">
                                <div class="progress-bar">50%</div>
                            </div>
                        </div>
                        <div class="product-icons">
                            <ul>
                                <li><img alt="basket" class="icon"
                                         src="images/icons/BULK_icon_green_location.png"><span>Locatie (aantal km)</span>
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
                            <div class="supplier distributor">
                                <a href="distributor.php"><img
                                            alt=""
                                            src="images/avatars/BULK_avatar_distributor_1.jpg"><span>Verdeler</span></a>
                            </div>
                            <div class="button">
                                <form action="initiative.php">
                                    <input type="submit" value="Bekijk initiatief">
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