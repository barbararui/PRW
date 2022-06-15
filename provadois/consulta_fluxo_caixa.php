<?php

    include('conexao.php');
    $tipoc= $_POST['tipoc'];
    

    echo "Tipo da consulta" .$tipoc;

    if($tipoc == 'tentrada')
    {
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    }
    else
        if($tipoc == 'tsaida')
        {
            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
        }
        else
            if($tipoc == 'saldo')
            {
                $sql="select sum(case when tipo = 'entrada' then valor else 0 end) -
                            sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";  
            }


            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row['valor'];
?>