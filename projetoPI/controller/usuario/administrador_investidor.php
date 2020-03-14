<head>
    <meta charset="utf-8">
    <title>Administrador Investidor</title>
</head>
<?php
require_once('../banco/conexao.php');
echo '<td><a href="cadastrar_investidor.php">Cadastrar nono investidor</a></td>';
?>

<table border="0" width="100">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Celular</th>
        <th>Telefone</th>
        <th>Invenstimento Pretendido</th>
        <th>CPF</th>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>N°</th>
        <th>Bairro</th>
        <th>Complemento</th>
        <th>Cidade</th>
        <th>Estado</th>
    </tr>

    <?php

    $sql = "SELECT * FROM tb_usuario_investidor";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario ){
            echo '<tr>';
            echo '<td>'.$usuario['id'].'</td>';
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td>'.$usuario['senha'].'</td>';
            echo '<td>'.$usuario['celular'].'</td>';
            echo '<td>'.$usuario['telefone'].'</td>';
            echo '<td>'.$usuario['investimentoPretendido'].'</td>';
            echo '<td>'.$usuario['cpf'].'</td>';
            echo '<td>'.$usuario['cep'].'</td>';
            echo '<td>'.$usuario['logradouro'].'</td>';
            echo '<td>'.$usuario['numero_casa'].'</td>';
            echo '<td>'.$usuario['bairro'].'</td>';
            echo '<td>'.$usuario['complemento'].'</td>';
            echo '<td>'.$usuario['cidade'].'</td>';
            echo '<td>'.$usuario['estado'].'</td>';
            echo '<td><a href="editar_investidor.php?id='.$usuario['id'].'">Editar</a></td>';
            echo '<td><a href="excluir_investidor.php?id='.$usuario['id'].'">Excluir</a></td>';
            echo '</tr>';
        }
        
    }
    ?>
</table>





