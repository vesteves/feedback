<?php

session_start();
include_once '../model/ado.php';
$userid = $_SESSION["usuario_id"];

function debug($xpto) {
    echo "<pre>";
    print_r($xpto);
    echo "</pre>";
    echo "<hr/>";
    #die();
}

function recebe_mensagem() {
    if (isset($_GET["m"])) {
        echo base64_decode($_GET["m"]);
    } else {
        echo "";
    }
}

function escreve_qtd($userid, $con) {
    $sql = "select quadradinho, count(*) as qtd from 
        xtech_log 
        where usuario = ".$userid . 
        " and DATE_FORMAT(data,'%Y/%m/%d') = CURDATE() 
        group by quadradinho";
    
    $result = mysql_query($sql, $con);
    
    for($i = 0; $dados[$i] = mysql_fetch_assoc($result); $i++) ;
    array_pop($dados);
    mysql_close();
    return $dados;
}

function recebe_qtd() {
    if (isset($_GET["eq"])) {
        debug(base64_decode($_REQUEST));
        echo base64_decode($_GET["eq"]);
    } else {
        echo "";
    }
}
