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
    <h1>  MENU:</h1>
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
   
    <h1>Wypożyczono:</h1>
        </head>

  
</html> 
<?php

echo("<li1>imię: ".$_POST['autor']."</li1>");
echo("<li1>dział: ".$_POST['tytul']."</li1>");


 require_once("../connect.php");
	$sql = "INSERT INTO `bibl_wypo`(`id`, `autor`, `tytul`, `data_wyp`, `data_od`) VALUES(NULL,'".$_POST['autor']."', '".$_POST['tytul']."', '".$_POST['data_wyp']."')";
  
 
	
if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>Wypożyczono książkę ☆ </p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
	
	

?>
</div>
  </body>
