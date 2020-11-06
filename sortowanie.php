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
</div>
<?php
  
require_once('connect.php');
echo("<h1>Sortowanie:</h1>");
echo("<h2>Zadanie 1 - Pracownicy posortowani malejąco.</h2>");
echo("<li>SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org order by imie desc</li>");

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org order by imie desc');
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
  
// require_once('connect.php');
// echo("<hr />");
// echo("<h2>Zadanie 2 - Pracownicy z działu 3 posortowani rosnąco po imieniu.</h2>");
// echo("<li>SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org order by imie asc</li>");

// $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
//  $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and dzial=3 order by imie asc');
//         echo("<table>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dział</th>");
//         echo("<th>Zarobki</th>");
//         echo("<th>Data_Urodzenia</th>");
//         echo("<th>Nazwa_Działu</th>");
//             while($row=$result->fetch_assoc()){ 
//                 echo("<tr>");
//                     echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

//                 echo("</tr>");
//             }
//         echo("</table>");
  
// require_once('connect.php'); 
// echo("<hr />");  
// echo("<h2>Zadanie 3 - Kobiety posortowane rosnąco po imieniu.</h2>");
// echo("<li>SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org order by imie asc</li>");

// $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
//  $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and imie like "%a" order by imie asc');
//         echo("<table>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dział</th>");
//         echo("<th>Zarobki</th>");
//         echo("<th>Data_Urodzenia</th>");
//         echo("<th>Nazwa_Działu</th>");
//             while($row=$result->fetch_assoc()){ 
//                 echo("<tr>");
//                     echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

//                 echo("</tr>");
//             }
//         echo("</table>");

// require_once('connect.php');
// echo("<hr />"); 
// echo("<h2>Zadanie 4 - Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach.</h2>");
// echo("<li>SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie NOT LIKE '%a' and (dzial = 1 OR dzial=3) order by zarobki asc;</li>");

// $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
//  $result = $conn->query('SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie NOT LIKE '%a' and (dzial = 1 OR dzial=3) order by zarobki asc;');
//         echo("<table>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dział</th>");
//         echo("<th>Zarobki</th>");
//         echo("<th>Data_Urodzenia</th>");
//         echo("<th>Nazwa_Działu</th>");
//             while($row=$result->fetch_assoc()){ 
//                 echo("<tr>");
//                     echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

//                 echo("</tr>");
//             }
//         echo("</table>");
   ?>
