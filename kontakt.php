<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usługi - Paznokcie</title>
    <link rel="style" href="Pacifico.ttf" type="font/ttf">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> <!--Logo font font-family: 'Pacifico', cursive;-->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> <!--podpis font-family: 'Great Vibes', cursive;-->
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    <style>
        body {
            background-image: url("images/bg.jpg");
            background-color: white;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="podstrona kontaktpage">
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
    </div>
    <div class="main" style="min-height: 1200px;">
        <hr style="visibility: hidden; margin:50px 0px">
        <div class="kontakt">
            <h2>Beauty - Salon kosmetyczny</h2> <br>
            <p>ul. Ratajska 12xd<br>64-800 Chodzież<br><br><b>Recepcja</b><br>Tel: 503 275 899 <br>Email: info@beauty.pl<br><br><b>Godziny otwarcia:</b></p>
            <table>
                <tr><td>Poniedziałek</td><td> 9:00 - 17:00 </td></tr>
                <tr><td>Wtorek</td><td> 9:00 - 17:00 </td></tr>
                <tr><td>Środa</td><td> 9:00 - 17:00 </td></tr>
                <tr><td>Czwartek</td><td> 9:00 - 17:00 </td></tr>
                <tr><td>Piątek</td><td> 9:00 - 17:00 </td></tr>
                <tr><td>Sobota</td><td> Zamknięte </td></tr>
                <tr><td>Niedziela</td><td> Zamknięte </td></tr>
            </table>
            <?php $current_time = date('H'); $current_day = date('w');
                if($current_time >=10 && $current_time <17)
                {
                    if($current_day > 0 && $current_day<6)
                    {
                        echo "<p>Nasz salon dzisiaj jest <span style='color: green;'>Otwarty!</span>";
                    }
                    else echo "<p>Nasz salon dzisiaj jest <span style='color: red;'>Zamknięty!</span>";
                }
                else echo "<p>Nasz salon jest aktualnie <span style='color: red;'>Zamknięty!</span>";
            ?>
        </div>
        <div class="kontakt">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Chodzie%C5%BC&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a></div><style>.mapouter{position:static;text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;z-index:1 !important; margin-top: 50px;}</style></div>
        </div>
        <div class="kontakt">
            <form method="POST" action="mailto:info@beauty.pl">
                <h2>Skontaktuj się</h2>
                <input type="text" size="40" placeholder="Podaj imię*" required><br>
                <input type="text" size="40" placeholder="E-mail lub numer telefonu*" required><br>
                <input type="text" size="40" placeholder="Temat*" required><br>
                <textarea required cols="38" rows="5" placeholder="Treść*"></textarea><br>
                <input type="submit" value="Wyślij">
            </form>
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
</body>
</html>