<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarządzaj</title>
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
<?php
    require_once('php/connect.php');
    $connect = mysqli_connect($host, $user, $pass, $db);
    if(isset($_SESSION['nick']))
    {
        $nick = $_SESSION['nick'];
        $sql = "SELECT rola.nazwa, rola.id from rola, pracownik WHERE pracownik.rola_id = rola.id and pracownik.nazwa = '$nick'";
        $query = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($query);
        echo "<div class='hellomod'><span>".$row['nazwa'].": ".$_SESSION['nick']."</span>";
        echo '<form method="POST" action="php/logout.php"><input type="submit" value="Wyloguj się"></form></div>';
        $sql = "SELECT id, data FROM rezerwacja ORDER BY data ASC";
        $query = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_row($query))
        {
            if(date("Y-m-d") > $row[1])
            {
                $dsql = "DELETE FROM rezerwacja WHERE id=".$row[0]." || data=".$row[1];
                mysqli_query($connect, $dsql);
            }
        }
ECHO<<<END
        <div style="margin: 50px 0px;" class="moderaterez">
            <div class='m-list m-h'>
                    <div class='m m-data'>Data</div>
                    <div class='m m-hour'>Godzina</div>
                    <div class='m m-us'>Usługa</div>
                    <div class='m m-uw'>Uwagi</div>
                    <div class='m m-tel'>Telefon</div>
                    <div class='m m-prac'>Prac.</div>
                </div>
END;
                $sql = "SELECT DISTINCT data, godzina,usluga.nazwa, uwagi, telefon_klienta, pracownik.nazwa FROM rezerwacja,pracownik,usluga WHERE pracownik.id = rezerwacja.id_pracownik AND usluga.id = rezerwacja.id_usluga ORDER BY data ASC, godzina ASC LIMIT 20";
                $query = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_row($query))
                {
                    echo "<div class='m-list'>
                    <div class='m m-data'>".$row[0]."</div>
                    <div class='m m-hour'>".$row[1].":00</div>
                    <div class='m m-us'>".$row[2]."</div>
                    <div class='m m-uw'>".$row[3]."</div>
                    <div class='m m-tel'>".$row[4]."</div>
                    <div class='m m-prac'>".$row[5]."</div>
                </div>";
                }
ECHO<<<END
        <div class="m-b m-list"></div>
        </div>
END;
    }
    else {
        echo "Nie jesteś zalogowany! <br> <a href='admin.php'>Przejdz do strony logowania</a> Lub <a href='index.php'>Stronę główną</a>";
    }
?>
    <?php mysqli_close($connect); ?>
</body>
</html>