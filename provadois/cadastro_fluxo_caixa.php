<?php
include ('conexao.php');

$data = $_POST['dataa'];
$tipo= $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];



echo "<br>";
echo "Data: " .$data ."<br>";
echo "Tipo: " .$tipo ."<br>";
echo "Valor: " .$valor ."</br>";
echo "Historico: " .$historico ."<br>";
echo "Cheque: " .$cheque ."<br>";


$sql = "INSERT INTO fluxo_caixa (dataa, tipo, valor, historico, cheque)
        values ('".$data. "', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>

<div>
    <a href="index.php">Inicio</a>
</div>