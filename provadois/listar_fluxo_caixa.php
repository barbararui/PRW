<?php

    include('conexao.php');

    $sql = 'SELECT * FROM fluxo_caixa';

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listagem do fluxo do caixa</title>
</head>
<body>
    <h1>Listagem do fluxo do caixa</h1>
        <table align="center" border = "1" width = 500>
            <tr>
                <th>Codigo: </th>
                <th>Data: </th>
                <th>Tipo: </th>
                <th>valor: </th>
                <th>Historico: </th>
                <th>Cheque: </th>
                <th>Excluir: </th>

            </tr>

        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" .$row['id']. "</td>";
                echo "<td>" .$row['dataa']. "</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>

    </table>



</body>
</html>

<div>
    <a href="index.php">Inicio</a>
</div>