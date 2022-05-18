<?php
include ('conexao.php');

$nome = $_GET['nome'];
$apelido = $_GET['apelido'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$telefone = $_GET['telefone'];
$celular =$_GET['celular'];
$email = $_GET['email'];
$dt_cadastro = date("Y-m-d");

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "O apelido do usuário: " .$apelido ."<br>";
echo "O endereco do usuário: " .$endereco ."<br>";
echo "O bairro do usuário: " .$bairro ."<br>";
echo "A cidade do usuário: " .$cidade ."<br>";
echo "O estado do usuário: " .$estado ."<br>";
echo "O telefone do usuário: " .$telefone ."<br>";
echo "O celular do usuário: " .$celular ."<br>";
echo "O email do usuário: " .$email ."<br>";
echo "A data do cadastro: " .$dt_cadastro ."<br>";

$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, 
cidade, estado, telefone, celular, email, dt_cadastro)
        values ('".$nome. "', '".$apelido."', '".$endereco."', '".$bairro."', '".$cidade."',
         '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$dt_cadastro."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>