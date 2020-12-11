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
    <input type="select" name="autor" placeholder="autor"></br>
    <input type="select" name="tytul" placeholder="tytul"></br>
    <input type="date" name="data_wyp" ></br>
    <input type="submit" value="Wypożycz">
</form>
       
      <hr/>
       
        <h1>Oddawanie:</h1>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Oddaj">
</form>
</body>
</head>
</html>

<?php

require_once('../connect.php');
echo("<h2>Wszystkie książki:</h2>");
$sql = 'SELECT * FROM `bibl_wypo';


$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>autor</th>");
    echo("<th>tytul</th>");
    echo("<th>data_wyp</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                   echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td><td>".$row["data_wyp"]."</td>"); 
            echo("</tr>");
        }
    echo("</table>");
           
?>
 </div>
  </body>
