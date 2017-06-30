<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">
	<link rel="stylesheet" href="http://magnificodigital.com/assets/createdby/createdby.css" />
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome-ie7.min.css">
	<![endif]-->

	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">
	<?php wp_head() ?>

</head>
<body <?php body_class() ?>>
<header id="site">
	<div class="headerWrapper">
		<div class="container">
			<a href="<?php bloginfo('url') ?>" class="logo" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a>
			<nav>
				<?php wp_nav_menu('menu_top') ?>
			</nav>
			<div class="pull-right">
				<div class="search">
					<span><i class="fa fa-search" aria-hidden="true"></i></span>
				</div>
				<div class="menuMobile">
					<span><i class="fa fa-bars" aria-hidden="true"></i></span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="searchbox">
		<?php get_search_form() ?>
	</div>
</header>
<main id="content">
	