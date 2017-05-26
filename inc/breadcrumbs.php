<nav class="breadcrumbs">
	<ol>
		<li><a href="<?php bloginfo('url') ?>"><i class="fa fa-home"></i></a></li>

		<?php
			if (is_single()) {

                $id = get_the_ID();
                $category_detail = get_the_category($id);        
                foreach ($category_detail as $cd) {
                    $nomecategoria = $cd->cat_name;
                    $linkcategoria = get_bloginfo('url').'/categoria/'.$cd->slug;
                } ?>

                <li><a href="<?php echo $linkcategoria ?>"><?php echo $nomecategoria ?></a></li>
                           
			<?php }

		?>

		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
	</ol>	
</nav>
