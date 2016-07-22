<?php
session_start();
 
//VALIDAÇÃO PARA QUE O USUARIO NÃO INVADA O SITE PELA URL
//VERIFICA SE NÃO EXISTE A SESSAO PERFIL
 
if(!isset ($_SESSION["perfil"])){
session_destroy();
 
$msg = base64_encode("Usuário sem acesso!");
header("location:index.php?m=".$msg);
} 
?>