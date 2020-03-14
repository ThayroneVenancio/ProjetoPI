<?php

session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo 'aREA RESTRITA...';
}else{
    header ("Location: login.php");
    
}


?>