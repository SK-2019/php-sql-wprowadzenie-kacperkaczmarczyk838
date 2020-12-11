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
        <li class="item_link"><a class="" href="index.php">Strona Główna</a></li>
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
         
    <h1>Wypożyczenie książki:</h1>

<body>
<form class="formularz" action="wypo.php" method="POST">
    <input type="text" name="imie" placeholder="imie"></br>
    <input type="text" name="dzial" placeholder="dzial"></br>
    <input type="text" name="zarobki" placeholder="zarobki"></br>
    <input type="date" name="data_ur" ></br>
    <input type="submit" value="Dodaj">
</form>
       
      <hr/>
       

<?php

echo("<hr />");
       
       require_once('../connect.php');
    echo("<h1>Wszystkie książki (z możliwością oddania):</h1>");
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';

$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>autor</th>");
    echo("<th>tytul</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                   echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                   echo("<td><form action='odd.php' method=POST>");
                   echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                   echo("<input type='submit' value='Usuń'>");
                   echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");
            echo("</tr>");
        }
    echo("</table>");
       
           
?>
 </div>
  </body>
