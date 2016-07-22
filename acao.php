<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Feedback e métricas</title>
        <script src="js/dojo/utils.js" type="text/javascript"></script>
        <script src="js/dojo/dojo.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include_once './validar.php';
        include_once './controller/functions.php';
        include './model/ado.php';
        $dados = escreve_qtd($userid, $con);
        #echo $dados["qtd"];die();
        foreach ($dados as $key => $value) {
            $dado = $value;
        }
        debug($dado);
        
        
        die();
        ?>
        <h1>Ponto</h1>
        <form method="post" action="ponto.php">
            <p>
                <label for="ponto-e">Clique aqui para marcar a entrada</label>
                <input type="submit" name="ponto-e"/>
            </p>
            <label for="ponto-s">Clique aqui para marcar a saída</label>
            <input type="submit" name="ponto-s"/>
        </form>
        <hr/>
        <h2>Método de pagamento</h2>
        <form method="post" action="log.php">
            <p>
                <label for="boletox">Boletox</label>
                <button name = "quadradinho" value="1" type="submit">Enviar</button>
                <input type="text" value="<?php echo $dados["1"]?>" disabled="true"/>
            </p>
            <p>
                <label for="bcash">Bcash</label>
                <button name = "quadradinho" value="2" type="submit">Enviar</button>
                <input type="text" value="<?php echo $dados["2"]?>" disabled="true"/>
            </p>
            <p>
                <label for="cod">COD</label>
                <button name = "quadradinho" value="3" type="submit">Enviar</button>
                <input type="text" value="<?php echo $dados["3"]?>" disabled="true"/>
            </p>
            <p>
                <label for="pagseguroapp">Pagseguro APP</label>
                <button name = "quadradinho" value="4" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="moip">Moip</label>
                <button name = "quadradinho" value="5" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="iugu">Iugu</label>
                <button name = "quadradinho" value="6" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="mercadopago">Mercadopago</label>
                <button name = "quadradinho" value="7" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="pagseguro">Pagseguro</label>
                <button name = "quadradinho" value="8" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="mundipagg">Mundipagg</label>
                <button name = "quadradinho" value="9" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="paypal_e">Paypal Express</label>
                <button name = "quadradinho" value="10" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
        </form>
        <hr/>

        <h2>Método de Envio</h2>
        <form method="post" action="envio.php">
            <p>
                <label for="flatrate">Flatrate</label>
                <button name = "quadradinho" value="15" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="correio">Correio</label>
                <button name = "quadradinho" value="12" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="tnt">Tnt</label>
                <button name = "quadradinho" value="13" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="tablerate">Table Rate</label>
                <button name = "quadradinho" value="14" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="correios_offline">Correios Offline</label>
                <button name = "quadradinho" value="11" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
        </form>
        <hr/>

        <h2>Marketing</h2>
        <form method="post" action="marketing.php">
            <p>
                <label for="campaignator">Campaignator</label>
                <button name = "quadradinho" value="16" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="banners">Banners</label>
                <button name = "quadradinho" value="17" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="frete_gratis">Frete Grátis</label>
                <button name = "quadradinho" value="18" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="cupom">Cupom de desconto</label>
                <button name = "quadradinho" value="11" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="assinantes_news">Assinantes de newsletter</label>
                <button name = "quadradinho" value="19" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="carrinho_abandonados">Carrinho Abandonados</label>
                <button name = "quadradinho" value="20" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="r_acesso">Relatório de Acesso</label>
                <button name = "quadradinho" value="21" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="a_preditiva">Análise Preditiva</label>
                <button name = "quadradinho" value="22" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
            <p>
                <label for="marketplaces">Marketplaces</label>
                <button name = "quadradinho" value="23" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
        </form>
        <hr/>


        <h2>Suporte Geral</h2>
        <form method="post" action="marketing.php">
            <p>
                <label for="suporte_geral">Suporte Geral</label>
                <button name = "quadradinho" value="24" type="submit">Enviar</button>
                <input type="text" value="<?php ?>" disabled="true"/>
            </p>
        </form>
        <hr/>
        <?php
        recebe_mensagem();
        ?>
    </body>
</html>

