<html>
<head>
		 <title>Kacper Kaczmarczyk 2Ti</title>
		
<meta charset="UTF-8">
 <link rel="stylesheet" href="/mstyles.css">
		    <body>
    <div class="container">
      <div class="item colorRed">
        <h1> ☆ Kacper Kaczmarczyk 2Ti ☆</h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
     Menu Boczne:
       <ul>
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
       </ul>
       
    </div>
      <div class="item colorGreen">
   
    <h1>Dodano:</h1>
        </head>

  
</html> 
<?php

echo("<li1>imię: ".$_POST['imie']."</li1>");
echo("<li>dział: ".$_POST['dzial']."</li>");
echo("<li>zarobki: ".$_POST['zarobki']."</li>");
echo("<li>data urodzenia: ".$_POST['data_ur']."</li>");


 require_once("../connect.php");
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
