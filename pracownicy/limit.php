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
        <li class="item_link"><a class="" href="/pracownicy/having.php">✧ Having ✧</a></li>			
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
echo("<h1>LIMIT:</h1>");
	  $sql = 'SELECT * from pracownicy, organizacja where dzial=id_org and dzial=4 order by zarobki desc limit 2';
echo("<h2>Zadanie 1 - Dwóch najlepiej zarabiających pracowników z działu 4. </h2>");
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
	   $sql = 'SELECT * from pracownicy, organizacja where dzial=id_org and (dzial=4 or dzial=2) order by zarobki desc limit 3';
echo("<h2>Zadanie 2 - Trzy najlepiej zarabiające kobiety z działu 4 i 2.</h2>");
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
	  $sql = 'Select * From pracownicy, organizacja where dzial=id_org order by data_urodzenia asc limit 1';
echo("<h2>Zadanie 3 - Najstarszy pracownik.</h2>");
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

?>
</div>
  </body>
