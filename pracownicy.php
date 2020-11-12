<!DOCTYPE html>
<html>
<head>
<title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mystyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
	<a class="nav1" href="index.php">Strona Główna</a>
	<a class="nav2" href="funkcAgregujace.php">Funkcje Agregujace</a>
	<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
	<a class="nav4" href="sortowanie.php">Sorotwanie</a>
	<a class="nav5" href="groupby.php">Group by</a>
	<a class="nav6" href="having.php">Having</a>
	<a class="nav7" href="limit.php">LIMIT</a>
        <a class="nav8" href="dataiczas.php">Data i czas</a>
</div>	 
<?php

require_once('connect.php');
echo("<h1>Pracownicy:</h1>");
$sql = 'SELECT * FROM pracownicy WHERE dzial = 2';
echo("<h2>Zadanie 1 - Pracownicy tylko z działu 2.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 2 - Pracownicy tylko z działu 2 i z działu 3.</h2>");
echo("<li>SELECT * FROM pracownicy WHERE (dzial = 2 or dzial = 3)</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT * FROM pracownicy WHERE (dzial = 2 or dzial = 3)');
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 3 - Pracownicy tylko z zarobkami mniejszymi niż 30.</h2>");
echo("<li>SELECT * FROM pracownicy WHERE zarobki<30</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT * FROM pracownicy WHERE zarobki<30');
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
?>
