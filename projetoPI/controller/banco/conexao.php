<?php

$dsn= "mysql:dbname=crud;host=127.0.0.1";
$dbuser="root";
$dbpass= "";

//BLIBLIOTECA PDO, QUE VAI SE CONECTAR AO BANCO DE DADOS

//PROTEÇÃO DE ERRO, CASO O QUE TEM DENTRO DE TRY ACONTECERF ERRO, CAI DENTRO DE CATCH
try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);

} catch(PDOException $e){
    echo "FALHOU: ".$e->getMessage();
}

?>