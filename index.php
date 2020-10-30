<h1>Kacper Kaczmarczyk 2Ti numer 13 </h1>
<?php

echo("<li>zad 1 - SELECT * FROM pracownicy </li>");

    $conn = new mysqli("127.0.0.1","root","","nauka");
    $result = $conn->query('SELECT * FROM pracownicy');
            echo("<table border = 1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 2 - SELECT * FROM pracownicy where imie like '%a' </li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT * FROM pracownicy where imie like "%a"');
            echo("<table border = 1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 3 - SELECT * FROM pracownicy where imie like '%a' and (dzial=1 or dzial=4)</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT * FROM pracownicy where imie like "%a" and (dzial=1 or dzial=4)');
            echo("<table border = 1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 4 - SELECT * FROM pracownicy where zarobki<30 and (dzial=1 or dzial=2)</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT * FROM pracownicy where zarobki<30 and (dzial=1 or dzial=2)');
            echo("<table border = 1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>

<?php
echo("<li>zad 5 - SELECT sum(zarobki) FROM pracownicy group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma FROM pracownicy group by dzial');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>suma</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 6 - SELECT dzial, avg(zarobki) as srednia FROM pracownicy group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, avg(zarobki) as srednia FROM pracownicy group by dzial');
            echo("<table border = 1>");
            echo("<th>srednia</th>");
            echo("<th>dzial</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['srednia']."</td><td>".$row['dzial']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 7 - SELECT dzial, max(zarobki) FROM pracownicy group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, max(zarobki) as max FROM pracownicy group by dzial');
            echo("<table border = 1>");
            echo("<th>max</th>");
            echo("<th>dzial</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['max']."</td><td>".$row['dzial']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 8 - SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy group by dzial');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>suma</th>");
            echo("<th>srednia</th>");
            echo("<th>min</th>");
            echo("<th>max</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 9 - SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy where imie like '%a' group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy where imie like "%a" group by dzial ');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>suma</th>");
            echo("<th>srednia</th>");
            echo("<th>min</th>");
            echo("<th>max</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 10 - SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy where imie not like '%a' group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max FROM pracownicy where imie not like "%a" group by dzial ');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>suma</th>");
            echo("<th>srednia</th>");
            echo("<th>min</th>");
            echo("<th>max</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php

echo("<li>zad 11 - SELECT * FROM pracownicy </li>");

    $conn = new mysqli("127.0.0.1","root","","nauka");
    $result = $conn->query('SELECT * FROM pracownicy where dzial = 1 and zarobki between 20 and 40 ');
            echo("<table border = 1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 12 - SELECT dzial, avg(zarobki) as srednia FROM pracownicy where imie like '%a' group by dzial</li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, avg(zarobki) as srednia FROM pracownicy where dzial=2 and imie like "%a" group by dzial');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>srednia</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['srednia']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 13 - SELECT dzial, avg(zarobki) as srednia FROM pracownicy where dzial=2 imie like '%a' </li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, avg(zarobki) as srednia FROM pracownicy where dzial=2 and imie like "%a"');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>srednia</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['srednia']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>
<?php
echo("<li>zad 14 - SELECT dzial, avg(zarobki) as srednia FROM pracownicy group by dzial having avg(zarobki) < 40 </li>");

$conn = new mysqli("127.0.0.1","root","","nauka");
$result = $conn->query('SELECT dzial, avg(zarobki) as srednia FROM pracownicy group by dzial having avg(zarobki) < 40');
            echo("<table border = 1>");
            echo("<th>dzial</th>");
            echo("<th>srednia</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['srednia']."</td>");
        echo("</tr>");
    }
    echo("</table>");

?>