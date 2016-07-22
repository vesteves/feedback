<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <form action="logar.php" method="post">

            Login:<br/>
            <input type="text" name="login"/><br/>

            Senha:<br/>
            <input type="password" name="senha"/><br/>

            <input type="submit" value="Login" />

        </form>

        <br/>


        <?php
        if (isset($_GET["m"])) {
            echo base64_decode($_GET["m"]);
        } else {
            echo "";
        }
        ?>

    </body>
</html>