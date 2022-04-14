<?php
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];
    $operacao = $_GET['operacao'];

    if($operacao == "somar")
    {
        $soma = $num1 + $num2;
        echo "O resultado é: " .$soma;
    }
    else
        if($operacao == "subtrair")
        {
            $subtr = $num1 - $num2;
            echo "O resultado é: " .$subtr;
        }
        else
            if($operacao == "dividir")
            {
                $dividir = $num1 / $num2;
                echo "O resultado é: " .$dividir;
            }
            else
                if($operacao == "multiplicar")
                {
                    $mult = $num1 * $num2;
                    echo "O resultado é: " .$mult;
                }
?>