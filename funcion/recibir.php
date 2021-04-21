<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="">
            <label>Ingrese valor</label>
            <input type="number" name="numero">
            <input type="submit" name="enviar" value="Enviar">

        </form>
    </body>
</html>


<?php
$numero = NULL;
if (isset($_GET['enviar'])) {
    $numero = $_GET['numero'] ?? "";
}

class numero {

    public function signonumero($numero) {
        if ($numero > 0) {
            echo "El numero $numero es positivo";
        } elseif ($numero == 0) {
            echo "El numero $numero es 0";
        } else {
            echo "El numero $numero es negativo";
        }
    }

    public function diaxmes($numero) {

        switch ($numero) {
            case 1:
                echo "El $numero corresponde al mes enero";
                break;
            case 2:
                echo "El $numero corresponde al mes febrero";
                break;
            case 3:
                echo "El $numero corresponde al mes marzo";
                break;
            case 4:
                echo "El $numero corresponde al mes abril";
                break;
            case 5:
                echo "El $numero corresponde al mes mayo";
                break;
            case 6:
                echo "El $numero corresponde al mes junio";
                break;
            case 7:
                echo "El $numero corresponde al mes julio";
                break;
            case 8:
                echo "El $numero corresponde al mes agosto";
                break;
            case 9:
                echo "El $numero corresponde al mes septiembre";
                break;
            case 10:
                echo "El $numero corresponde al mes octubre";
                break;
            case 11:
                echo "El $numero corresponde al mes noviembre";
                break;
            case 12:
                echo "El $numero corresponde al mes diciembre";
                break;
            default:
                echo "El $numero no corresponde a ningun mes";
                break;
        }
    }

    public function mostrartrimestre($numero) {
        switch ($numero) {

            case 1:
            case 2:
            case 3:
                echo "El mes n° $numero corresponde al primer trimestre";
                break;
            case 4:
            case 5:
            case 6:
                echo "El mes n° $numero corresponde al segundo trimestre";
                break;
            case 7:
            case 8:
            case 9:
                echo "El mes n° $numero corresponde al tercer trimestre";
                break;
            case 10:
            case 11:
            case 12:
                echo "El mes n° $numero corresponde al cuarto trimestre";
                break;
            default:
                echo "El $numero no corresponde a un mes valido";
                break;
        }
    }

    public function mostrartabla($numero) {
        for ($i = 1; $i <= 10; $i++) {
            $total = $numero * $i;

            echo " $numero x $i = $total <br>";
        }
    }

    public function restoycociente($numero) {
        echo "Division de $numero <br> ";

        while ($numero != 0) {
            $cociente = $numero % 10;
            $numero = (int) ($numero / 10);
            echo "Cociente : $numero ";
            echo "Resto : $cociente <br>";
            $mostraralreves = $mostraralreves * 10 + $cociente;
        }
        echo "El resultado es $mostraralreves";
    }




    
}
class Ejercicio9{

    public function collats($numero) {

        while ($numero > 1) {
            echo "$numero -> ";
                if ($this->validarParidad($numero)) {
                    $numero = $this->division($numero);
                } else {
                    $numero = $this->multiplicacion($numero);
                }
            }
        
            echo "1";
    }

    private function multiplicacion($numero) {
        return ($numero * 3 ) + 1;
    }

    private function division($numero) {
        return $numero / 2;
    }

    private function validarParidad($numero) {
        $resto = $numero % 2;
        if ($resto == 0) {
            return true;
        } else{
            return false;
        }

    }
}
    
    

