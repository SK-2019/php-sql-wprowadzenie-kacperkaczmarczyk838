<!DOCTYPE html>
<html> 
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="/mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
	 
<a class="nav1" href="index.php">Strona Główna</a>
<a class="nav0" href="/danedobazy/danedobazy.php">DaneDoBazy</a>
<a class="nav0" href="/danedobazy/formularz.html">Formularz</a>
<a class="nav1" href="/zadania/pracownicy.php">Pracownicy</a>
<a class="nav3" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="/zadania/sortowanie.php">Sortowanie</a>
<a class="nav6" href="/zadania/having.php">Having</a>
<a class="nav7" href="/zadania/limit.php">LIMIT</a>
<a class="nav8" href="/zadania/dataiczas.php">Data i czas</a>
<a class="nav0" href="/zadania/function.php">Funkcja</a>
<a class="nav0" href="/biblioteka/ksiazki.php">Książki</a>
</div>
<?php

require_once('../connect.php');
echo("<h1>Group By:</h1>");
	  $sql = 'SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo("<h2>Zadanie 1 - Suma zarobków w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
	 


echo("<hr />");
	   $sql = 'SELECT dzial, count(imie) as ilosc, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo("<h2>Zadanie 2 - Ilość pracowników w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
	 
  

echo("<hr />");
	   $sql = 'SELECT dzial, avg(zarobki) as srednia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo("<h2>Zadanie 3 - Średnie zarobków w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Średnia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }
        echo("</table>");
	 

echo("<hr />");
	  $sql = 'SELECT sum(zarobki) as suma, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
echo("<h2>Zadanie 4 - Suma zarobków kobiet i mężczyzn.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Suma</th>");
       echo("<th>Płeć</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td><td>".$row["plec"]."</td>"); 
                echo("</tr>");
                    }

                echo("</table>");   

echo("<hr />");
	 $sql = 'SELECT avg(zarobki) as srednia, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
echo("<h2>Zadanie 5 - Średnia zarobków kobiet i mężczyzn.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Średnia</th>");
       echo("<th>Płeć</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td><td>".$row["plec"]."</td>"); 
                echo("</tr>");
                    }

                echo("</table>");   

  ?>
