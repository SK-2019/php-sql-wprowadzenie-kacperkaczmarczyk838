<!DOCTYPE html>
<html> 
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav0" href="function.php">Funkcja</a>
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
  
 require_once('connect.php');
echo("<h1>Książki i autorzy:</h1>");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuł</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracwonicy"]."</td><td>".$row["tytuł"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        
?>
