<?php get_header() ?>

<?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>			

<section id="single-post">
	<div class="headerWrapper" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
		<header class="titleWrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1><?php the_title() ?></h1>
					</div>
					<div class="col-xs-12">
						<div class="readmore">
							<i class="fa fa-arrow-down animated infinite bounce" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<article role="post">
		<div class="container">
			<div class="row">
				<div class="col-md-9 pull-right">
					<?php get_template_part('inc/breadcrumbs'); ?>
					<div class="content-post">
						<?php the_content() ?>
					</div>
				</div>
				<div class="col-md-3 pull-right">
					<?php get_sidebar() ?>
				</div>
			</div>
		</div>
	</article>
</section>

<?php endwhile;?>
<?php endif;?>

<?php get_footer() ?>

