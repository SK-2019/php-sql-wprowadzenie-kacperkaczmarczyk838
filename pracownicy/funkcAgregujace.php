<?php include "assets/body2.html" ?>

<?php
require_once('../assets/connect.php');
echo("<h1>Funkcje agregujące:</h1>");
	 $sql = 'SELECT sum(zarobki) as suma from pracownicy';
echo("<h2>Zadanie 1 - Suma zarobków wszystkich pracowników.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

echo("<hr />");
	 	 $sql = 'SELECT sum(zarobki) as suma from pracownicy where imie like "%a"';
echo("<h2>Zadanie 2 - Suma zarobków wszystkich kobiet.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
	 	 $sql = 'SELECT sum(zarobki) as suma from pracownicy where imie not like "%a" and (dzial=2 or dzial=3)';
echo("<h2>Zadanie 3 - Suma zarobków mężczyzn pracujących w dziale 2 i 3.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");
	  	 $sql = 'SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a"';
echo("<h2>Zadanie 4 - Średnia zarobków wszystkich mężczyzn.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 	 $sql = 'SELECT avg(zarobki) as srednia from pracownicy where dzial=4';
echo("<h2>Zadanie 5 - Średnia zarobków pracowników z działu 4.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 	 $sql = 'SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a" and (dzial=1 or dzial=2)';
echo("<h2>Zadanie 6 - Średnia zarobków mężczyzn z działu 1 i 2.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	  $sql = 'SELECT count(imie) as ilosc FROM pracownicy';
echo("<h2>Zadanie 7 - Ilu jest wszystkich pracowników?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 	 	 $sql = 'SELECT count(imie) as ilosc from pracownicy where imie like "%a" and (dzial=1 or dzial=3)';
echo("<h2>Zadanie 8 - Ile kobiet pracuje łącznie w działach 1 i 3?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
?>
  </div>
  </body>

