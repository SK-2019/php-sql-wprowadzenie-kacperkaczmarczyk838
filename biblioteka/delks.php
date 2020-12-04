<html>
<head>
      <title>Kacper Kaczmarczyk 2Ti</title>
      <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="/mstyles.css">
     <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="index.php">Strona Główna</a>
<a class="nav0" href="danedobazy.php">DaneDoBazy</a>
<a class="nav0" href="formularz.html">Formularz</a>
<a class="nav1" href="pracownicy.php">Pracownicy</a>
<a class="nav2" href="funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="sortowanie.php">Sortowanie</a>
<a class="nav5" href="groupby.php">Group by</a>
<a class="nav6" href="having.php">Having</a>
<a class="nav7" href="limit.php">LIMIT</a>
<a class="nav8" href="dataiczas.php">Data i czas</a>
</div>

<?php

  echo ("<h1>id: ".$_POST['id']."</h1>");
require_once("../connect.php");

 $sql = "DELETE FROM pracownicy WHERE id='".$_POST['id']."'";

if ($conn->query($sql) === TRUE) {
        echo("<h1 class='precord'> Usunięto</h1>");
       header('Location: https://php-test-tabd.herokuapp.com/index.php');
      } else {
        echo("<h1 class='precord'>'Error: ' . $sql . '<br>' . $conn->error</h1>");
      }
      

?>

</body>
</head>
</html>
