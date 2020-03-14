<head>
        <meta charset="utf-8">
        <title>Editar Startup</title>
    </head>
<?php

require_once('../banco/conexao.php');

$id=0;

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);
}

//fazendo a verificação se os campos não estao chenado vazios
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular= addslashes($_POST['celular']);
    $telefone= addslashes($_POST['telefone']);
    $cpf= addslashes($_POST['cpf']);
    $cep= addslashes($_POST['cep']);
    $logradouro= addslashes($_POST['logradouro']);
    $numero_casa= addslashes($_POST['numero_casa']);
    $bairro= addslashes($_POST['bairro']);
    $complemento= addslashes($_POST['complemento']);
    $estado= addslashes($_POST['estado']);
    $cidade= addslashes($_POST['cidade']);

    $sql = "UPDATE tb_usuario_startup SET nome = '$nome', email= '$email',celular='$celular',telefone='$telefone',cpf='$cpf',cep='$cep',logradouro='$logradouro',numero_casa='$numero_casa',bairro='$bairro',complemento='$complemento',cidade='$cidade',estado='$estado' WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: administrador_startup.php");
}

    $sql = "SELECT * FROM tb_usuario_startup WHERE id = '$id'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
    }else {
        header("Location: administrador_startup.php");
    }

 
?>

<form name="editar" method="Post">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $dado['nome']; ?>" /><br/><br/>
        </div>

        <div>
            <label>Email:</label>
            <input name="email" type="email" id="email" value="<?php echo $dado['email']; ?>" /><br/><br/>
        </div>

          <div>
            <label>Celular</label>
            <input name="celular:" type="tel" id="celular" value="<?php echo $dado['celular']; ?>"/><br/><br/>
        </div>

        <div>
            <label>Telefone Comercial</label>
            <input name="telefone" type="tel" id="telefone" value="<?php echo $dado['telefone']; ?>"/><br/><br/>
        </div>

        
        <div>
            <label>CNPJ/CPF</label>
            <input name="cpf" type="number" id="cpf" value="<?php echo $dado['cpf']; ?>"/><br/><br/>
        </div>

        <div>
            <label>Cep</label>
            <input name="cep" type="number" id="cep" value="<?php echo $dado['cep']; ?>"/><br/><br/>
        </div>

        <div>
            <label>Logradouro</label>
            <input name="logradouro" type="text" id="logradouro" value="<?php echo $dado['logradouro']; ?>"/><br/><br/>
        </div>

        <div>
            <label>N°</label>
            <input name="numero_casa" type="text" id="numero_casa" value="<?php echo $dado['numero_casa']; ?>"/><br/><br/>
        </div>

        <div>
            <label>Bairro</label>
            <input name="bairro" type="text" id="bairro" value="<?php echo $dado['bairro']; ?>"/><br/><br/>
        </div>
        <div>
            <label>Complemento</label>
            <input name="complemento" type="text" id="complemento" value="<?php echo $dado['complemento']; ?>"/><br/><br/>
        </div>

        <div>
            <label>Cidade</label>
            <input name="cidade" type="text" id="cidade" value="<?php echo $dado['cidade']; ?>"/><br/><br/>
        </div>

        <div>
            <label>Estado</label>
            <input name="estado" type="text" id="estado" value="<?php echo $dado['estado']; ?>"/><br/><br/>
        </div>

        

        <div>
            <input id="btAtualizar" type="submit" value="Atualizar" />
        </div>

    </form>
