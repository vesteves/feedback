<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/functions.php");
        ?>

        <h1>Horário</h1>
        <p>Tabela de horários</p>
        <table border="1" width="80%">
            <tr>
                <th width="30%">Nome</th>
                <th width="30%">Hoje</th>
                <th width="30%">Média dos últimos 7 dias</th>
            </tr>
            <?php rel_horario() ?>
        </table>
    </body>
</html>
