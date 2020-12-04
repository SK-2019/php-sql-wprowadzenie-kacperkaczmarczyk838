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

 $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";

if ($conn->query($sql) === TRUE) {
        echo("<h1 class='precord'> Usunięto pracownika </h1>");
       header('Location: https://php-test-tabd.herokuapp.com/index.php');
      } else {
        echo("<h1 class='precord'>'Error: ' . $sql . '<br>' . $conn->error</h1>");
      }
      
           echo("<hr />");
           echo("<h1>Tabela Wszystkich Pracowników:</h1>");
$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");

?>

</body>
</head>
</html>
