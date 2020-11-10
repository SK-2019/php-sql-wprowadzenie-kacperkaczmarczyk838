<!DOCTYPE html>
<html> 
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mystyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="index.php">Strona Główna</a>
<a class="nav1" href="pracownicy.php">Pracownicy</a>
<a class="nav2" href="funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav7" href="sortowanie.php">Sortowanie</a>
<a class="nav6" href="having.php">Having</a>
<a class="nav7" href="limit.php">LIMIT</a>
</div>
<?php

echo("<h1>Data i czas:</h1>");
  
require("connect.php");
echo("<h2>Zadanie 1 - Wiek poszczególnych pracowników (w latach).</h2>");
echo("<li>SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org</li>");
$result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org');
        echo("<table border>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
  
  require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 2 - Wiek poszczególnych pracowników (w latach) z działu serwis.</h2>");
echo("<li>SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial=serwis</li>");
$result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"');
        echo("<table border>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                  
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 3 - Suma lat wszystkich.</h2>");
echo("<li>SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org</li>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org');
        echo("<table border>");
        echo("<th>Wiek_wszystkich_pracownikow</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 4 - Suma lat pracowników z działu handel.</h2>");
echo("<li>SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org and nazwa_dzial=handel</li>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org and nazwa_dzial="handel"');
        echo("<table border>");
        echo("<th>Wiek_pracownikow_handel</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
    require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 5 - Suma lat kobiet.</h2>");
echo("<li>SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie like %a</li>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie like "%a"');
        echo("<table border>");
        echo("<th>Wiek_kobiet</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
    require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 6 - Suma lat mężczyzn.</h2>");
echo("<li>SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie not like %a</li>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie not like "%a"');
        echo("<table border>");
        echo("<th>Wiek_mężczyzn</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");

    require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 7 - Średnia lat pracowników w poszczególnych działach.</h2>");
echo("<li>SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial</li>");
$result = $conn->query('SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial');
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Średnia_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 8 - Suma lat pracowników w poszczególnych działach.</h2>");
echo("<li>SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial</li>");
$result = $conn->query('SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial');
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Suma_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 9 - Najstarsi pracownicy w każdym dziale.</h2>");
echo("<li>SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial</li>");
$result = $conn->query('SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial');
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Wiek - najstarsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 10 - Najmłodsi pracownicy z działu: handel i serwis (nazwa_dział, wiek).</h2>");
echo("<li>SELECT dzial, min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial=handel OR nazwa_dzial=serwis) group by dzial</li>");
$result = $conn->query('SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" OR nazwa_dzial="serwis") group by dzial');
        echo("<table border>");
        echo("<th>Wiek_najmłodsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
 
    require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 11 - Najmłodsi pracownicy z działu: handel i serwis (imię, nazwa_dział, wiek).</h2>");
echo("<li>SELECT imie, min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial=handel OR nazwa_dzial=serwis) group by nazwa_dzial</li>");
$result = $conn->query('SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial, imie from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="hande" OR nazwa_dzial="serwis") group by nazwa_dzial');
        echo("<table border>");
        echo("<th>Imie</th>");
        echo("<th>Wiek_najmłodsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 12 - Długość życia pracowników w dniach.</h2>");
echo("<li>SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy</li>");
$result = $conn->query('SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy');
        echo("<table border>");
        echo("<th>Imie</th>");
        echo("<th>Dni_życia</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
    require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 13 - Najstarszy mężczyzna.</h2>");
echo("<li>SELECT * from pracownicy where imie not like %a order by data_urodzenia asc limit 1</li>");
$result = $conn->query('SELECT * from pracownicy where imie not like "%a" order by data_urodzenia asc limit 1');
        echo("<table border>");
         echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
  
  echo("<h1>Formatowanie dat:</h1>");
   require("connect.php");
  echo("<hr />");
echo("<h2>Zadanie 1 - Wyświetlić nazwy dni w dacie urodzenia.</h2>");
echo("<li>SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') from pracownicy</li>");

  
?>
