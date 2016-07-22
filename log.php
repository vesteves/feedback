<?php
session_start();
include_once './model/ado.php';
include_once './controller/functions.php';

if (isset($_REQUEST["quadradinho"])) {
    $dado = $_REQUEST["quadradinho"];
    $sql = 'insert into xtech_log values (null, ' . $dado . ', ' . $_SESSION["usuario_id"] . ', now())';
    if (mysql_query($sql, $con)) {
        mysql_close();
        escreve_qtd($userid, $con);
        $msg = base64_encode("Log salvo.");
        header("location:acao.php?m=" . $msg);
    } else {
        mysql_close();
        $msg = base64_encode("Não foi possível salvar log.");
        header("location:acao.php?m=" . $msg);
    }
} else {
    echo "eu hein";
}
mysql_close();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

