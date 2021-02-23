<?php include "../assets/body2.html" ?>
         
      <?php

  echo ("<h1>id: ".$_POST['id']."</h1>");
require_once("../assets/connect.php");

 $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";

if ($conn->query($sql) === TRUE) {
        echo("<h1 class='precord'> Usunięto pracownika </h1>");
       header('Location: https://php-test-tabd.herokuapp.com/index.php');
      } else {
        echo("<h1 class='precord'>'Error: ' . $sql . '<br>' . $conn->error</h1>");
      }
      
           echo("<hr />");
           echo("<h1>Tabela Wszystkich Pracowników:</h1>");

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

</body>
</head>
</html>
</div>
  </body>
