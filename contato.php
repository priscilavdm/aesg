<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Associação Educacional Sírius-Gaia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">Você está usando um navegador <strong>ultrapassado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para melhorar sua experiência.</p>
        <![endif]-->

        <div class="header-container">
            <?php include "menu.html"?>
        </div>

        <div class="main-container" id="contato">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Fale com a AESG</h1>
		<p>Para entrar em contato com a AESG, por favor, preencha o formulário abaixo. Entraremos em contato com você o mais rápido possível.</p>
                    </header>
		<form id="form-contato">
			<ul>
				<li>
					<label for="nome">Nome</label>
					<input type="text" id="nome">
				</li>
				<li>
					<label for="email">Email</label>
					<input type="text" id="nome">
				</li>
				<li>
					<label for="assunto">Assunto</label>
					<input type="text" id="assunto">
				</li>
				<li>
					<label for="mensagem">Mensagem</label>
					<textarea id="mensagem"></textarea>
				</li>
				<li><button id="enviar" value="Enviar"></li>
			</ul>
		</form>
                </article>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
			<?php include "footer.html"?>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
