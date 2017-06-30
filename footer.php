</main>

<footer id="site">
	<div class="alturarow1">
		<div class="row1 fixed">
			<div class="container">
				<p class="subscribe"><i class="fa fa-envelope"></i> <?php _e('Receba dicas e oportunidades por email:') ?></p>
				<div class="pull-right">
					<form id="formnews_footer" name="formnews_footer" action="<?php bloginfo('url') ?>" method="post">
						<input type="text" name="nomenews" placeholder="Nome:" required>
						<input type="email" name="emailnews" placeholder="E-mail:" required>
						<button type="submit"><?php _e('Inscrever') ?></button>
					</form>
					<div id="link-redes-sociais">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-google"></i></a>
					</div>
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
						<!---<li><a href="<?php bloginfo('url') ?>/termos-e-condicoes/">Termos e Condições</a></li>-->
					</ul>
				</div>
			</div>
			<center>
				<a href="http://magnificodigital.com" target="_blank" class="createdmagnifico gray"></a>
			</center>
		</div>
	</div>
</footer>

<?php wp_footer() ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-101030352-1', 'auto');
  ga('send', 'pageview');
</script>



<!--código de monitoramento-->
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/1f43a906-f1a1-427f-bb5d-30ea68ae49f5-loader.js" ></script>

<!--integração rd -->
<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  
<script type="text/javascript">

    var meus_campos = {
        'nomenews': 'nome',
        'emailnews': 'email'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', '[INVISTA ARUJÁ] - Form Newsletter', options);  

    $('#formnews_footer').submit(function(){
    	alert('Cadastro realizado com sucesso!');
    });

</script>

</body>
</html>