<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="GET" action="">
            <label>Ingrese numero p</label>
            <input type="number" name="number1">
            <label>Ingrese numero q</label>
            <input type="number" name="number2">
            <input type="submit" name="enviar" value="Enviar">
            
            
        </form>
  
    </body>
</html>


<?php
$suma=0;
$numero1=$_GET['number1'];
$numero2=$_GET['number2'];

    for($i=$numero1;$i<=$numero2;$i++){
$suma = $suma + $i;
 
    }
     echo "$suma <br>";
