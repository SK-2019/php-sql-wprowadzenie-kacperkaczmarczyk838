<!DOCTYPE html>
<html>
<head>
<title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
	<a class="nav1" href="index.php">Strona Główna</a>
	<a class="nav0" href="formularz.html">Formularz</a>
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
	  $sql = 'SELECT sum(zarobki) as suma, dzial, nazwa_dzial from pracownicy, organizacja where dzial=id_org GROUP BY dzial HAVING sum(zarobki)<28';
echo("<h2>Zadanie 1 - Suma zarobków w poszczególnych działach mniejsza od 28.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Suma</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");	
	   $sql = 'SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30';
echo("<h2>Zadanie 2 - Średnie zarobków mężczyzn w poszczególnych działach większe od 30.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30');
        echo("<table>");
        echo("<th>Średnia</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");	
	 $sql = 'SELECT count(imie) as ilosc, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial having count(imie)>3';
echo("<h2>Zadanie 3 - Ilość pracowników w poszczególnych działach większa od 3.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");


?>
