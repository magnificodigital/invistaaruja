<aside id="sidebar">

	<div class="box">
		<div class="ad">
			<a href="http://ibisaruja.com.br" target="_blank">
				<img src="<?php bloginfo('template_url') ?>/img/banner-ibis.jpg">
			</a>
		</div>
	</div>

	<?php if (is_single()) : ?>
	<!--
	<div class="posted-in">
		<p>Publicado em: <?php the_time('d/m/Y') ?></p>
		<p></p>
	</div>-->
	<?php endif; ?>

	<?php /*
	<div class="box">	
		<h4>Assine nossa newsletter</h4>
		<form method="post" class="news-subscribe">
			<input type="text" name="nome" placeholder="Nome:" />
			<input type="text" name="email" placeholder="E-mail:" />
			<button type="button">Assinar</button>
		</form>
	</div>
	*/ ?>

	<div class="box recent-posts">
		<h4>Assuntos mais vistos</h4>
			<div class="row">
			<?php 
				$args = array(
					'showposts' => 4, 
					'orderby' => 'date',
					'order' => 'DESC',
				); 
			?>
			<?php query_posts($args); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post() ?>

			<div class="col-md-12 col-sm-6 col-xs-6">

				<article class="post">
		            <a href="<?php the_permalink() ?>">
		            <?php

		            	if (is_single()) {
		            		the_post_thumbnail('post_single_sidebar');
		            	} else {
		            		the_post_thumbnail('sidebar');
		            	} ?>
		            </a>
		            <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
				</article>

			</div>

			<?php endwhile; endif; ?>
			<?php wp_reset_query() ?>

			</div>
	</div>

	<?php /* sidebar 1 */ if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
	<?php endif; /* fim sidebar 1 */ ?>

</aside>