<?php
				
	$args = array('orderby' => 'name','order' => 'ASC');
	$categories = get_categories($args);
	foreach($categories as $category) { ?>

		<div class="content-category">
			<h2 class="title">
				<a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a>
			</h2>
			
			<div class="row">

				<?php 
					global $post;
					$myposts = get_posts('numberposts=2&orderby=date&order=DESC&category_name='.$category->name);
					foreach($myposts as $post) : ?>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<article class="post">
							<div class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url('index_row2'); ?>');"></div>
							<div class="title-wrapper">
								<a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
								<a href="<?php the_permalink(); ?>">Leia mais</a>
							</div>
						</article>
					</div>

				<?php endforeach; ?>

			</div>
		</div>

<?php } ?>
