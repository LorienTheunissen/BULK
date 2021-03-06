<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Product</title>
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" rel="alternate">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">
</head>
<body>
<aside>
    <div class="logo">
        <a href="../index.php"><img alt="logo" src="../images/logo/BULK_logo_white_slogan.svg"></a>
    </div>
    <nav>
        <a href="dashboard.php"><span><i class="fas fa-home"></i></span>Startpagina</a>
        <a href="addproduct.php"><i class="fas fa-plus"></i>Product toevoegen</a>
        <a class="active" href="products.php"><i class="fas fa-dolly"></i>Mijn producten</a>
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
            <div class="avatar"><img alt="avatar" src="../images/avatars/BULK_avatar_user_1.jpg"><i
                        class="fas fa-sort-down"></i></div>
        </a>
    </div>
</header>
<main>
    <h1>Productnaam</h1>
    <div class="intro">
        <ul>
            <li><img alt="basket" class="icon"
                     src="../images/icons/BULK_icon_green_price.png"><span>€ 5,00 per kilogram</span></li>
        </ul>
    </div>
    <div class="tab">
        <button class="tab_links" onclick="openTab(event, 'info')">Informatie</button>
        <button class="tab_links" onclick="openTab(event, 'orders')">Bestellingen</button>
        <button class="tab_links" onclick="openTab(event, 'edit')">Bewerk</button>
        <button class="tab_links" onclick="openTab(event, 'delete')">Verwijder</button>
    </div>
    <div class="tab_content" id="info">
        <p>In dit deel komt alle informatie over het product.</p>
    </div>
    <div class="tab_content" id="edit">
        <p>Via deze tab is het mogelijk om je product te bewerken.</p>
    </div>
    <div class="tab_content" id="orders">
        <input class="print" type="submit" onclick="print()" value="Print lijst">
        <table class="orders">
            <tr class="th">
                <th>Naam</th>
                <th>Voornaam</th>
                <th>Telefoonnummer</th>
                <th>Bestelling</th>
                <th>Totaal</th>
            </tr>
            <tr>
                <td>Janssen</td>
                <td>Nick</td>
                <td>+32 477 12 34 56</td>
                <td>2kg</td>
                <td>€10,00</td>
            </tr>
            <tr>
                <td>Vangerven</td>
                <td>Melvin</td>
                <td>+32 477 23 45 67</td>
                <td>2kg</td>
                <td>€10,00</td>
            </tr>
            <tr>
                <td>Berghmans</td>
                <td>Britt</td>
                <td>+32 477 34 56 78</td>
                <td>2,5kg</td>
                <td>€12,50</td>
            </tr>
            <tr class="th">
                <th></th>
                <th></th>
                <th></th>
                <th>6,5 kg</th>
                <th>€ 32,50</th>
            </tr>
        </table>
    </div>
    <div class="tab_content" id="delete">
        <p>Hier kan je je product verwijderen.</p>
    </div>
</main>
<script src="../js/script.js"></script>
</body>
</html>