<?php

    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario = '.$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> EXERCICIO 1</title>
    </head>
    <body>
        <h1>Altera Usuário</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    
    <form method="post" action="altera_usuario_ex.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome_usuario']?>" placeholder="Digite o nome">
                </div>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email_usuario']?>" placeholder="Digite o email">
                </div>
                <div class="form-item">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone_usuario']?>" placeholder="Digite o Telefone">
                </div>
                <div class="form-item">
                    <input type="file" id="foto" name="foto" accept="image/*" />
                </div>
                <div>
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">
                

            </fieldset>
        </form>
    </body>
</html>