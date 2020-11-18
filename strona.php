<html>
        <head>
        <link rel="stylesheet" href="mstyle.css">
        </head>
  
</html> 
<?php

echo("<li>imię:".$_POST["imie"]);
echo("<li>dział:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data urodzenia:".$_POST["data_ur"]);


 require_once("connect.php");
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";
	
if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  New record created successfully!</p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>
