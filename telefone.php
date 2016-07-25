<?php

include($_SERVER['DOCUMENT_ROOT'] . "/feedback/model/ado.php");
session_start();

if (isset($_POST["tel-e"])) {
    $sql = 'insert into telefone values (null, :usuario_id, now(), null)';
    $db = $PDO->prepare($sql);
    $db->bindParam(':usuario_id', $_SESSION["usuario_id"]);

    $insert = $db->execute();

    if ($insert) {
        $sql = "select * from telefone ORDER BY id DESC LIMIT 1";
        $result = $PDO->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["id_tel"] = $row["id"];
        $msg = base64_encode("Telefone iniciado.");
        header("location:acao.php?m=" . $msg);
    } else {
        echo "Erro em iniciar o telefone.";
    }
} elseif (isset($_POST["tel-s"])) {
    $sql = "update telefone set saida = now() where id = :id_tel";

    $db = $PDO->prepare($sql);
    $db->bindParam(':id_tel', $_SESSION["id_tel"]);

    $update = $db->execute();

    if ($update) {
        $msg = base64_encode("Telefone finalizado.");
        header("location:acao.php?m=" . $msg);
    } else {
        echo "Erro em finalizar o telefone.";
    }
}
