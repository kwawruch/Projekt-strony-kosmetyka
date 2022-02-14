<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> <!--Logo font font-family: 'Pacifico', cursive;-->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> <!--podpis font-family: 'Great Vibes', cursive;-->
    <link href="style.css" rel="stylesheet">
    <title>Beauty - Logowanie Administrator</title>
</head>
<body>
    <div class="login-box">
        <form method="POST" action="admin.php">
            <h1>Panel Administratora</h1>
            <input type="text" name="nickname" placeholder="Nazwa użytkownika"><br>
            <input type="password" name="pass" placeholder="Hasło"><br>
            <input type="submit" value="Zaloguj">
        </form>
    </div>
<?php
    if(isset($_SESSION['nick']))
    {
        echo "Zalogowano...";
        header('Location: moderate.php');
    }
    else
    {
        require_once("php/connect.php");
        $connect = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia!");
        if(isset($_POST['nickname']) && isset($_POST['pass']))
        {
            $login = $_POST['nickname'];
            $haslo = $_POST['pass'];
            
            $sql = "SELECT nazwa,haslo FROM pracownik WHERE nazwa='$login' AND haslo='$haslo'";
            $query = mysqli_query($connect, $sql) or die("Nie udało się przetworzyć żądania");
            if(mysqli_num_rows($query)>0)
            {
                $row = mysqli_fetch_assoc($query);
                if($login == $row['nazwa'])
                {
                    if($haslo == $row['haslo'])
                    {
                        $_SESSION['nick'] = $login;
                        echo $_SESSION['nick'];
                        header('Location: moderate.php');
                    }
                    else echo "Hasło jest niepoprawne";
                }
                else echo "Login jest niepoprawny";  
            }
        }
        mysqli_close($connect);
    }
    
?>
</body>
</html>