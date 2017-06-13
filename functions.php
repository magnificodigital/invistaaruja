<?php 

// Mover os scripts para o footer
function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


//Menus
if (function_exists('register_nav_menu')) {
	register_nav_menu( 'menu_top', 'Menu Header' );
	register_nav_menu( 'menu_footer', 'Menu Footer');
}

//Search form
function my_search_form($form) {
	$form = '<form method="get" id="searchform" class="searchform" action="' . get_option('home') . '/" >
	<div>
	<input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" placeholder="Procure algo..." />	
	<button type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
	</form>';
	return $form;
}

add_filter('get_search_form', 'my_search_form');

//Thubmnails
add_theme_support( 'post-thumbnails' );
add_image_size('single',1200,900, true); //Imagem em destaque no post
add_image_size('index_row1',787,500, true); //Posts da esquerda home
add_image_size('index_row1_2',563,250, true); //Posts da direita home
add_image_size('index_row2',375,250, true); //Segunda seção da home
add_image_size('sidebar',410,230, true); //Post sidebar
add_image_size('post_single_sidebar',223,140, true); //Sidebar no post

//Troca o logo
function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
		    background-image: url('<?php bloginfo('template_url') ?>/img/logo.svg');
		    width: 250px;
		    background-size: 250px;
		}
   </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

