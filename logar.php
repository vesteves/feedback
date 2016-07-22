<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //session é um espaço de memoria no navegador
        session_start();

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "select * from usuario where 
            usuario = '" . $login . "' and senha = '" . $senha . "'";

        include_once './model/ado.php';


        $rs = mysql_query($sql, $con);

        //verificando se o numero de linhas do resultado é igual a 1
        //pois o login é UNIQUE  e nao existe mais de 1
        if (mysql_num_rows($rs) == 1) {

            //trago as informações do banco
            //armazenando-as num array chamado $row
            //row[0]
            $row = mysql_fetch_array($rs);

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

        mysql_close($con);
        ?>
    </body>
</html>