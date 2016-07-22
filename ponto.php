<?php

include_once './model/ado.php';
session_start();

if (isset($_POST["ponto-e"])) {
    $sql = 'insert into ponto values (null, ' . $_SESSION["usuario_id"] . ', now(), null)';
    if (mysql_query($sql, $con)) {
        $sql = "select * from ponto ORDER BY id DESC LIMIT 1";
        $result = mysql_query($sql, $con);
        $row = mysql_fetch_array($result);
        $_SESSION["id_ponto"] = $row["id"];
    } else {
        echo "Erro no ponto de entrada.";
    }
    mysql_close();
    $msg = base64_encode("Ponto cadastrado.");
    header("location:acao.php?m=" . $msg);
} elseif (isset($_POST["ponto-s"])) {
    $sql = "update ponto set saida = now() where id = " . $_SESSION["id_ponto"];
    echo $sql;
    if (mysql_query($sql, $con)) {
        mysql_close();
        $msg = base64_encode("Ponto cadastrado.");
        header("location:acao.php?m=" . $msg);
    }else{
        echo "Erro no ponto de saída.";
    }
}
mysql_close();
