<?php

    $data = date("2-16-2004");

    $dia = substr($data, 2, 2);

    echo "O dia digitado é: ".$dia;

    echo "<br>";

    $mes = substr($data, 0, 1);

    echo "O mês digitado é: ".$mes;

    echo "<br>";

    $ano = substr($data, 5, 4);

    echo "O ano digitado é: ".$ano;

?>