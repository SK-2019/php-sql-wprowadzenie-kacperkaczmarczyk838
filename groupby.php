<!DOCTYPE html>
<html> 
<head>
 <link rel="stylesheet" href="mystyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="pracownicy.php">Pracownicy</a>
<a class="nav2" href="funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="sortowanie.php">Sortowanie</a>
</div>
<?php

require_once('connect.php');
echo("<h1>Group By:</h1>");
echo("<h2>Zadanie 1 - Suma zarobków w poszczególnych działach.</h2>");
echo("<li>SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Suma</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }
        echo("</table>");
	 

require_once('connect.php');
echo("<hr />");
echo("<h2>Zadanie 2 - Ilość pracowników w poszczególnych działach.</h2>");
echo("<li>SELECT dzial, count(imie) as ilosc, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, count(imie) as ilosc, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Ilość</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }
        echo("</table>");
	 
  
  ?>
