<?php
    include('conexao.php');
    $id = $_POST['id'];
    $data = $_POST['dataa'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Data: " . $data . "<p>";
    echo "<p> Tipo: " . $tipo . "<p>";
    echo "<p> Valor: " . $valor . "<p>";
    echo "<p> historico: " . $historico . "<p>";
    echo "<p> Cheque: " . $cheque. "<p>";
	
	$sql = "UPDATE fluxo_caixa SET
            dataa='".$data."',
            tipo='".$tipo."',
            valor='".$valor."',
            historico='".$historico."',
            cheque='".$cheque."'
          WHERE id=".$id;
 
 
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>