<?php

    include('conexao.php');

    $sql = 'SELECT * FROM imoveis';

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listagem do imovel</title>
</head>
<body>
    <h1>Listagem do imovel</h1>
        <table align="center" border = "1" width = 500>
            <tr>
                <th>Codigo: </th>
                <th>Tipo imovel: </th>
                <th>Endereco: </th>
                <th>Cidade: </th>
                <th>Estado: </th>
                <th>Valor: </th>
                <th>Data do cadastro: </th>               
                <th>EXCLUIR </th>

            </tr>

        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" .$row['id_movel']. "</td>";
                echo "<td>" .$row['tipo_movel']. "</td>";
                echo "<td>" .$row['endereco']. "</td>";
                echo "<td>" .$row['cidade']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>" .$row['valor']. "</td>";   
                echo "<td>" .$row['dt_cadastro']. "</td>"; 
                echo "<td><a href='excluir_imovel.php?id=".$row['id_movel']."'>EXCLUIR</a></td>";             
                echo "</tr>";
            }
        ?>

    </table>



</body>
</html>

<div>
    <a href="index.php">Inicio</a>
</div>