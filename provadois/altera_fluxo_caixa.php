<?php

    include('conexao.php');
    $id = $_GET['id'];
    $sql = 'SELECT * FROM fluxo_caixa where id = '.$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Fluxo do caixa</title>
    </head>
    <body>
    <h1>Altera fluxo do caixa</h1>
    
    <form method="post" action="altera_fluxo_caixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
               
                    <label for="dataa">Data:</label>
                    <input type="date" id="dataa" name="dataa" value= "<?php echo $row['dataa']?>" placeholder="Data">
                </div>
                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <input type="radio" id="tipo" name="tipo" value="entrada" <?php echo $row['tipo']?>> Entrada
                    <input type="radio" id="tipo" name="tipo" value="saida" <?php echo $row['tipo']?>> Saida
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="Digite o valor">
                </div>
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="Digite o hiistorico">
                </div>
                <div>
                    <select name="cheque" id="cheque"> 
                        <option value="sim">Sim</option>
                        <option value="nao">Nao</option>
                    <br>
                </div>               
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
                

            </fieldset>
        </form>
    </body>
</html>