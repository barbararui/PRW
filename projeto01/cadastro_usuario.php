<?php

include ('conexao.php');

$nome = $_GET['nome_usuario'];
$email = $_GET['email_usuario'];
$telefone = $_GET['telefone_usuario'];

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "O email do usuário: " .$email ."<br>";
echo "O telefone do usuário: " .$telefone;

?>