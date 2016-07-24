<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './model/ado.php';

        $login = $_REQUEST["login"];
        $senha = $_REQUEST["senha"];

        $sql = "select * from usuario where 
            usuario = '" . $login . "' and senha = '" . $senha . "'";
        
        $rs = $PDO->query($sql);
        $row_count = $rs->rowCount();
        if ($row_count == 1) {
            $row = $rs->fetch(PDO::FETCH_ASSOC);
            
            //criando uma sessao chamada nick
            $_SESSION["usuario_id"] = $row["id"];
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["perfil"] = $row["perfil"];
            $_SESSION["tempo"] = time();

            //redirecionamento para o arquivo painel
            header("location:acao.php");
        } else {
            $msg = base64_encode("Usuário / senha inválidos");
            header("location:index.php?m=" . $msg);
        }
        ?>
    </body>
</html>