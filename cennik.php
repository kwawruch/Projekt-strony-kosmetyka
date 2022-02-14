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
    <div class="podstrona">
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
    <div class="main">
        <div class="cennikpage">
            <?php
                require_once("php/connect.php");
                $connect = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");
                $sql = "SELECT nazwa, cena FROM usluga";
                $query = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_assoc($query))
                {
                    echo "<div class='item'><div class='item-name'>".$row['nazwa']."</div> <div class='item-prize'><span style='font-size: 16px;'>od </span>".$row['cena']." zł</div></div>";
                }
                mysqli_close($connect);
            ?>
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