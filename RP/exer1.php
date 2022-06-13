<?php

$var1 = 0;
$var2 = 10;

    if($var1 == 0 || $var2 == 0)
    {
        echo "Número inválido para cálculo!";
    }
    else
    {
        echo "Número válido!";
        echo "<br>";
        echo "<br>";
        echo "Adição: ";
        echo $soma = $var1 + $var2;
        echo "<br>";
        echo "Subtração: ";
        echo $subtração = $var1 - $var2;
        echo "<br>";
        echo "Divisão: ";
        echo $Divisão = $var1 / $var2;
        echo "<br>";
        echo "Multiplicação: ";
        echo $mult = $var1 * $var2;
        echo "<br>";
    }

    echo " <br> Programa finalizado!"
?>