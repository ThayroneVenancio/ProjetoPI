<?php

require_once('../banco/conexao.php');



//////////////////////////////////////////////////

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);

    $pdo->query("DELETE FROM tb_usuario_startup WHERE id=$id") or die($pdo->error);
    

    header ('Location: administrador_startup.php');

}else{
  
  echo 'CAINDO AQUI';
}

?>