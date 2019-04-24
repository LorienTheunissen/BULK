<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Mijn producten</title>
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
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
    <h1>Mijn producten</h1>
    <div class="row_header">
        <div class="add_product">
            <form action="addproduct.php">
                <input class="button" type="submit" value="Product toevoegen">
            </form>
        </div>
        <div class="filter">
            <div class="filter"> Sorteren op
                <select>
                    <option value="datum_recent">Datum (recent)</option>
                    <option value="datum_oud">Datum (oud)</option>
                    <option value="naam">Naam</option>
                    <option value="categorie">Categorie</option>
                </select>
            </div>
        </div>
    </div>
    <table class="products">
        <tr class="th">
            <th>Naam</th>
            <th>Categorie</th>
            <th>Bekeken</th>
            <th>Geïnteresseerd</th>
            <th>Besteld</th>
            <th></th>
        </tr>
        <tr>
            <td>Aardappelen</td>
            <td>Groenten</td>
            <td>5 keer</td>
            <td>3 keer</td>
            <td>0 keer</td>
            <td class="product_link">
                <form action="product.php">
                    <input class="button" type="submit" value="Bekijk">
                </form>
            </td>
        </tr>
        <tr>
            <td>Kersen</td>
            <td>Fruit</td>
            <td>5 keer</td>
            <td>3 keer</td>
            <td>0 keer</td>
            <td class="product_link">
                <form action="product.php">
                    <input class="button" type="submit" value="Bekijk">
                </form>
            </td>
        </tr>
        <tr>
            <td>Melk</td>
            <td>Zuivel</td>
            <td>5 keer</td>
            <td>3 keer</td>
            <td>0 keer</td>
            <td class="product_link">
                <form action="product.php">
                    <input class="button" type="submit" value="Bekijk">
                </form>
            </td>
        </tr>
        <tr>
            <td>Yoghurt</td>
            <td>Zuivel</td>
            <td>5 keer</td>
            <td>3 keer</td>
            <td>0 keer</td>
            <td class="product_link">
                <form action="product.php">
                    <input class="button" type="submit" value="Bekijk">
                </form>
            </td>
        </tr>
    </table>
</main>
</body>
</html>