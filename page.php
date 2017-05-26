<?php get_header() ?>

<?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>			

<section id="single-page">

	<div class="headerWrapper" style="background-image: url('<?php the_field("imagem_destaque") ?>');">
		<header class="titleWrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1><?php the_title() ?></h1>
					</div>
					<div class="col-xs-12">
						<div class="readmore">
							
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>

	<article class="content-post">
		<div class="container">
			
				<?php if (!is_page('indicadores-economicos')) : ?>

					<div class="row">
						<div class="col-md-9 pull-right">
							<?php get_template_part('inc/breadcrumbs') ?>
							<?php the_content() ?>
						</div>
						<div class="col-md-3">
							<?php get_sidebar() ?>
						</div>
					</div>

				<?php else : ?>
					
					<?php get_template_part('inc/breadcrumbs') ?>
					<?php the_content() ?>					
					<header class="category">
						<?php get_template_part('inc/indicadores','economicos'); ?>
					</header>

				<?php endif; ?>
			</div>
		</div>
	</article>

</section>

<?php endwhile;?>
<?php endif;?>

<?php get_footer() ?>

