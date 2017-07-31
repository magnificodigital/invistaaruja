<?php 
$termo = $_GET['s'];
get_header();
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
$thumbnail = get_field('thumbnail', $queried_object);
$thumbnail = get_field('imagem_destaque', $taxonomy . '_' . $term_id);
?>
<style type="text/css">
<?php if (is_tag()) { ?>
	.headerWrapper {background-image: url('<?php bloginfo('template_url');?>/img/bg_search.jpg')}
<?php } else { ?>
	.headerWrapper {background-image: url(<?php echo $thumbnail; ?>);}
<?php } ?>
</style>

<section id="single-page" class="archive <?php if(is_tag()): ?>tag<?php endif;?> page">
	<div class="headerWrapper">
		<header class="titleWrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1><?php echo single_cat_title() ?></h1>
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
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-md-6">
							<article class="post">
								<div class="row">
									<div class="col-md-5">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('index_row2'); ?>
										</a>
									</div>
									<div class="col-md-7">	
										<h3><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
										<h4 class="calltoaction"><?php the_field('call_to_action'); ?></h4>
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