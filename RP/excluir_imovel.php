<?php
    include('conexao.php');

    $id_movel= $_GET['id_movel'];
    $sql = 'DELETE FROM imoveis WHERE id='.$id_movel;

    echo "<h1> Exclusão do imovel </h1>";

	$result = mysqli_query($con, $sql);

	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir imovel: ".mysqli_error($con)."<br>";
  
?>
<a href='listar_imovel.php'> Voltar</a>