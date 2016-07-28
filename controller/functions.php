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

function select_tabela($tabela) {
    include($_SERVER['DOCUMENT_ROOT'] . "/feedback_dev/model/ado.php");
    $sql = "select * from " . $tabela;
    $result = $PDO->query($sql);
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

function rel_horario() {
    include($_SERVER['DOCUMENT_ROOT'] . "/feedback_dev/model/ado.php");
    $dados = select_tabela("usuario");

    foreach ($dados as $key => $dado) {
        #dia
        $sql = "select (DATE_FORMAT(NOW(),'%H') - DATE_FORMAT(entrada,'%H')) as tempo 
                    from ponto 
                    where DATE_FORMAT(entrada,'%d/%m/%Y') = DATE_FORMAT(CURDATE(),'%d/%m/%Y') 
                    and usuario = " . $dado["id"];
        $db = $PDO->query($sql);
        $result = $db->fetch(PDO::FETCH_ASSOC);

        #semana
        $sql = "select (DATE_FORMAT(saida,'%H') - DATE_FORMAT(entrada,'%H')) as tempo 
                    from ponto 
                    where saida BETWEEN CURDATE()-7 AND CURDATE() 
                    and usuario = " . $dado["id"];
        $db = $PDO->query($sql);
        $result2 = $db->fetchAll(PDO::FETCH_ASSOC);

        #bolha
        $media_semana = $cont = $sum = $old = 0;
        foreach ($result2 as $key => $resultado) {
            $sum = $old + $resultado["tempo"];
            $old = $resultado["tempo"];
            $cont++;
        }
        $media_semana = number_format($sum / $cont, 2);
        echo "<tr><td>{$dado["usuario"]}</td>
                <td>{$result["tempo"]}</td>
                <td>{$media_semana}</td></tr>";
    }
}