<!DOCTYPE html>
<html>
<head>
<title>Kacper Kaczmarczyk 2Ti gr. 2</title>
 <link rel="stylesheet" href="/assets/mystyles.css">
 <link rel="icon" href="https://image.flaticon.com/icons/png/512/616/616430.png">
</head>
 
 <body>
    <div class="container">
      <div class="item colorRed">
        <h1> ☆ Kacper Kaczmarczyk 2Ti ☆</h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
      <h1>  MENU:</h1>
         <ul>
        <h6>
	       <div>
           <li class="item_link"><a class="" href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">☆ GITHUB ☆</a></li>		       		       
           <li class="item_link"><a class="" href="/index.php"> ✦ Strona Główna  ✦</a></li>	
        <li class="item_link"><a class="" href="/pracownicy/danedobazy.php"> ✦ Dane Do Bazy  ✦</a></li>
        <li class="item_link"><a class="" href="/cwiczenia/formularz.html"> ✧ Formularz ✧ </a></li>
        <li class="item_link"><a class="" href="/pracownicy/pracownicy.php"> ✦ Pracownicy ✦</a></li>		
        <li class="item_link"><a class="" href="/pracownicy/pracownicy_organizacja.php">✧ Pracownicy i Org. ✧</a></li>			
        <li class="item_link"><a class="" href="/pracownicy/funkcAgregujace.php">✦ Funkcje Agregujace ✦</a></li>			
        <li class="item_link"><a class="" href="/pracownicy/sortowanie.php">✧ Sorotwanie ✧</a></li>			
        <li class="item_link"><a class="" href="/pracownicy/groupby.php"> ✦ Group By ✦ </a></li>			
        <li class="item_link"><a class="" href="/pracownicy/limit.php">✦ Limit ✦</a></li>		
        <li class="item_link"><a class="" href="/pracownicy/dataiczas.php">✧ Data i Czas ✧</a></li>		
        <li class="item_link"><a class="" href="/cwiczenia/function.php">✦ Funkcja ✦</a></li>		
        <li class="item_link"><a class="" href="/biblioteka/ksiazki.php">✧ Biblioteka ✧ </a></li>
	
			 </div> 
	       </h6>
       </ul>
       
    </div>
      <div class="item colorGreen">
<?php

require_once('../assets/connect.php');
echo("<h1>Having:</h1>");
	  $sql = 'SELECT sum(zarobki) as suma, dzial, nazwa_dzial from pracownicy, organizacja where dzial=id_org GROUP BY dzial HAVING sum(zarobki)<28';
echo("<h2>Zadanie 1 - Suma zarobków w poszczególnych działach mniejsza od 28.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Suma</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");	
	   $sql = 'SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30';
echo("<h2>Zadanie 2 - Średnie zarobków mężczyzn w poszczególnych działach większe od 30.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query('SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30');
        echo("<table>");
        echo("<th>Średnia</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");	
	 $sql = 'SELECT count(imie) as ilosc, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial having count(imie)>3';
echo("<h2>Zadanie 3 - Ilość pracowników w poszczególnych działach większa od 3.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");


?>
 </div>
  </body>
