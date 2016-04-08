<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title><?php bloginfo('title')?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
		<?php wp_head() ?>
	</head>


<header>
	<h1><a href="<?php echo home_url('/')?>"><?php bloginfo('name') ?></H1>
</header>


<?php 
		if ( has_nav_menu('main_menu') ) {
		wp_nav_menu(array('theme-location' => 'main_menu') ); 
	}
		?>

<nav>
	<?php wp_nav_menu(array(
	'menu'=>'primary'
	)); ?>
</nav>

	<div id="container">

	</div>
