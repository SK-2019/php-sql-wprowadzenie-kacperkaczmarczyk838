<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 echo("<hr />");
<?php

require_once('connect.php');
echo("<h2>Zadanie 1</h2>");
echo("<li>SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org</li>");

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

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 2</h2>");
echo("<li>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like %a</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"');
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 3</h2>");
echo("<li>SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like %a and (dzial=1 or dzial=4)</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a" and (dzial=1 or dzial=4)');
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 4</h2>");
echo("<li>SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki<30 and (dzial=1 or dzial=2)</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki<30 and (dzial=1 or dzial=2)');
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 5</h2>");
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

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 6</h2>");
echo("<li>SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
            echo("<table>");
            echo("<th>Dział</th>");
            echo("<th>Suma</th>");
            echo("<th>Średnia</th>");
            echo("<th>Min</th>");
            echo("<th>Max</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td><td>".$row["nazwa_dzial"]."</td>");
        echo("</tr>");
    }
    echo("</table>");

echo("<hr />");
require_once('connect.php');
echo("<h2>Zadanie 7</h2>");
echo("<li>SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 1 and zarobki between 20 and 40</li>");

    $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
    $result = $conn->query('SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 1 and zarobki between 20 and 40');
            echo("<table>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
        echo("</tr>");
    }
    echo("</table>");

?>
 
