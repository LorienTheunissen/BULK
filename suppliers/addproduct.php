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
        <a class="active" href="addproduct.php"><i class="fas fa-plus"></i>Product toevoegen</a>
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
            <div class="avatar"><img alt="avatar" src="../images/avatars/BULK_avatar_user_1.jpg"><i
                    class="fas fa-sort-down"></i></div>
        </a>
    </div>
</header>
<main>
    <h1>Product toevoegen</h1>
    <div class="error">
        <p id="error">Hier komen de error berichten voor het toevoegen van een nieuw product.</p>
    </div>
    <p>* Verplichte velden</p>
    <form action="addproduct.php" method="POST" class="add_product">
        <div class="row1">
            <div class="product_name">
                <label for="name">Naam*</label>
                <br>
                <input id="name" type="text" required>
            </div>
            <div class="category">
                <label for="category">Categorie*</label>
                <br>
                <select id="category" required>
                    <option disabled selected>Selecteer categorie</option>
                    <option value="aardappelen">Aardappelen</option>
                    <option value="brood">Brood & gebak</option>
                    <option value="beleg">Broodbeleg</option>
                    <option value="eieren">Eieren</option>
                    <option value="fruit">Fruit</option>
                    <option value="fruitsap">Fruitsap</option>
                    <option value="groenten">Groenten</option>
                    <option value="kruiden">Kruiden</option>
                    <option value="schaap">Lams- en schapenvlees</option>
                    <option value="pluimvee">Pluimvee</option>
                    <option value="rund">Runds- en kalfsvlees</option>
                    <option value="varken">Varkensvlees</option>
                    <option value="zuivel">Zuivel</option>
                </select>
            </div>
        </div>
        <div class="row2">
            <label for="product_description">Productbeschrijving</label>
            <textarea name="" id="product_description" cols="30" rows="10"></textarea>
        </div>
        <div class="row3">
            <div class="price">
                <label for="price">Prijs per eenheid*</label>
                <br>
                <input id="price" type="number" required>
            </div>
            <div class="unit">
                <label for="unit"></label>
                <br>
                <select id="unit" required>
                    <option disabled selected>Selecteer eenheid</option>
                    <optgroup label="Aantal">
                        <option value="stuks">stuk</option>
                    </optgroup>
                    <optgroup label="Gewicht">
                        <option value="g">gram</option>
                        <option value="kg">kilogram</option>
                    </optgroup>
                    <optgroup label="Inhoudsmaat">
                        <option value="ml">mililiter</option>
                        <option value="l">liter</option>
                    </optgroup>
                </select>
            </div>
            <div class="picture">
                <label for="picture">Foto</label>
                <input accept="image/png, image/jpeg" id="picture" name="picture" type="file">
            </div>
        </div>
        <div class="row4">
            <div class="min_amount">
                <label for="min_amount">Minimum aankoop per eenheid</label>
                <br>
                <input id="min_amount" type="text">
            </div>
            <div class="min_unit">
                <label for="min_unit"></label>
                <br>
                <select id="min_unit" required>
                    <option disabled selected>Selecteer eenheid</option>
                    <optgroup label="Aantal">
                        <option value="stuks">stuks</option>
                    </optgroup>
                    <optgroup label="Gewicht">
                        <option value="g">gram</option>
                        <option value="kg">kilogram</option>
                    </optgroup>
                    <optgroup label="Inhoudsmaat">
                        <option value="ml">mililiter</option>
                        <option value="l">liter</option>
                    </optgroup>
                </select>
            </div>
            <div class="min_check">
                <input type="checkbox" id="min_check">
                <p>Niet van toepassing</p>
            </div>
        </div>
        <div class="row5">
            <div class="max_amount">
                <label for="max_amount">Maximum beschikbaar</label>
                <br>
                <input id="max_amount" type="text">
            </div>
            <div class="max_unit">
                <label for="max_unit"></label>
                <br>
                <select id="max_unit" required>
                    <option disabled selected>Selecteer eenheid</option>
                    <optgroup label="Aantal">
                        <option value="stuks">stuks</option>
                    </optgroup>
                    <optgroup label="Gewicht">
                        <option value="g">gram</option>
                        <option value="kg">kilogram</option>
                    </optgroup>
                    <optgroup label="Inhoudsmaat">
                        <option value="ml">mililiter</option>
                        <option value="l">liter</option>
                    </optgroup>
                </select>
            </div>
            <div class="max_check">
                <input type="checkbox" id="max_check">
                <p>Niet van toepassing</p>
            </div>
        </div>
        <div class="row6">
            <div class="deadline_date">
                <label for="deadline_date">Deadline datum*</label>
                <br>
                <input id="deadline_date" type="date" required>
            </div>
            <div class="deadline_time">
                <label for="deadline_time">Deadline tijdstip*</label>
                <br>
                <input id="deadline_time" type="time" required>
            </div>
        </div>
        <div class="row7">
            <div class="pickup_date">
                <label for="pickup_date">Afhaling datum*</label>
                <br>
                <input id="pickup_date" type="date" required>
            </div>
            <div class="pickup_address">
                <label for="pickup_address">Afhaling adres*</label>
                <br>
                <select id="pickup_address" required>
                    <option disabled selected>Selecteer adres</option>
                    <option value="address">Hier worden adressen uit database geïmporteerd.</option>
                </select>
            </div>
        </div>
        <div class="row8">
            <label for="pickup_description">Meer concrete informatie over het afhalen van dit product*</label>
            <textarea name="" id="pickup_description" cols="30" rows="10" required></textarea>
        </div>
        <input class="button" type="submit" value="Voeg product toe">
    </form>
</main>
</body>
</html>