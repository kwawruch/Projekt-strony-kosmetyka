<?php
    require_once("connect.php");
    $connect = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");
    if(isset($_POST['telefon']))
    {
        $fulldata = $_POST['fulldate'];
        $godzina = $_POST['radio'];
        $telefon = $_POST['telefon'];
        $uwagi = $_POST['dodatki'];
        $usluga = $_POST['uslugi-lista'];
        $sqlrez = "INSERT INTO rezerwacja(data,godzina, telefon_klienta, uwagi, id_usluga, id_pracownik) VALUES ('$fulldata','$godzina','$telefon','$uwagi','$usluga','2')";
        $query = mysqli_query($connect,$sqlrez);
        echo "<h2>Udało się zarezerwować termin</h2>";
        $sqlrez2 = "SELECT rezerwacja.data,rezerwacja.godzina,rezerwacja.telefon_klienta,rezerwacja.uwagi,usluga.nazwa,pracownik.nazwa FROM rezerwacja, usluga,pracownik WHERE rezerwacja.id_usluga = usluga.id AND rezerwacja.id_pracownik = pracownik.id ORDER BY rezerwacja.id DESC LIMIT 1";
        $query2 = mysqli_query($connect,$sqlrez2);
        while($row = mysqli_fetch_row($query2))
        {
            echo "Data wizyty: ".$row['0']."<br>Godzina: ".$row['1']."<br>Twój numer tel.: ".$row['2']."<br>Usługa: ".$row['4']."<br>Dodatkowe uwagi: ".$row['3']."<br>Twoja kosmetyczna: Pani ".$row['5']."<br><br>Dziękujemy!<br>Do zobaczenia";
        }
        echo "<br><br><a href='../index.php'>Powrót na stronę główną</a>";
    }
    else echo "error";
    mysqli_close($connect);
?>