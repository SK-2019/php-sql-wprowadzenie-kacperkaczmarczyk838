<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8" />
 <title>Kacper Kaczmarczyk 2Ti </title>
 <link rel="stylesheet" href="/mstyles.css">
</head>
 <body>
    <div class="container">
	    <marquee direction="left" BEHAVIOR="ALTERNATE" scrollamount="2" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
| MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS | | MERRY XMAS |  
</marquee>
      <div class="item colorRed">
        <h1> ☆ Kacper Kaczmarczyk 2Ti ☆</h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
     <h1>  MENU:</h1>      
       <ul>
	       <div>
        <li class="item_link"><a class="" href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a></li>

        <li class="item_link"><a class="" href="/danedobazy/danedobazy.php">Dane Do Bazy</a></li>
	       
        <li class="item_link"><a class="" href="/danedobazy/formularz.html">Formularz</a></li>
		    
        <li class="item_link"><a class="" href="/zadania/pracownicy.php">Pracownicy</a></li>
		
        <li class="item_link"><a class="" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
			
        <li class="item_link"><a class="" href="/zadania/funkcAgregujace.php">Funkcje Agregujace</a></li>
			
        <li class="item_link"><a class="" href="/zadania/sortowanie.php">Sorotwanie</a></li>
			
        <li class="item_link"><a class="" href="/zadania/groupby.php">Group By</a></li>
		
        <li class="item_link"><a class="" href="/zadania/having.php">Having</a></li>
		
        <li class="item_link"><a class="" href="/zadania/limit.php">Limit</a></li>
		
        <li class="item_link"><a class="" href="/zadania/dataiczas.php">Data i Czas</a></li>
		
        <li class="item_link"><a class="" href="/zadania/function.php">Funkcja</a></li>
		
        <li class="item_link"><a class="" href="/biblioteka/ksiazki.php">Książki</a></li>
			 </div> 
       </ul>
	    
	    </div>
      <div class="item colorGreen">
	       <p>Kliknij przycisk, żeby zobaczyć niespodzianke! :D</p>

<button onclick="myFunction()">Kliknij mnie ;)</button>

<p id="demo"></p>

<p>XXX:</p>

<button onclick="myFunction()">ᶠᵉᵉᵈ ᵐᵉ</button>

<p id="demo"></p>

<script>
function myFunction() {
  var greeting;
  var time = new Date().getHours();
  if (time < 10) {
    greeting = "xxx";
  } else if (time < 20) {
    greeting = "
	____________________________________$$$$
__________________________________$$____$
_________________________________$_______$
___$$$$_________________________$_________$
__$____$$______________________$____$_____$
_$_______$$___________________$____$$$____$
_$_________$$_____$$$$_$$$___$____$$$$$___$
$____________$_$$$__$$$__$$_$____$$$$$$___$
$____$$_______$_$$__$$$__$$$____$$$$$$$___$
$___$$$$_______$$$$_$$$___$$_____$$$$$$___$
$___$$$$$$_____$$$$_$$$$__$$$______$$$$$__$
$___$$$$$$$____$$$$_$$$$__$$$________$$$__$
$___$$$$$______$$$$_$$$$__$$$$____________$
$___$$$$_______$$$$_$$$$__$$$$____________$
$___$$$________$$$$_$$$$__$$$$____________$
$___$$_________$$$$__$$$__$$$$____________$
$______________$$$___$$$___$$$____________$
$_______________$_____$_____$_____________$
_$_________________________________________$
$________________________________$$$$_______$
$_______________________________$__$$$______$
$__________$$$$________________$$__$$$$_____$
$_________$$$__$_______________$$$$$$$$_____$
$________$$$$__$_______________$$$$$$$$_____$
$________$$$$$$$$______________$$$$$$$$_____$
$________$$$$$$$$_______________$$$$$$______$
$________$$$$$$$$_______$___$____$$$$_______$
$_________$$$$$$_____$__$$_$________________$
$__________$$$$_______$$__$________________$
_$_____________________$__$_______________$
__$_____________________$$_______________$
___$______________________________$$$___$
____$$___________________________$___$_$
______$$$_______________________$_____$
_________$$$$_____________$$$$$$______$
___$$________$$$$$$$$$$$$$____________$
__$__$________$___$_________________$$
__$___$_______$____$_____________$$$
__$___$________$____$___________$$
__$$$$$$_______$____$__________$__$
___$___$$_______$___$_________$____$
___$$$$$$$___$$$_$$$_________$_____$
____$___$$$$$__$_____$_______$_____$
_____$__$______$_____$_______$_____$
______$$$$$$$$$$_____$_______$____$
________________$$$$$_________$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$";
  } else {
    greeting = "Good evening";
  }
  document.getElementById("demo").innerHTML = greeting;
}
</script>
<div class="css-s4">
	
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
  </div>
  </body>
