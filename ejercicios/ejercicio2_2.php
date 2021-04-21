<!DOCTYPE html>
<html>
<head>
    
	<title>Dias y meses = estaciones</title>
</head>
<body>
    <form method="POST" action="">
        <label>Ingrese mes</label>
        <input type="number" name="number1" min="1" max="12"placeholder="solo numero">
        <br>
        <label>Ingrese dia </label>
        <input type="number" name="number2" min="1" max="31"placeholder="solo numero">
        <input type="submit" name="enviar" value="Enviar">

    </form>

</body>
</html>
<!--(Verano: 21 de Enero al 20 de Marzo; Otoño: 21 de Marzo al 20 de Junio; 
Invierno: del 21 de Junio al 20 de Septiembre; Primavera: del 21 de Septiembre al 20 de Enero)-->
<?php

$mes=$_POST['number1'];
$dia=$_POST['number2'];

switch($mes){
    case 1:
         if($dia>=21){
            echo "El mes $mes y dia $dia corresponden a la estacion verano";
        }
        else{
            echo "El mes $mes y dia $dia corresponden a la estacion primavera";
        }
        break;
    case 2:
    case 3:
        if($dia<=20){
            echo"El mes $mes y dia $dia corresponden a la estacion verano";
        }else{
            echo"El mes $mes y dia $dia corresponden a la estacion otoño";
        }
        break;
    case 4:
    case 5:
    case 6:
        if($dia<=20){
            echo "El mes $mes y dia $dia corresponden a la estacion otoño";  
        }else{
            echo "El mes $mes y dia $dia corresponden a la estacion invierno";
        }
//        dia 31 de 5
       break;
    case 7:
    case 8:
    case 9:
        if($dia<=20){
            echo "El mes $mes y dia $dia corresponden a la estacion invierno";  
        }else{
            echo "El mes $mes y dia $dia corresponden a la estacion primavera";
        }
        break;
    case 10:
    case 11:
    case 12:
            echo "El mes $mes y dia $dia corresponden a la estacion primavera";
            break;

    default: 
        echo "El mes $mes y dia $dia no correspoden a ninguna estacion";
        break;
}
