<?php
    if($_POST){
        $tipo=$_POST['txtTipo'];
        $valor1=$_POST['txtValor1'];
        $valor2=$_POST['txtValor2'];

        if($tipo == "Suma"){
                    $suma = $valor1 + $valor2;
        }

        if($tipo == "Resta"){
                    $resta = $valor1 - $valor2;
        }

        if($tipo == "Multiplicacion"){
                    $multiplicacion = $valor1 * $valor2;
        }
        if($tipo == "Division"){
                    $division = $valor1 / $valor2;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="robots" content="index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores Aritmeticos</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class="body">
        <div class="contenedor">
            <form action="ejercicio6.php" method="post">

                <span class="texto">Tipo de operación:</span>
                <br>
                <br>
                <select class="cuadros" name="txtTipo">
                    <br>
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="Multiplicacion">Multiplicacion</option>
                    <option value="Division">Division</option>
                </select>
                <br>
                <br>

                <span class="texto">Valor 1:</span>
                <br>
                <input class="cuadros" type="number" name="txtValor1" id="" required>
                <br>
                <br>

                <span class="texto">Valor 2:</span>
                <br>
                <input class="cuadros" type="number" name="txtValor2" id="" required>
                <br>
                <br>
                
                <input class="button" type="submit" value="Enviar">
            </form>
            <br>
            <span class="texto">El resultado  
                <?php
                 if($_POST){ 
                    if($tipo == "Suma"){
                            echo "de la suma";
                    }
            
                    if($tipo == "Resta"){
                                echo "de la resta";
                    }
            
                    if($tipo == "Multiplicacion"){
                                echo "de la multiplicacion";
                    }
                    if($tipo == "Division"){
                                echo "de la division";
                    }
                }
                ?>
                es:
            </span>
            <br>
            <span class="texto">
                <?php
                    if($_POST){
                        if($tipo == "Suma"){
                                echo $suma;
                        }
                
                        if($tipo == "Resta"){
                                    echo $resta;
                        }
                
                        if($tipo == "Multiplicacion"){
                                    echo $multiplicacion;
                        }
                        if($tipo == "Division"){
                                    echo $division;
                        }
                    }
                ?>
            </span>
        </div>
    </body>
</html>