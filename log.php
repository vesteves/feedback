<?php

session_start();
include($_SERVER['DOCUMENT_ROOT'] . "/feedback/model/ado.php");
include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/functions.php");

if (isset($_REQUEST["quadradinho"])) {
    $dado = $_REQUEST["quadradinho"];
    $sql = 'insert into xtech_log values (null, :quadradinho, :usuario_id, now())';
    $db = $PDO->prepare($sql);
    $db->bindParam(':quadradinho', $_REQUEST["quadradinho"]);
    $db->bindParam(':usuario_id', $userid);

    $insert = $db->execute();

    if ($insert) {
        escreve_qtd($userid);
        $msg = base64_encode("Log salvo.");
        header("location:acao.php?m=" . $msg);
    } else {
        $msg = base64_encode("Não foi possível salvar log.");
        header("location:acao.php?m=" . $msg);
    }
} else {
    $msg = base64_encode("Sessão expirou. Favor refaça o login.");   
    header("location:login.php?m=" . $msg);
}