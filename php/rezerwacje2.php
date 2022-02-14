<?php
    echo' <form method="POST" action="php/finalrez.php" autocomplete="off">';
    require_once("php/checkrez.php"); 
    if(isset($dzien)) {
        echo "<p style='font-size: 130%;'>Twoja data wizyty to<span style='border-bottom: 1px solid red '> $dzien - $miesiac - $rok </span><br> Jeśli chcesz ją zmienić kliknij <a style='color: red' href='rezerwacje.php'>TUTAJ!</a><br>Wybierz godzinę i wypełnij resztę pól </p>";
        $fulldate = $rok.$miesiac.$dzien;
        if($rok < date('Y'))
        {
                    $wyswietlono = false;
                    echo "<h1>Podana data nie jest możliwa do wyboru,<br> ponieważ już upłynęła lub jest to dzień dzisiejszy.</h1>";
        }
        elseif ($rok == date('Y')) {
            if($miesiac < date('m'))
            {
                $wyswietlono = false;
                echo "<h1>Podana data nie jest możliwa do wyboru,<br> ponieważ już upłynęła lub jest to dzień dzisiejszy.</h1>";
            } 
            elseif ($miesiac == date('m')) {
                if($dzien <= date('d'))
                {
                    $wyswietlono = false;
                    echo "<h1>Podana data nie jest możliwa do wyboru,<br> ponieważ już upłynęła lub jest to dzień dzisiejszy.</h1>";
                }
                else $wyswietlono = true;
            }
            else $wyswietlono = true;
        }
        else $wyswietlono = true;
        echo "<input type='text' value='".$fulldate."' name='fulldate' style='display: none'>"; //Ten input jest tylko po to, bo zmienne dzien miesiac i rok nie dzialaly mi w innych if'ach i już mi się nie chciało z tym bawić bo global nie pomagał
    }
    
    if($wyswietlono)
    {
        ?>
        <script type="text/javascript">document.getElementById('tohide').style.display = 'none';</script>
        <?php
        $sql = "SELECT id,nazwa from usluga";
        $query = mysqli_query($connect, $sql);
        echo '
        <input type="text" placeholder="Numer telefonu" name="telefon" class="rezdata" required>
        <input type="text" placeholder="Dodatkowe uwagi (opcionalne)" name="dodatki" class="rezdata">
        <input list="uslugi-lista" placeholder="Nazwa usługi" name="uslugi-lista" class="rezdata" required>
        <datalist id="uslugi-lista">';
                while($row = mysqli_fetch_row($query))
                {
                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                }
        echo '</datalist><br>
        <input type="submit" value="Zarezerwuj" id="submitrez">
    </form>';
    }
    else echo "<br>Oczekiwanie na wprowadzenie daty...";

?>
