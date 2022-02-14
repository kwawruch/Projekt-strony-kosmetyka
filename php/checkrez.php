<?php
    require_once("connect.php");
    $miesiac = 0;
    $wyswietlono = false;
    $connect = mysqli_connect($host, $user, $pass, $db);
    if(isset($_POST['rok-lista']) && isset($_POST['miesiac-lista']) && isset($_POST['dzien-lista']))
    {
        if(!empty($_POST['rok-lista']) && !empty($_POST['miesiac-lista']) && !empty($_POST['dzien-lista']))
        {   
            global $rok;
            $rok = $_POST['rok-lista'];
            global $miesiac;
            $miesiac = $_POST['miesiac-lista'];
            global $dzien;
            $dzien = $_POST['dzien-lista'];
            if($_POST['miesiac-lista']>0 && $_POST['miesiac-lista']<13)
            {
                $sql = "SELECT data FROM rezerwacja WHERE data = $rok"."$miesiac"."$dzien";
                $query = mysqli_query($connect, $sql);
                echo "<table><tr>";
                for($i=8; $i<18;$i++)
                {
                    $sql = "SELECT godzina FROM rezerwacja WHERE godzina=$i AND data = $rok"."$miesiac"."$dzien";
                    $query = mysqli_query($connect, $sql);
                    if(mysqli_num_rows($query)>0)
                    {
                        echo '<td class="a'.$i.'"><label class="checkhour"><span class="checkmark-text">'.$i.':00</span>
                            <input type="radio" disabled name="radio">
                            <span class="checkmark blocked"></span>
                            </label></td>';
                    }
                    else {
                        echo '<td class="a'.$i.'"><label class="checkhour"><span class="checkmark-text">'.$i.':00</span>
                        <input type="radio" name="radio" value="'.$i.'" required>
                        <span class="checkmark"></span>
                    </label></td>';
                    }
                }
                echo "</tr></table>"; 
                $wyswietlono = true;
            }          
        }

    }
    






?>