<?php

$userid = $_SESSION["usuario_id"];

function debug($xpto) {
    echo "<pre>";
    print_r($xpto);
    echo "</pre>";
    echo "<hr/>";
    die();
}

function recebe_mensagem($xpto) {
    if (isset($_GET[$xpto])) {
        echo base64_decode($_GET[$xpto]);
    } else {
        echo "";
    }
}

function escreve_qtd($userid) {
    include($_SERVER['DOCUMENT_ROOT'] . "/feedback/model/ado.php");
    $sql = "select quadradinho, count(*) as qtd from 
        xtech_log 
        where usuario = " . $userid .
            " and DATE_FORMAT(data,'%Y/%m/%d') = CURDATE() 
        group by quadradinho";

    $result = $PDO->query($sql);
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    #debug($dados);
    return $dados;
}

function ler_valores($num, $dados) {
    foreach ($dados as $key => $dado) {
        foreach ($dado as $key => $value) {
            if ($key == "quadradinho" && $value == $num) {
                echo next($dado);
                break;
            }
        }
    }
}
