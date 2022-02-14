<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty - Twój salon piękności</title>
    <link rel="style" href="Pacifico.ttf" type="font/ttf">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> <!--Logo font font-family: 'Pacifico', cursive;-->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> <!--podpis font-family: 'Great Vibes', cursive;-->
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <div class="onloade" id="onloade">
        <h1 id="loadani">Beauty</h1>
        <h1 id="loadanime">Beauty</h1>
    </div>
    <div class="banner">
        <div class="header" id="headerjs">
            <div class="logo">
                <span class="logo-small-title">Beauty</span>
            </div>
            <div class="menu">
                <ul id="MenuButton">
                    <li><a href="index.php">Strona główna</a></li>
                    <li><a id="addon" href="#uslugi">Usługi</a>
                        <ul>
                            <li class="dropli"><a href="paznokcie.html">Paznokcie</a></li>
                            <li class="dropli"><a href="pielegnacja.html">Pielęgnacja ciała</a></li>
                            <li class="dropli"><a href="makijaz.html">Makijaż</a></li>
                            <li class="dropli"><a href="masaz.html">Masaż</a></li>
                        </ul>
                    </li>
                    <li><a href="cennik.php">Cennik</a></li>
                    <li><a href="rezerwacje.php">Rezerwacje</a></li>
                    <li><a href="onas.php">O nas</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
                <button class="menu-button" onClick="ShowMenu()"><span class="menu-button-t">+</span></button>
            </div>
        </div>
        <div class="banner-title">
            <span class="big-logo-title">Beauty</span><br><span class="big-logo-text">Twój salon piękności</span>
            <a href="#onas" id="godown">&#187;</a>
        </div>
    </div>
    <div class="main" style="margin-top: 0px;">
        <div class="onas" id="onas">
            <h2>O nas!</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam amet distinctio iste quod corrupti, culpa nulla consectetur ducimus asperiores quae totam illo qui numquam? Nisi sequi facere consectetur sunt.</p>
            <a href="onas.php">CZYTAJ DALEJ</a>
        </div>
        <div class="hr">&#9733; &#9733; &#9733;</div>
        <div class="uslugi">
            <h1 id="uslugi">Nasze usługi</h1>
            <div class="usluga">
                <img src="images/usluga1.jpg" alt="Usluga.jpg">
                <h2>Paznokcie</h2>
                <p>Krótki opis usługi Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident dolore nesciunt vel error, id rerum suscipit! Dignissimos quidem ea aut ut earum impedit quo cupiditate, error odit architecto tempore quis?</p>
                <a href="paznokcie.html">Zobacz więcej</a>
            </div>
            <div class="usluga">
                <img src="images/usluga2.jpg" alt="Usluga.jpg">
                <h2>Pielęgnacja ciała</h2>
                <p>Krótki opis usługi Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident dolore nesciunt vel error, id rerum suscipit! Dignissimos quidem ea aut ut earum impedit quo cupiditate, error odit architecto tempore quis?</p>
                <a href="pielegnacja.html">Zobacz więcej</a>
            </div>
            <div class="usluga">
                <img src="images/usluga3.jpg" alt="Usluga.jpg">
                <h2>Profesionalny makijaż, henna</h2>
                <p>Krótki opis usługi Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident dolore nesciunt vel error, id rerum suscipit! Dignissimos quidem ea aut ut earum impedit quo cupiditate, error odit architecto tempore quis?</p>
                <a href="makijaz.html">Zobacz więcej</a>
            </div>
            <div class="usluga">
                <img src="images/usluga4.jpg" alt="Usluga.jpg">
                <h2>Masaż</h2>
                <p>Krótki opis usługi Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident dolore nesciunt vel error, id rerum suscipit! Dignissimos quidem ea aut ut earum impedit quo cupiditate, error odit architecto tempore quis?</p>
                <a href="masaz.html">Zobacz więcej</a>
            </div>
        </div>
        <div class="hr">&#9733; &#9733; &#9733;</div>
        <div class="cennik">
            <h1>Cennik</h1>
            <p>Poznaj ceny poszczególnych usług z naszych ofert!<br>Ceny podane są w przybliżeniu w zależności od potrzeb klienta. <br>Za kolejne wizyty w naszym salonie jak i większe zamówienia przysługuje zniżka w zależności od łącznej ceny usług.</p>
            <p>Kliknij poniżej i sprawdź ceny!</p>
            <a href="cennik.php">Zobacz więcej</a>
        </div>
        <div class="hr">&#9733; &#9733; &#9733;</div>
        <div style="margin-bottom: 100px;" class="rezerwacje">
            <h1>Rezerwacje</h1>
            <p>Tutaj możesz sprawdzić czy mamy wolne terminy, wybrać dogodny dla siebie dzień i godzinę oraz dokonać rezerwacji.<br>Czynność ta jest możliwa na stronie lub telefonicznie.<br>Do rezerwacjia na stronie zapraszamy poniżej lub telefonicznie <a style="margin: 0; padding: 0; display: initial; font-size: 15px; text-align: initial !important;" href="kontakt.php">TUTAJ!</a></p>
            <a href="rezerwacje.php">Zobacz więcej</a>
        </div>
    </div>
    <div class="footer">
        <div class="footer-block">
            <div class="logo">
                <span class="logo-small-title">Beauty</span>
            </div>
        </div>
        <div class="footer-block">
            Salon kosmetyczny <br>Beauty <br>64-800 Chodzież <br>ul. Ratajska 12xd <br><br> Godziny otwarcia:<br>Pn-pt 9:00 - 17:00
        </div>
        <div class="footer-block">
            Tel: 503 275 899 <br>Email: info@beauty.pl
        </div>
        <div class="admin">
            <a href="admin.php">Admin</a>
        </div>
    </div>
</body>
</html>