<?php include "../assets/body2.html" ?>

<?php
  
 require_once('../assets/connect.php');
echo("<h1>Książki i autorzy:</h1>");
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
echo("<h2>Cała tabelka:</h2>");
echo("<li>".$sql);

$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>autor</th>");
    echo("<th>tytul</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                   echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
            echo("</tr>");
        }
    echo("</table>");
  

  echo("<hr />");
$sql = 'SELECT * FROM biblAutor';
echo("<h2>Autorzy:</h2>");
echo("<li>".$sql);

$result = $conn->query($sql);
echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){
echo("<option value=".$row['id'].">".$row['autor']."</option>");
        }
    echo("</select>");

  
echo("<hr />");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuły:</h2>");
echo("<li>".$sql);

$result=$conn->query($sql);
echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){ 
echo("<option value=".$row['id'].">".$row['tytul']."</option>");
        }
    echo("</select>");
echo("<h2>Wyświetalnie książek danego autora:</h2>");        
?>
	      
<form id="mForm">
<select id="mSelect">

    <option value='1'>Henryk Sienkiewicz</option>
    <option value='2'>Adam Mickiewicz</option>
    <option value='3'>Tolkien</option>
    <option value='4'>William Shakespeare</option>
    <option value='5'>Rafał Kosik</option>
    <option value='6'>Alexander Fredro</option>
    <option value='7'>Jan Brzechwa</option>
    <option value='8'>Kacper Korczak</option>
    
</select>
</form>
<div id="tytul">
</div>

<script type="text/javascript">
var mS = document.getElementById('mSelect');
var mYesNo = document.getElementById('tytul');
mS.onchange=function() {
    if(mS.value==='1') {
        mYesNo.innerHTML='<table><tr><td>Krzyżacy</td><td>Ogniem i mieczem</td></tr></table>';
    }
    else if(mS.value==='2') {
        mYesNo.innerHTML='<table><tr><td>Pan Tadeusz</td></tr></table>';
    }
    else if(mS.value==='3') {
        mYesNo.innerHTML='<table><tr><td>Hobbit</td><td>Władca Pierścieni</td></tr></table>';
    }
    else if(mS.value==='4') {
        mYesNo.innerHTML='<table><tr><td>Romeo i Julia</td></tr></table>';
    }
    else if(mS.value==='5') {
        mYesNo.innerHTML='<table><tr><td>Felix, Net i Nika</td></tr></table>';
    }
    else if(mS.value==='6') {
        mYesNo.innerHTML='<table><tr><td>Zemsta</td></tr></table>';
    }
    else if(mS.value==='7') {
        mYesNo.innerHTML='<table><tr><td>Akademia Pana Kleksa</td></tr></table>';
    }
    else if(mS.value==='8') {
        mYesNo.innerHTML='<table><tr><td>Jak zmienić szkołę</td><td>Jak zmienić nauczyciela z zawodowych</td></tr></table>';
    }
    else {
        mYesNo.innerHTML='';    
    }
}
</script>
 </div>
  </body>
