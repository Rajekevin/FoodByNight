<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<title><?php bloginfo('title')?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
		<?php wp_head(); ?>
		<?php wp_enqueue_script("jquery"); ?>

		<meta name="description" content="">
		<meta name="author" content="">

	</head>


<header>
	<h1><a href="<?php echo home_url('/')?>"><?php bloginfo('name') ?></H1>


<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</header>


<?php 
		if ( has_nav_menu('main_menu') ) {
		wp_nav_menu(array('theme-location' => 'main_menu') ); 
	}
		?>

<nav>
	<?php wp_nav_menu(); ?>
</nav>

	<div id="container">

	</div>
