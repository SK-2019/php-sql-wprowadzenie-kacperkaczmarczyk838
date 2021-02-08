<?php include "assets/body2.html" ?>
         
    <h1>Dodawanie pracownika:</h1>

<body>
<form class="formularz" action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="imie"></br>
    <input type="text" name="dzial" placeholder="dzial"></br>
    <input type="text" name="zarobki" placeholder="zarobki"></br>
    <input type="date" name="data_ur" ></br>
    <input type="submit" value="Dodaj">
</form>
       
      <hr/>
       
        <h1>Usuwanie pracownika:</h1>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Usuń">
</form>
</body>
</head>
</html>

<?php

echo("<hr />");
    echo("<h1>Tabela Wszystkich Pracowników (z możliwością usuwania):</h1>");
require_once('../assets/connect.php');
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Usuwanie</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("<td><form action='delete.php' method=POST>");
                     echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                     echo("<input type='submit' value='Usuń'>");
                    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");
           
?>
 </div>
  </body>
