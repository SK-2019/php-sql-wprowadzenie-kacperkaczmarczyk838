<!DOCTYPE html>
<html> 
<head>
 <link rel="stylesheet" href="mystyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="index.php">Strona Główna</a>
<a class="nav1" href="pracownicy.php">Pracownicy</a>
<a class="nav2" href="funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="sortowanie.php">Sortowanie</a>
<a class="nav6" href="having.php">Having</a>
<a class="nav8" href="dataiczas.php">Data i czas</a>
</div>
<?php

require_once('connect.php');
echo("<h1>LIMIT:</h1>");
echo("<h2>Zadanie 1 - Dwóch najlepiej zarabiających pracowników z działu 4.</h2>");
echo("<li>SELECT * from pracownicy, organizacja where dzial=id_org and dzial=4 order by zarobki desc limit 2</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT * from pracownicy, organizacja where dzial=id_org and dzial=4 order by zarobki desc limit 2');
        echo("<table>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
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
echo("<h2>Zadanie 2 - Trzy najlepiej zarabiające kobiety z działu 4 i 2.</h2>");
echo("<li>SELECT * from pracownicy, organizacja where dzial=id_org and (dzial=4 or dzial=2) order by zarobki desc limit 3</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT * from pracownicy, organizacja where dzial=id_org and (dzial=4 or dzial=2) order by zarobki desc limit 3');
        echo("<table>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
// echo("<hr />");
// echo("<h2>Zadanie 3 - Najstarszy pracownik.</h2>");
// echo("<li>SELECT * from pracownicy, organizacja where dzial=id_org order by data_urodzenia asc limit 1</li>");
// $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
//         $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=id_org order by data_urodzenia asc limit 1'); 
//             echo("<table border=1>");
//             echo("<th>ID</th>");
//             echo("<th>Imie</th>");
//             echo("<th>Dział</th>");
//             echo("<th>Nazwa_działu</th>");
//             echo("<th>Zarobki</th>");
//             echo("<th>Data_urodzenia</th>");
//                 while($row=$result->fetch_assoc()){ 
//                     echo("<tr>");
//                     echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
//                     echo("</tr>");
//                 }

//             echo("</table>");
?>
