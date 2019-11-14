<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--- font for style of text used on website --->
    <link
            href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
    <title>Wide World Importers</title>
</head>
<body>
<!--- Header of website --->
<header>
    <div class="logo-container">
        <a href="index.php">
            <img border="0" alt="logo" src="wwiLogo.png">
        </a>
    </div>
    <!--- Buttons top of header --->
    <nav>
        <ul class="nav-links">
            <li><a class="nav-link" href="#">Acties</a></li>
            <li><a class="nav-link" href="#">Producten</a></li>
            <li><a class="nav-link" href="over_ons.php">Over ons</a></li>
            <li><a class="nav-link" href="#">Inloggen</a></li>
        </ul>
    </nav>
    <!--- shopping cart --->
    <div class="cart">
        <img src="./img/cart.svg" alt="cart" />
    </div>
</header>

<!--- Center part of landingspage --->


<main>
    <section class="presentation">
        <div class="introduction">
            <div class="intro-text">
                <!--- Text in presentation --->
                <h1>Wide World Importers aangeraden!</h1>
                <p>
                    Next level snelle opslag!
                </p>
            </div>
            <div class="cta">
                <button class="cta-select">Productpagina</button>
                <button class="cta-add">Kopen</button>
            </div>
        </div>
        <div class="cover">
            <img src="./img/usb.png" alt="product" />
        </div>
    </section>

    <!--- Future clickable slideshow setup --->

    <div class="product-select">
        <img src="./img/arrow-left.svg" alt="" />
        <img src="./img/dot.svg" alt="" />
        <img src="./img/dot-full.svg" alt="" />
        <img src="./img/dot-full.svg" alt="" />
        <img src="./img/arrow-right.svg" alt="" />
    </div>

</main>
</body>
</html>
