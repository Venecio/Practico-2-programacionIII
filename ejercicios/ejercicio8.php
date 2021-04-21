<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="GET" action="">
            <label>Ingrese dia de nacimiento</label>
            <input type="number" min="1" max="31" name="dianacimiento">
            <label>Ingrese mes de nacimiento</label>
            <input type="number" min="1" max="12" name="mesnacimiento">
            <label>Ingrese año de nacimiento</label>
            <input type="number" name="anionacimiento">
            <input type="submit" name="enviar" value="Enviar">


        </form>

    </body>
</html>


<?php
$diaactual = date("j");
$mesactual = date("m");
$anioactual = date("Y");

$dianacimiento = $_GET['dianacimiento'];
$mesnacimiento = $_GET['mesnacimiento'];
$anionacimiento = $_GET['anionacimiento'];


$edad = $anioactual - $anionacimiento;

if ($mesactual < $mesnacimiento || $mesactual == $mesnacimiento && $diaactual < $dianacimiento) {
    
    $edad = $edad - 1;
    
}
echo "Su edad es $edad";
