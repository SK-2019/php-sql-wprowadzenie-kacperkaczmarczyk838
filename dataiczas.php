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
   $sql = 'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org';
echo("<h2>Zadanie 1 - Wiek poszczególnych pracowników (w latach).</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
   $sql = 'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"';
echo("<h2>Zadanie 2 - Wiek poszczególnych pracowników (w latach) z działu serwis.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
    $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
echo("<h2>Zadanie 3 - Suma lat wszystkich.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
   $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org and nazwa_dzial="handel"';
echo("<h2>Zadanie 4 - Suma lat pracowników z działu handel.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
   $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie like "%a"';
echo("<h2>Zadanie 5 - Suma lat kobiet.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
    $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie not like "%a"';
echo("<h2>Zadanie 6 - Suma lat mężczyzn.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
    $sql = 'SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<h2>Zadanie 7 - Średnia lat pracowników w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
    $sql = 'SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<h2>Zadanie 8 - Suma lat pracowników w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
    $sql = 'SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<h2>Zadanie 9 - Najstarsi pracownicy w każdym dziale.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
    $sql = 'SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" OR nazwa_dzial="serwis") group by dzial';
echo("<h2>Zadanie 10 - Najmłodsi pracownicy z działu: handel i serwis (nazwa_dział, wiek).</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
  $sql = 'Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" or nazwa_dzial="serwis") group by nazwa_dzial';
echo("<h2>Zadanie 11 - Najmłodsi pracownicy z działu: handel i serwis (imię, nazwa_dział, wiek).</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek</th>");
        echo("<th>Imię</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["minwiek"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
   $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy';
echo("<h2>Zadanie 12 - Długość życia pracowników w dniach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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
      $sql = 'SELECT * from pracownicy where imie not like "%a" order by data_urodzenia asc limit 1';
echo("<h2>Zadanie 13 - Najstarszy mężczyzna.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
         echo("<th>ID</th>");
        echo("<th>Imię</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
  
   require("connect.php");
  echo("<hr />");
   echo("<h1>Formatowanie dat:</h1>");
   $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%W") from pracownicy';
echo("<h2>Zadanie 1 - Wyświetl nazwy dni w dacie urodzenia .</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
    require("connect.php");
  echo("<hr />");
   $sql1 = 'SET lc_time_names = "pl_PL"';
   $sql2 = 'SELECT DATE_FORMAT(CURDATE(), "%W")';
echo("<h2>Zadanie 2 - Wypisz dzisiejszą nazwę dnia po polsku (np. poniedziałek).</h2>");
echo("<li>".$sql1);
echo("<li>".$sql2);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query($sql1);
$result = $conn->query($sql2);
       echo("<table border>");
       echo("<th>Dzień</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['DATE_FORMAT(CURDATE(), "%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
    require("connect.php");
  echo("<hr />");
   $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%M") from pracownicy';
echo("<h2>Zadanie 3 - Wyświetl nazwy miesięcy w dacie urodzenia.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%M")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
   require("connect.php");
  echo("<hr />");
   $sql2 = 'SELECT curtime() as godzina';
echo("<h2>Zadanie 4 - Obecna, dokładna godzina (z dokładnością do milisekund).</h2>");
echo("<li>".$sql2);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query($sql2);
       echo("<table border>");
       echo("<th>Godzina</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['godzina']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
     require("connect.php");
  echo("<hr />");
   $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%Y-%M-%W") from pracownicy';
echo("<h2>Zadanie 5 - Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%Y-%M-%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
    require("connect.php");
  echo("<hr />");
   $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy';
echo("<h2>Zadanie 6 - Ile dni, godzin, minut żyje poszczególny pracownik?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Imie</th>");
       echo("<th>Dni</th>");
       echo("<th>Godziny</th>");
       echo("<th>Minuty</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['dni']."</td><td>".$row['godziny']."</td><td>".$row['minuty']."</td>");
        echo("</tr>");
    }
echo("</table>");
   
   require("connect.php");
  echo("<hr />");
   $sql = 'SELECT DATE_FORMAT("2003-07-09", "%Y-%M-%D") as DataUrodzenia';
echo("<h2>Zadanie 7 - W którym dniu roku urodziłeś się/urodziłaś się?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Data_Urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['DataUrodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
   require("connect.php");
  echo("<hr />");
   $sql = 'SELECT DATE_FORMAT(data_urodzenia,"%W") as dzien, imie, data_urodzenia FROM pracownicy ORDER BY CASE WHEN dzien = "Monday" THEN 1 WHEN dzien = "Tuesday" THEN 2 WHEN dzien = "Wednesday" THEN 3 WHEN dzien= "Thursday" THEN 4 WHEN dzien = "Friday" THEN 5 WHEN dzien = "Saturday" THEN 6 WHEN dzien = "Sunday" THEN 7 END ASC';
echo("<h2>Zadanie 8 - Pracownicy z nazwami dni tygodnia, w których się urodzili od poniedziałku do niedzieli</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Imie</th>");
       echo("<th>Dzień</th>");
  echo("<th>Data_urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['dzien']."</td><td>".$row['data_urodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
   require("connect.php");
  echo("<hr />");
   $sql = 'SELECT Count(DATE_FORMAT(data_urodzenia, "%W")) as ilosc FROM pracownicy where DATE_FORMAT(data_urodzenia, "%W")="Monday"';
echo("<h2>Zadanie 9 - Ilu pracowników urodziło się w poniedziałek?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Ilość</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['ilosc']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
    
//    require("connect.php");
//   echo("<hr />");
//    $sql = 'SELECT Count(DATE_FORMAT(data_urodzenia, "%W")) as dzien, FROM pracownicy ORDER BY CASE WHEN dzien = "Monday" THEN 1 WHEN dzien = "Tuesday" THEN 2 WHEN dzien = "Wednesday" THEN 3 WHEN dzien= "Thursday" THEN 4 WHEN dzien = "Friday" THEN 5 WHEN dzien = "Saturday" THEN 6 WHEN dzien = "Sunday" THEN 7 END ASC';
// echo("<h2>Zadanie 10 - Ilu pracowników urodziło się w poszczególne dni tygodnia (wpisz w pierwszej kolumnie nazwę dnia tygodnia a w drugiej ile osób się wtedy urodziło). Dni powinny być posortowane od Poniedziałku do Niedzieli.</h2>");
// echo("<li>".$sql);

// $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
//  $result = $conn->query($sql);
//        echo("<table border>");
//        echo("<th>Dzień</th>");
//     while($row=$result->fetch_assoc()){
//         echo("<tr>");
//         echo("<td>".$row['dzien']."</td>");
//         echo("</tr>");
//     }
// echo("</table>");
  
?>
