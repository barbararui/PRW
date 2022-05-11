<?php

    include('conexao.php');

    $sql = 'SELECT * FROM usuario';

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listagem de usuários</title>
</head>
<body>
    <h1>Listagem de usuário</h1>
        <table align="center" border = "1" width = 500>
            <tr>
                <th>Código: </th>
                <th>Nome: </th>
                <th>Email: </th>
                <th>Telefone: </th>
                <th>Excluir </th>
            </tr>

        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" .$row['id_usuario']. "</td>";
                echo "<td><a href='altera.php?id_usuario=".$row['id_usuario']."'>" .$row['nome_usuario']. "</a></td>";
                echo "<td>" .$row['email_usuario']. "</td>";
                echo "<td>" .$row['telefone_usuario']. "</td>";
                echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>

    </table>



</body>
</html>