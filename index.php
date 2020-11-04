<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="styles.css">
</head>
 
 <h1>Kacper Kaczmarczyk 2Ti numer 13 </h1>
 <h2><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">Github</a><h2>
<?php

require_once('connect.php');
echo("<h2>Zadanie 1</h2>");
echo("<li>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
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

require_once('connect.php');
echo("<h2>Zadanie 6</h2>");
echo("<li>SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy group by dzial</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy group by dzial');
            echo("<table>");
            echo("<th>dzial</th>");
            echo("<th>suma</th>");
            echo("<th>srednia</th>");
            echo("<th>min</th>");
            echo("<th>max</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td>");
        echo("</tr>");
    }
    echo("</table>");

require_once('connect.php');
echo("<h2>Zadanie 7</h2>");
echo("<li>SELECT * FROM pracownicy where dzial = 1 and zarobki between 20 and 40</li>");

    $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
    $result = $conn->query('SELECT * FROM pracownicy where dzial = 1 and zarobki between 20 and 40 ');
            echo("<table>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
 
