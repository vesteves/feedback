<?php

include($_SERVER['DOCUMENT_ROOT'] . "/feedback/model/ado.php");
session_start();

if (isset($_POST["ponto-e"])) {
    $sql = 'insert into ponto values (null, :usuario_id, now(), null)';
    $db = $PDO->prepare($sql);
    $db->bindParam(':usuario_id', $_SESSION["usuario_id"]);

    $insert = $db->execute();

    if ($insert) {
        $sql = "select * from ponto ORDER BY id DESC LIMIT 1";

        $result = $PDO->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["id_ponto"] = $row["id"];
        $msg = base64_encode("Ponto cadastrado.");
        header("location:acao.php?m=" . $msg);
    } else {
        echo "Erro no ponto de entrada.";
    }
} elseif (isset($_POST["ponto-s"])) {
    $sql = "update ponto set saida = now() where id = :id_ponto";

    $db = $PDO->prepare($sql);
    $db->bindParam(':id_ponto', $_SESSION["id_ponto"]);

    $update = $db->execute();

    if ($update) {
        $msg = base64_encode("Ponto de saída cadastrado.");
        header("location:acao.php?m=" . $msg);
    } else {
        echo "Erro no ponto de saída.";
    }
}
