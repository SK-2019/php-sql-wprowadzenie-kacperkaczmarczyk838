<html>
<head>
<title>Kacper Kaczmarczyk 2Ti gr. 2</title>
		
<meta charset="UTF-8">
 <link rel="stylesheet" href="/assets/mystyles.css">
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
        <li class="item_link"><a class="" href="/pracownicy/limit.php">✦ Limit ✦</a></li>		
        <li class="item_link"><a class="" href="/pracownicy/dataiczas.php">✧ Data i Czas ✧</a></li>		
        <li class="item_link"><a class="" href="/cwiczenia/function.php">✦ Funkcja ✦</a></li>		
        <li class="item_link"><a class="" href="/biblioteka/ksiazki.php">✧ Biblioteka ✧ </a></li>
	
			 </div> 
	       </h6>
       </ul>
       
    </div>
      <div class="item colorGreen">
   
    <h1>Dodano:</h1>
        </head>

  
</html> 
<?php

echo("<li1>imię: ".$_POST['imie']."</li1>");
echo("<li1>dział: ".$_POST['dzial']."</li1>");
echo("<li1>zarobki: ".$_POST['zarobki']."</li1>");
echo("<li1>data urodzenia: ".$_POST['data_ur']."</li1>");


 require_once("../assets/connect.php");
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";
	
if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>Dodano nowego pracownika ☆ </p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
	
	
	echo("<hr />");
	echo("<h1>Tabela Wszystkich Pracowników:</h1>");
$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
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

?>
</div>
  </body>