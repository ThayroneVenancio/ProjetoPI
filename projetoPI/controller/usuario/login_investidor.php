<head>
    <meta charset="utf-8">
    <title>Login de Investidor</title>
</head>
<?php
require_once('../banco/conexao.php');
session_start();

if (isset($_POST['email']) && empty($_POST['email']) == false) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));


    $sql = "SELECT * FROM tb_usuario_investidor WHERE email = '$email' AND senha = '$senha'";
    $sql = $pdo->query($sql);
   // echo $email." - ".$senha;

    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();
        
        $_SESSION['id'] = $dado['id'];
        header("Location: menuPrincipal.php");
    }
}

?>

<form action="" method="POST">
    <div>
        <label>Email:</label><br />
        <input type="text" class="form-control" name="email" id="email">
    </div>
    <div>
        <label>Senha</label><br />
        <input type="password" class="form-control" name="senha" id="senha">
    </div>
    <br />
    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="autenticar">Entrar</button>
        <a href="/sistema/index.html" class="btn btn-info">Voltar </a>
    </div>
</form>