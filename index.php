<!DOCTYPE html>
<html> 
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="mstyles.css">
</head>
 <body>
    <div class="container">
	    <span><marquee direction="left" scrollamount="2" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
#teamKoty =^.^= 
</marquee></span>
      <div class="item colorRed">
        <h1> ☆ Kacper Kaczmarczyk 2Ti ☆</h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
     <h1>  MENU:</h1>      
       <ul>
	       <div>
        <li class="item_link"><a class="" href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a></li>
	       </div>
	       <div>
        <li class="item_link"><a class="" href="/danedobazy/danedobazy.php">Dane Do Bazy</a></li>
	       </div>
	       <div>
        <li class="item_link"><a class="" href="/danedobazy/formularz.html">Formularz</a></li>
		    </div>   
		    <div>
        <li class="item_link"><a class="" href="/zadania/pracownicy.php">Pracownicy</a></li>
			      </div> 
	        <div>
        <li class="item_link"><a class="" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
			 </div> 
	    <div>
        <li class="item_link"><a class="" href="/zadania/funkcAgregujace.php">Funkcje Agregujace</a></li>
			 </div> 
	        <div>
        <li class="item_link"><a class="" href="/zadania/sortowanie.php">Sorotwanie</a></li>
			 </div> 
	        <div>
        <li class="item_link"><a class="" href="/zadania/groupby.php">Group By</a></li>
			 </div> 
	        <div>
        <li class="item_link"><a class="" href="/zadania/having.php">Having</a></li>
			 </div> 
	       <div> 
        <li class="item_link"><a class="" href="/zadania/limit.php">Limit</a></li>
			 </div> 
	      <div>
        <li class="item_link"><a class="" href="/zadania/dataiczas.php">Data i Czas</a></li>
			 </div> 
	    <div>
        <li class="item_link"><a class="" href="/zadania/function.php">Funkcja</a></li>
			 </div> 
	   <div>
        <li class="item_link"><a class="" href="/biblioteka/ksiazki.php">Książki</a></li>
			 </div> 
       </ul>
	    
	    </div>
      <div class="item colorGreen">

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

  </div>
  </body>
