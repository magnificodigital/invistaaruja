<?php 
$termo = $_GET['s'];
get_header() ?>
<section id="single-page" class="search-results page">
	
	<div class="headerWrapper">
		<header class="titleWrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1>Resultado para: <strong><?php echo $termo ?></strong></h1>
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

	<section id="contentPosts">
		<div class="container">
			<div class="row">

				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post() ?>
						<div class="col-md-6">

						<article class="post">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-5">
										<?php the_post_thumbnail('index_row2') ?>
									</div>
									<div class="col-md-7">	
										<h3><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
										<h4 class="calltoaction"><?php the_field('call_to_action') ?></h4>
									</div>
								</div>
							</div>
						</article>

						</div>
				

				<?php endwhile; ?>
				
				<?php
					global $wp_query;
                    $big = 999999999;
                    $p = array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    );
                    echo '<div class="navigation">'.paginate_links($p).'</div>';
				?>

				<?php else : ?>

					<div class="col-xs-12">
						<header>	
							<h2>Nenhum post encontrado.</h2>
						</header>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</section>
</section>
<?php get_footer() ?>