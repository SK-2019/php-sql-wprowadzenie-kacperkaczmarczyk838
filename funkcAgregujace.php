<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="mystyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
	<a class="nav2" href="index.php">Strona Główna</a>
	<a class="nav1" href="pracownicy.php">Pracownicy</a>
	<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
	<a class="nav4" href="sortowanie.php">Sorotwanie</a>
</div>	 
<?php
require_once('connect.php');
echo("<h2>Zadanie 1 - Suma zarobków wszystkich pracowników.</h2>");
echo("<li>SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
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

require_once('connect.php');
echo("<h2>Zadanie 2- Suma zarobków wszystkich kobiet.</h2>");
echo("<li>SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a" group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a" group by dzial');
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

require_once('connect.php');
echo("<h2>Zadanie 3- Suma zarobków mężczyzn pracujących w dziale 2 i 3.</h2>");
echo("<li>SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial=id_org and imie not like %a and (dzial=3 or dzial=2) group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial=id_org and imie not like "%a" and (dzial=3 or dzial=2)');
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
	 
?>
 

