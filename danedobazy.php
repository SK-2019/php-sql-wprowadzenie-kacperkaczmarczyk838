<html>
<head>
       <title>Kacper Kaczmarczyk 2Ti</title>
      <h1>💎 Kacper Kaczmarczyk nr 13 💎</h1>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="mstyles.css">
     <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">GITHUB</a><h3>
 <div class="nav">
<a class="nav1" href="index.php">Strona Główna</a>
<a class="nav0" href="formularz.html">Formularz</a>
<a class="nav1" href="pracownicy.php">Pracownicy</a>
<a class="nav2" href="funkcAgregujace.php">Funkcje Agregujace</a>
<a class="nav3" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav4" href="sortowanie.php">Sortowanie</a>
<a class="nav5" href="groupby.php">Group by</a>
<a class="nav6" href="having.php">Having</a>
<a class="nav7" href="limit.php">LIMIT</a>
<a class="nav8" href="dataiczas.php">Data i czas</a>
</div>
         
    <h1>Dodawanie pracownika:</h1>

<body>
<form class="formularz" action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="imie"></br>
    <input type="text" name="dzial" placeholder="dzial"></br>
    <input type="text" name="zarobki" placeholder="zarobki"></br>
    <input type="date" name="data_ur" ></br>
    <input type="submit" value="Dodaj">
</form>
       
        <h1>Usuwanie pracownika:</h1>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="ok">
</form>
</body>
</head>
</html>

<?php


    echo("<h1>Tabela Wszystkich Pracowników (z możliwością usuwania):</h1>");
$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>DELETE</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("<td><form action='delete.php' method=POST>");
                     echo("<input type='hidden' name='id' value='".$row['id_pracownicy']."'>");
                     echo("<input type=submit value='X'>");
                    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");
           
?>
