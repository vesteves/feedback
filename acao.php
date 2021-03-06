<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Feedback e métricas</title>
    </head>
    <body>
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/validar.php");
        include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/functions.php");
        $dados = escreve_qtd($userid);
        #debug($dados);
        ?>
        <!-- *** -->
        <h1>Sistema de Métricas do Suporte</h1>
        <!-- *** -->

        <!-- Menu Início -->
        <div id = "menu">
            <!-- Sexta Início <a href="metricas_pessoais.php">Métricas Pessoais</a> Sexta Início -->
            <?php if ($_SESSION["perfil"] == "2") { ?>
                <a href="relatorios.php"> / Relatórios</a>
            <?php } ?>
        </div>
        <!-- Menu Fim -->
        <hr/>
        <!-- Receber mensagem INICIO -->
        <?php recebe_mensagem("m"); ?>
        <!-- Receber mensagem FIM -->
        <hr/>
        <!-- Controle de Suporte Geral Início -->
        <h2>Suporte Geral</h2>
        <form method="post" action="log.php">
            <p>
                <label for="suporte_geral">Suporte Geral</label>
                <button name = "quadradinho" value="25" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("25", $dados) ?>" disabled="true"/>
            </p>
        </form>
        <hr/>
        <!-- Controle de Suporte Geral Fim -->

        <!-- Controle de telefone Início -->
        <h1>Telefone</h1>
        <form method="post" action="telefone.php">
            <p>
                <label for="tel-e">Clique aqui para marcar início da chamada</label>
                <input type="submit" name="tel-e"/>
            </p>
            <label for="tel-s">Clique aqui para marcar fim da chamada</label>
            <input type="submit" name="tel-s"/>
        </form>
        <?php recebe_mensagem("t"); ?>
        <hr/>
        <!-- Controle de telefone Fim -->

        <!-- Controle de Pagamento Início -->
        <h2>Método de pagamento</h2>
        <form method="post" action="log.php">
            <p>
                <label for="boletox">Boletox</label>
                <button name = "quadradinho" value="1" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("1", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="bcash">Bcash</label>
                <button name = "quadradinho" value="2" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("2", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="cod">COD</label>
                <button name = "quadradinho" value="3" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("3", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="pagseguroapp">Pagseguro APP</label>
                <button name = "quadradinho" value="4" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("4", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="moip">Moip</label>
                <button name = "quadradinho" value="5" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("5", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="iugu">Iugu</label>
                <button name = "quadradinho" value="6" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("6", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="mercadopago">Mercadopago</label>
                <button name = "quadradinho" value="7" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("7", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="pagseguro">Pagseguro</label>
                <button name = "quadradinho" value="8" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("8", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="mundipagg">Mundipagg</label>
                <button name = "quadradinho" value="9" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("9", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="paypal_e">Paypal Express</label>
                <button name = "quadradinho" value="10" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("10", $dados) ?>" disabled="true"/>
            </p>
        </form>
        <hr/>
        <!-- Controle de Pagamento Fim -->

        <!-- Controle de Envio Início -->
        <h2>Método de Envio</h2>
        <form method="post" action="log.php">
            <p>
                <label for="flatrate">Flatrate</label>
                <button name = "quadradinho" value="15" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("15", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="correio">Correio</label>
                <button name = "quadradinho" value="12" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("12", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="tnt">Tnt</label>
                <button name = "quadradinho" value="13" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("13", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="tablerate">Table Rate</label>
                <button name = "quadradinho" value="14" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("14", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="correios_offline">Correios Offline</label>
                <button name = "quadradinho" value="11" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("11", $dados) ?>" disabled="true"/>
            </p>
        </form>
        <hr/>
        <!-- Controle de Envio Fim -->

        <!-- Controle de Marketing Início -->
        <h2>Marketing</h2>
        <form method="post" action="log.php">
            <p>
                <label for="campaignator">Campaignator</label>
                <button name = "quadradinho" value="16" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("16", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="banners">Banners</label>
                <button name = "quadradinho" value="17" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("17", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="frete_gratis">Frete Grátis</label>
                <button name = "quadradinho" value="18" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("18", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="cupom">Cupom de desconto</label>
                <button name = "quadradinho" value="19" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("19", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="assinantes_news">Assinantes de newsletter</label>
                <button name = "quadradinho" value="20" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("20", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="carrinho_abandonados">Carrinho Abandonados</label>
                <button name = "quadradinho" value="21" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("21", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="r_acesso">Relatório de Acesso</label>
                <button name = "quadradinho" value="22" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("22", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="a_preditiva">Análise Preditiva</label>
                <button name = "quadradinho" value="23" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("23", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="marketplaces">Marketplaces</label>
                <button name = "quadradinho" value="24" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("24", $dados) ?>" disabled="true"/>
            </p>
        </form>
        <hr/>
        <!-- Controle de Marketing Fim -->

        <!-- Controle de Infra Início -->
        <h2>Infra</h2>
        <form method="post" action="log.php">
            <p>
                <label for="ssl">SSL</label>
                <button name = "quadradinho" value="26" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("26", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="dominio">Domínio</label>
                <button name = "quadradinho" value="27" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("27", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="email">E-mail</label>
                <button name = "quadradinho" value="28" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("28", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="importacao">Importação de Newsletter/produtos</label>
                <button name = "quadradinho" value="29" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("29", $dados) ?>" disabled="true"/>
            </p>
            <p>
                <label for="bonus">Bônus de cartão e plus</label>
                <button name = "quadradinho" value="30" type="submit">Enviar</button>
                <input type="text" value="<?php ler_valores("30", $dados) ?>" disabled="true"/>
            </p>
        </form>
        <hr/>
        <!-- Controle de Infra Fim -->

        <!-- Controle de ponto Início -->
        <h2>Ponto</h2>
        <form method="post" action="ponto.php">
            <p>
                <label for="ponto-e">Clique aqui para marcar a entrada</label>
                <input type="submit" name="ponto-e"/>
            </p>
            <label for="ponto-s">Clique aqui para marcar a saída</label>
            <input type="submit" name="ponto-s"/>
        </form>
        <?php recebe_mensagem("p"); ?>
        <hr/>
        <!-- Controle de ponto Fim -->
        <?php recebe_mensagem("m"); ?>
    </body>
</html>

