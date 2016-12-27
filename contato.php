<!doctype html>
<?php include('header.html');?>
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
					<h1>Fale com a AESG</h1>
					<p>Para entrar em contato com a AESG, por favor, preencha o formulário abaixo. Entraremos em contato com você o mais rápido possível.</p>

					<form id="form-contato">
						<ul>
							<li>
								<label for="nome">Nome</label>
								<input type="text" id="nome">
							</li>
							<li class="clear">
								<label for="email">Email</label>
								<input type="text" id="nome">
							</li>
							<li class="clear">
								<label for="assunto">Assunto</label>
								<input type="text" id="assunto">
							</li>
							<li>
								<label for="mensagem">Mensagem</label>
								<textarea id="mensagem"></textarea>
							</li>
							<li class="clear right"><button id="enviar" value="Enviar"></li>
						</ul>
					</form>
				</article>

			</div> <!-- #main -->
		</div> <!-- #main-container -->

		<?php include "footer.html"?>

	</body>
</html>
