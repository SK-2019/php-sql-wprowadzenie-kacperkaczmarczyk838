<?php include "../assets/body2.html" ?>

<?php

require_once('../assets/connect.php');
echo("<h1>Group By:</h1>");
	  $sql = 'SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo("<h2>Zadanie 1 - Suma zarobków w poszczególnych działach.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Suma</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }
        echo("</table>");
	 


echo("<hr />");
	   $sql = 'SELECT dzial, count(imie) as ilosc, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo("<h2>Zadanie 2 - Ilość pracowników w poszczególnych działach.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Ilość</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }
        echo("</table>");
	 
  

echo("<hr />");
	   $sql = 'SELECT dzial, avg(zarobki) as srednia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo("<h2>Zadanie 3 - Średnie zarobków w poszczególnych działach.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Średnia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }
        echo("</table>");
	 

echo("<hr />");
	  $sql = 'SELECT sum(zarobki) as suma, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
echo("<h2>Zadanie 4 - Suma zarobków kobiet i mężczyzn.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Suma</th>");
       echo("<th>Płeć</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td><td>".$row["plec"]."</td>"); 
                echo("</tr>");
                    }

                echo("</table>");   

echo("<hr />");
	 $sql = 'SELECT avg(zarobki) as srednia, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
echo("<h2>Zadanie 5 - Średnia zarobków kobiet i mężczyzn.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Średnia</th>");
       echo("<th>Płeć</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td><td>".$row["plec"]."</td>"); 
                echo("</tr>");
                    }

                echo("</table>");   

  ?>
	       </div>
  </body>
