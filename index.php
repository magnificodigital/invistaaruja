<?php get_header(); ?>

<section id="row1">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 col">
					
					<?php 
	                    $args = array(
		                    'showposts' => 1,
		                    'post_type' => 'ebook',
		                    'orderby' => 'date',
							'order' => 'DESC'
						); 
	                ?>
	                <?php query_posts($args); ?>
	                <?php if (have_posts()) : while (have_posts()) : the_post() ?>

					<article class="post left">
						<a href="<?php the_field('link',get_the_ID()); ?>" target="_blank">
							<div class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url('index_row1'); ?>')"></div>
							<div class="title-wrapper">
								<span>E-BOOK</span>
								<h1><?php the_field('call_to_action',get_the_ID()); //the_title() ?></h1>
							</div>
						</a>
					</article>

					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>

				</div>
				<div class="col-md-5 col-sm-12 col">

					<div class="container-fluid">
						<div class="row">

							<?php 
								$args = array(
									'showposts' => 2, 
									'orderby' => 'date',
									'order' => 'DESC',
									//'offset' => 1
								); 
							?>
							<?php query_posts($args); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post() ?>

							<div class="col-md-12 col-sm-6 col-xs-12 col">
								<article class="post">
									<a href="<?php the_permalink(); ?>">
										<div class="thumbnail">

											<?php the_post_thumbnail('index_row1_2', array('title' => get_the_title(), 'alt' => get_the_title())); ?>
										</div>
										<div class="title-wrapper">
											<h2><?php the_title() ?></h2>
											<span><?php the_field('call_to_action') ?></span>
										</div>
									</a>
								</article>
							</div>

							<?php endwhile; endif; ?>
							<?php wp_reset_query() ?>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<section id="contentPosts">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<?php 
				$args = array(
					'showposts' => 10, 
					'orderby' => 'date',
					'order' => 'DESC',
					//'offset' => 3
				); 
				query_posts($args);
				if (have_posts()) : while (have_posts()) : the_post() ?>

					<article class="post reveal">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
									<?php the_post_thumbnail('index_row2', array('title' => get_the_title(), 'alt' => get_the_title() )) ?>
								</a>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12">	
								<h3><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
								<h4 class="calltoaction"><?php the_field('call_to_action') ?></h4>
								<?php
                                    $id = get_the_ID();
                                    $category_detail = get_the_category($id);        
                                    foreach ($category_detail as $cd) {
                                        $nomecategoria = $cd->cat_name;
                                        $linkcategoria = get_bloginfo('url').'/categoria/'.$cd->slug;
                                    }
                                ?>
                                <p class="cat"><a href="<?php echo $linkcategoria ?>"><?php echo $nomecategoria ?></a></p>
							</div>
						</div>
					</article>

				<?php endwhile; endif;
				wp_reset_query(); ?>

			</div>
			<div class="col-md-4">	
				<?php get_sidebar('sidebar'); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>