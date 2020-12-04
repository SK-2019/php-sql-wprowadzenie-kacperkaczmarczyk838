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
<a class="nav0" href="/danedobazy/formularz.html">Formularz</a>
<a class="nav1" href="/zadania/pracownicy.php">Pracownicy</a>
<a class="nav3" href="/zadania/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="/zadania/sortowanie.php">Sortowanie</a>
<a class="nav6" href="/zadania/having.php">Having</a>
<a class="nav7" href="/zadania/limit.php">LIMIT</a>
<a class="nav8" href="/zadania/dataiczas.php">Data i czas</a>
<a class="nav0" href="/zadania/function.php">Funkcja</a>
</div>
  
<?php
  
 require_once('../connect.php');
echo("<h1>Książki i autorzy:</h1>");
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
echo("<h2>Cała tabelka:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
  

  echo("<hr />");
$sql = 'SELECT * FROM biblAutor';
echo("<h2>Autorzy:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){
echo("<option value=".$row['id'].">".$row['autor']."</option>");
        }
    echo("</select>");

echo("<hr />");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuły:</h2>");
echo("<li>".$sql);

echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){ 
echo("<option value=".$row['id'].">".$row['tytul']."</option>");
        }
    echo("</select>");
        
?>
