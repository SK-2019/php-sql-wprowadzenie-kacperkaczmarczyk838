<!DOCTYPE html>
<html>
<head>
<title>Kacper Kaczmarczyk 2Ti gr. 2</title>
 <link rel="stylesheet" href="/assets/mystyles.css">
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
        <li class="item_link"><a class="" href="/pracownicy/funkcAgregujace.php">✦ Funkcje Agregujace ✦</a></li>			
        <li class="item_link"><a class="" href="/pracownicy/sortowanie.php">✧ Sorotwanie ✧</a></li>			
        <li class="item_link"><a class="" href="/pracownicy/groupby.php"> ✦ Group By ✦ </a></li>		
        <li class="item_link"><a class="" href="/pracownicy/having.php">✧ Having ✧</a></li>		
        <li class="item_link"><a class="" href="/pracownicy/limit.php">✦ Limit ✦</a></li>		
        <li class="item_link"><a class="" href="/pracownicy/dataiczas.php">✧ Data i Czas ✧</a></li>		
        <li class="item_link"><a class="" href="/cwiczenia/function.php">✦ Funkcja ✦</a></li>		
        <li class="item_link"><a class="" href="/biblioteka/ksiazki.php">✧ Książki ✧ </a></li>
			 </div> 
	       </h6>
       </ul>
       
    </div>
      <div class="item colorGreen">
<?php
	 
require_once('../assets/connect.php');
echo("<h1>Pracownicy i Organizacja:</h1>");
	  $sql = 'SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org';
echo("<h2>Zadanie 1 - Pracownicy z nazwą działów.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
	 
echo("<hr />");

	   $sql = 'SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=4)';
echo("<h2>Zadanie 2 - Pracownicy tylko z działu 1 i 4.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
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

	 	  $sql = 'SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"';
echo("<h2>Zadanie 3 - Lista kobiet z nazwami działów.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	   $sql = 'SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a"';
echo("<h2>Zadanie 4 - Lista mężczyzn z nazwami działów.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 


?>
 </div>
  </body>
