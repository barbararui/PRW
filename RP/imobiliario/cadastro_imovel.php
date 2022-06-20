<?php
include ('conexao.php');

$tipo = $_POST['tipo_movel'];
$endereco= $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$valor = $_POST['valor'];
$dt_cadastro = date("Y-m-d");



echo "<br>";
echo "Tipo: " .$tipo ."<br>";
echo "Endereco: " .$endereco ."<br>";
echo "cidade: " .$cidade."</br>";
echo "Estado: " .$estado ."<br>";
echo "valor: " .$valor ."<br>";
echo "A data do cadastro: " .$dt_cadastro ."<br>";


$sql = "INSERT INTO imoveis (tipo_movel, endereco, cidade, estado, valor, dt_cadastro)
        values ('".$tipo. "', '".$endereco."', '".$cidade."', '".$estado."', '".$valor."', '".$dt_cadastro."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>

<div>
    <a href="index.php">Inicio</a>
</div>