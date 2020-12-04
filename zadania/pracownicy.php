<!DOCTYPE html>
<html>
<head>
<title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="/mstyles.css">
</head>
 
 <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
 <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="index.php">Strona Główna</a>
<a class="nav0" href="/danedobazy/danedobazy.php">DaneDoBazy</a>
<a class="nav0" href="/danedobazy/formularz.html">Formularz</a>
<a class="nav1" href="/zadania/pracownicy.php">Pracownicy</a>
<a class="nav3" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="/zadania/sortowanie.php">Sortowanie</a>
<a class="nav5" href="/zadania/groupby.php">Group by</a>
<a class="nav6" href="/zadania/having.php">Having</a>
<a class="nav7" href="/zadania/limit.php">LIMIT</a>
<a class="nav8" href="/zadania/dataiczas.php">Data i czas</a>
<a class="nav0" href="/zadania/function.php">Funkcja</a>
<a class="nav0" href="/biblioteka/ksiazki.php">Książki</a>
</div>	 
<?php

require_once('../connect.php');
echo("<h1>Pracownicy:</h1>");
$sql = 'SELECT * FROM pracownicy WHERE dzial = 2';
echo("<h2>Zadanie 1 - Pracownicy tylko z działu 2.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 $sql = 'SELECT * FROM pracownicy WHERE (dzial = 2 or dzial = 3)';
echo("<h2>Zadanie 2 - Pracownicy tylko z działu 2 i z działu 3.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 $sql = 'SELECT * FROM pracownicy WHERE zarobki<30';
echo("<h2>Zadanie 3 - Pracownicy tylko z zarobkami mniejszymi niż 30.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
?>
