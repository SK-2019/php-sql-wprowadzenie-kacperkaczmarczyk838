<?php include "../assets/body2.html" ?>

<?php
	 
require_once('../assets/connect.php');
echo("<h1>Pracownicy i Organizacja:</h1>");
	  $sql = 'SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org';
echo("<h2>Zadanie 1 - Pracownicy z nazwą działów.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
	 
echo("<hr />");

	   $sql = 'SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=4)';
echo("<h2>Zadanie 2 - Pracownicy tylko z działu 1 i 4.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 	  $sql = 'SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"';
echo("<h2>Zadanie 3 - Lista kobiet z nazwami działów.</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	   $sql = 'SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a"';
echo("<h2>Zadanie 4 - Lista mężczyzn z nazwami działów.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 


?>
 </div>
  </body>
