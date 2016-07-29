<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/validar.php");
        include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/functions.php");
        ?>
        <h1>Gamification</h1>
        <form method="post" action="controller/gamification.php">
            <table>
                <tr>
                    <th></th>
                    <?php echo ($_SESSION["usuario_id"] == 5) ? "" : "<th>Rian</th>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 4) ? "" : "<th>Deividi</th>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 3) ? "" : "<th>Thiago</th>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 2) ? "" : "<th>Pedro</th>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 1) ? "" : "<th>Vitor</th>"; ?>
                </tr>
                <tr>
                    <td>Contribuição do indivíduo para o time</td>
                    <?php echo ($_SESSION["usuario_id"] == 5) ? "" : "<td>
                        <select name='Rian1'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 4) ? "" : "<td>
                        <select name='Deividi1'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 3) ? "" : "<td>
                        <select name='Thiago1'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 2) ? "" : "<td>
                        <select name='Pedro1'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 1) ? "" : "<td>
                        <select name='Vitor1'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                </tr>
                <tr>
                    <td>Contribuição do invidíduo em relação a você</td>
                    <?php echo ($_SESSION["usuario_id"] == 5) ? "" : "<td>
                        <select name='Deividi2'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 4) ? "" : "<td>
                        <select name='Thiago2'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 3) ? "" : "<td>
                        <select name='Pedro2'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 2) ? "" : "<td>
                        <select>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 1) ? "" : "<td>
                        <select name='Vitor2'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                </tr>
                </tr>
                <tr>
                    <td>Nível de informação compartilhada com você</td>
                    <?php echo ($_SESSION["usuario_id"] == 5) ? "" : "<td>
                        <select name='Rian3'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 4) ? "" : "<td>
                        <select name='Deividi3'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 3) ? "" : "<td>
                        <select name='Thiago3'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 2) ? "" : "<td>
                        <select name='Pedro3'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 1) ? "" : "<td>
                        <select name='Vitor3'>
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                </tr>
                <tr>
                    <td>Capacidade do invidívuo em questão de te avaliar</td>
                    <?php echo ($_SESSION["usuario_id"] == 5) ? "" : "<td>
                        <select name='Rian4'>
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 4) ? "" : "<td>
                        <select name='Deividi4'>
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 3) ? "" : "<td>
                        <select name='Thiago4'>
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 2) ? "" : "<td>
                        <select name='Pedro4'>
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                    <?php echo ($_SESSION["usuario_id"] == 1) ? "" : "<td>
                        <select name='Vitor4'>
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </td>"; ?>
                </tr>
            </table>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
