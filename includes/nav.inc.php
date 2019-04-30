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