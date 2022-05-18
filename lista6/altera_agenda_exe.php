<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular =$_POST['celular'];
    $email = $_POST['email'];
    $id_agenda = $_POST['id_agenda'];
    $dt_cadastro = date("Y-m-d");

    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";
    echo "<p> Apelido: " . $apelido . "<p>";
    echo "<p> Endereço: " . $endereco . "<p>";
    echo "<p> bairro: " . $bairro . "<p>";
    echo "<p> Cidade: " . $cidade . "<p>";
    echo "<p> Estado: " . $estado . "<p>";
    echo "<p> Telefone: " . $telefone . "<p>";
    echo "<p> Celular: " . $celular . "<p>";
    echo "<p> Email: " . $email . "<p>";
    echo "<p> Data do cadastro: " . $dt_cadastro . "<p>";
	
	$sql = "UPDATE agenda SET
            nome='".$nome."',
            apelido='".$apelido."',
            endereco='".$endereco."',
            bairro='".$bairro."',
            cidade='".$cidade."',
            estado='".$estado."',
            telefone='".$telefone."',
            celular='".$celular."',
            email='".$email."',
            dt_cadastro='".$dt_cadastro."'
          WHERE id_agenda=".$id_agenda;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>