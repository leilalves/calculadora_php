<!DOCTYPE html>

<html>

    <head>

        <body bgcolor="#d9c675"> 

        <title> Calculadora </title> 

    <body>

        <h1 style="text-align: center;"> Calculadora </h1>

        <form style="text-align: center;" action="" method="GET">

            <!-- <form action="processar.php" method="post"> -->
                <label for="nome">Número:</label>
                <input type="number" value="num1" name="num1">
                <label for="nome">Número:</label>
                <input type="number" value="num2" name="num2">
                <br>
                <br>
                <input type="submit" value="Calcular">
            <!-- </form> -->

            <p style="text-align: center;">
                <lABEL> Escolha uma Operação:</lABEL>
                <br>
                <br>
                <select name="operacao">
                    <option value="soma"> Soma </option>
                    <option value="subtracao"> Subtração </option>
                    <option value="multiplicacao"> Multiplicação </option>
                    <option value="divisao"> Divisão </option>
                    <option value="modulo"> Módulo </option>
                    <option value="exponenciacao"> Exponenciação </option>
                </select>

            </p>
        </form>
        
<?php
       
        if($_SERVER["REQUEST_METHOD"] == "GET"){
                if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacao'])){       

                $x = $_GET['num1'];

                $y = $_GET['num2'];

                $z = $_GET['operacao'];

                //Soma
                function Soma ($x, $y){
                    return  $x + $y;
                 }


                 
                 //Resultados
               
 
                   if ($z == 'soma'){
                        echo "<h1> O resultado da soma é: " .$x. " + " .$y. " = " . Soma($x, $y) . "</h1>";
                    }
                }
            }
            ?> <p>

               

            </p>

    </body>

    </head>

</html>