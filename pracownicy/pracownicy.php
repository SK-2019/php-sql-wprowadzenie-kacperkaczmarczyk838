<?php include "../assets/body2.html" ?>

<?php

require_once('../assets/connect.php');
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
 </div>
  </body>
