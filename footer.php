</main>

<footer id="site">
	<div class="alturarow1">
		<div class="row1 fixed">
			<div class="container">
				<p class="subscribe"><i class="fa fa-envelope"></i> <?php _e('Receba dicas e oportunidades por email:') ?></p>
				<form id="formnews_footer" class="news-subscribe">
					<input type="text" name="nome" placeholder="Nome:">
					<input type="text" name="email" placeholder="E-mail:">
					<button type="button"><?php _e('Inscrever') ?></button>
				</form>
				<div class="link-redes-sociais">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-google"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row2">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<?php wp_nav_menu('menu_footer') ?>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
					<ul class="pull-right">
						<li><a href="<?php bloginfo('url') ?>/politica-de-privacidade/">Política de Privacidade</a></li>
						<li><a href="<?php bloginfo('url') ?>/termos-e-condicoes/">Termos e Condições</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
</body>
</html>