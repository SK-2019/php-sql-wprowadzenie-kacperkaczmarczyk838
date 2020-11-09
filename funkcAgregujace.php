<!DOCTYPE html>
<html>
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mystyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
	<a class="nav2" href="index.php">Strona Główna</a>
	<a class="nav1" href="pracownicy.php">Pracownicy</a>
	<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
	<a class="nav4" href="sortowanie.php">Sorotwanie</a>
	<a class="nav5" href="groupby.php">Group by</a>
	<a class="nav6" href="having.php">Having</a>
	<a class="nav7" href="limit.php">LIMIT</a>
        <a class="nav8" href="dataiczas.php">Data i czas</a>
</div>	 
<?php
require_once('connect.php');
echo("<h1>Funkcje agregujące:</h1>");
echo("<h2>Zadanie 1 - Suma zarobków wszystkich pracowników.</h2>");
echo("<li>SELECT sum(zarobki) as suma from pracownicy</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT sum(zarobki) as suma from pracownicy');
        echo("<table>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 2- Suma zarobków wszystkich kobiet.</h2>");
echo("<li>SELECT sum(zarobki) as suma from pracownicy where imie like %a</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT sum(zarobki) as suma from pracownicy where imie like "%a"');
        echo("<table>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 3 - Suma zarobków mężczyzn pracujących w dziale 2 i 3  .</h2>");
echo("<li>SELECT sum(zarobki) as suma from pracownicy where imie not like %a and (dzial=2 or dzial=3)</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT sum(zarobki) as suma from pracownicy where imie not like %a and (dzial=2 or dzial=3)');
        echo("<table>");
        echo("<th>Dzial</th>");
        echo("<th>Suma</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 4 - Średnia zarobków pracowników z działu 4.</h2>");
echo("<li>SELECT avg(zarobki) as srednia from pracownicy where dzial=4</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy where dzial=4');
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 5 - Średnia zarobków mężczyzn z działu 1 i 2 .</h2>");
echo("<li>SELECT dzial, avg(zarobki) as srednia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial=id_org and imie not like %a and (dzial=1 or dzial=2) group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, avg(zarobki) as srednia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial=id_org and imie not like "%a" and (dzial=1 or dzial=2) group by dzial');
        echo("<table>");
        echo("<th>Dzial</th>");
        echo("<th>Średnia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 6 - Ilu jest wszystkich pracowników?</h2>");
echo("<li>SELECT count(imie) as ilosc FROM `pracownicy`</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT count(imie) as ilosc FROM `pracownicy`');
        echo("<table>");
        echo("<th>Ilość</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 7 - Ile kobiet pracuje łącznie w działach 1 i 3?</h2>");
echo("<li>SELECT dzial, count(imie) as ilosc FROM `pracownicy` where imie like %a and (dzial=1 or dzial=3) group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, count(imie) as ilosc FROM `pracownicy` where imie like "%a" and (dzial=1 or dzial=3) group by dzial');
        echo("<table>");
	echo("<th>Dzial</th>");
        echo("<th>Ilość</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
?>
 

