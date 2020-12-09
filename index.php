<!DOCTYPE html>
<html> 
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 
 <body>
    <div class="container">
      <div class="item colorRed">
        <h1>Kacper Kaczmarczyk 2Ti</h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
     Menu Boczne:
       <ul>
        <li class="item_link"><a class="danedobazy.php" href="">Dane Do Bazy</a></li>
       </ul>
     </div>
      <div class="item colorGreen">
        https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838
      </div>
    </div>
  </body>
 
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav0" href="/danedobazy/danedobazy.php">DaneDoBazy</a>
<a class="nav0" href="/danedobazy/formularz.html">Formularz</a>
<a class="nav1" href="/zadania/pracownicy.php">Pracownicy</a>
<a class="nav2" href="/zadania/funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="/zadania/sortowanie.php">Sortowanie</a>
<a class="nav5" href="/zadania/groupby.php">Group by</a>
<a class="nav6" href="/zadania/having.php">Having</a>
<a class="nav7" href="/zadania/limit.php">LIMIT</a>
<a class="nav8" href="/zadania/dataiczas.php">Data i czas</a>
<a class="nav0" href="/zadania/function.php">Funkcja</a>
<a class="nav0" href="/biblioteka/ksiazki.php">Książki</a>
<a class="nav0" href="/biblioteka/wypozyczone.php">Wypożyczone</a>
</div>
  
<?php
echo("<h1>Strona Główna</h1>");
echo("<h2>Tabela Wszystkich Pracowników:</h2>");
require_once('connect.php');
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
echo("<h2>Tabela Funkcji Agregujących:</h2>");

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


?>
