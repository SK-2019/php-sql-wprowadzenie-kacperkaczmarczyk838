<!DOCTYPE html>
<html> 
<head>
 <title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="/mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="/zadania/index.php">Strona Główna</a>
<a class="nav0" href="/danedobazy/danedobazy.php">DaneDoBazy</a>
<a class="nav0" href="/danedobazy/formularz.html">Formularz</a>
<a class="nav1" href="/zadania/pracownicy.php">Pracownicy</a>
<a class="nav2" href="/zadania/funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="/zadania/sortowanie.php">Sortowanie</a>
<a class="nav5" href="/zadania/groupby.php">Group by</a>
<a class="nav6" href="/zadania/having.php">Having</a>
<a class="nav7" href="/zadania/limit.php">LIMIT</a>
<a class="nav0" href="/zadania/function.php">Funkcja</a>
<a class="nav0" href="/biblioteka/ksiazki.php">Książki</a>
<a class="nav0" href="danedobazy.php">DaneDoBazy</a>
</div>
<?php

require_once('../connect.php');
echo("<h1>Wypożyczone książki:</h1>");
	 $sql = 'SELECT * from bibl_wypoz';
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytul</th>");
        echo("<th>Usuń</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                     echo("<td>".$row['id']."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                     echo("<td><form action='delete.php' method=POST>");
                     echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                     echo("<input type='submit' value='Usuń'>");
                    echo("</form></td>");
                echo("</tr>");
            }

        echo("</table>");
        
 ?>
