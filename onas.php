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
        <div class="onaspage">
            <h2>O nas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum risus quam, molestie non mattis at, imperdiet in orci. Donec placerat, risus vel molestie eleifend, ligula libero efficitur ligula, ut faucibus nunc mauris eu velit. Sed felis ligula, aliquet eget malesuada a, auctor sed velit. Quisque a elit pretium leo feugiat commodo non at ligula. Fusce auctor ligula purus, non interdum lectus placerat non. Etiam et ligula tristique, accumsan mi vel, eleifend leo. Morbi ut elit imperdiet magna viverra finibus.

Praesent quis posuere metus. Etiam tincidunt malesuada ligula eget tristique. Donec ipsum felis, condimentum et dolor vel, vestibulum consequat nunc. Curabitur ac tempus ligula. Vivamus et fringilla mi. Sed laoreet ultricies ipsum, sed fermentum erat. Vivamus tempus placerat rutrum. Maecenas congue lectus ut lorem dapibus lacinia. Nam mollis arcu magna, id consectetur odio sollicitudin ac.

Proin rutrum, sem ac interdum euismod, quam tortor auctor lectus, quis convallis purus dui quis mauris. Mauris eleifend risus odio, sed lacinia libero lacinia in. Vivamus at scelerisque massa. Fusce in diam turpis. Mauris viverra sit amet nisi eget laoreet. Fusce gravida quis ligula et imperdiet. Suspendisse a sapien ut odio vehicula viverra. Ut cursus elit magna, vel posuere lorem congue non. Duis purus nunc, dictum eu ex eget, rhoncus ullamcorper massa.

Vestibulum molestie eget leo sit amet tincidunt. Vestibulum sagittis commodo tellus, non gravida erat feugiat non. Donec dignissim quam at dapibus finibus. Aenean eget turpis faucibus, cursus dui ac, egestas nisl. Mauris tincidunt nunc consectetur arcu dignissim dignissim. Maecenas vestibulum accumsan felis sit amet dapibus. Duis id neque nec lectus mollis laoreet. Aliquam sagittis at nisi ut posuere. Cras tincidunt purus sit amet lacus pellentesque, non viverra magna vestibulum. Duis sed porta nunc. Praesent semper erat quis mauris elementum dignissim.

Curabitur tristique, neque eu sodales fringilla, tortor dolor molestie dolor, vitae tristique velit est lobortis justo. Quisque sagittis convallis eros, porttitor suscipit sapien convallis et. Proin mollis tellus sit amet aliquam molestie. Ut dignissim dapibus arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur elementum viverra enim iaculis dictum. Curabitur porta justo nec efficitur congue. Praesent sit amet lectus mollis, lobortis nulla quis, pharetra sapien. In euismod, ante et faucibus congue, libero orci volutpat purus, et mattis sem libero sed diam. Vivamus facilisis lectus vitae rutrum rutrum.</p>
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