<?php

require_once('../banco/conexao.php');



//////////////////////////////////////////////////

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);

    $pdo->query("DELETE FROM tb_usuario_investidor WHERE id=$id") or die($pdo->error);
    

    header ('Location: administrador_investidor.php');

}else{
  //  header('Location: administrador.php');
  echo 'CAINDO AQUI';
}

?>