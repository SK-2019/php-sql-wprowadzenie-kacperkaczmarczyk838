<?php include "../assets/body2.html" ?>
   
    <h1>Dodano:</h1>
        </head>

  
</html> 
<?php

echo("<li1>imię: ".$_POST['imie']."</li1>");
echo("<li1>dział: ".$_POST['dzial']."</li1>");
echo("<li1>zarobki: ".$_POST['zarobki']."</li1>");
echo("<li1>data urodzenia: ".$_POST['data_ur']."</li1>");


 require_once("../assets/connect.php");
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";
	
if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>Dodano nowego pracownika ☆ </p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
</div>
  </body>
