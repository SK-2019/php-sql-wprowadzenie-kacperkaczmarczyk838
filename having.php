<!DOCTYPE html>
<html>
<head>
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
	<a class="nav7" href="limit.php">LIMIT</a>
        <a class="nav8" href="dataiczas.php">Data i czas</a> 
	
</div>	 
<?php

require_once('connect.php');
echo("<h1>Having:</h1>");
echo("<h2>Zadanie 1 -Suma zarobków w poszczególnych działach mniejsza od 28.</h2>");
echo("<li>SELECT sum(zarobki) as suma, nazwa_dzial from pracownicy, organizacja GROUP BY dzial HAVING sum(zarobki)<28</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT sum(zarobki) as suma, nazwa_dzial from pracownicy, organizacja GROUP BY dzial HAVING sum(zarobki)<28');
        echo("<table>");
        echo("<th>Suma</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

?>
