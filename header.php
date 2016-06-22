<!DOCTYPE html>

<html lang="fr">


<header class="header">
		<meta charset="utf-8"/>
		<title><?php bloginfo('title')?></title>
     <script src="assets/js/jquery-2.2.2.js"></script>
     <link href="assets/css/animate.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />


      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php wp_head(); ?>
		<?php wp_enqueue_script("jquery"); ?>

		<meta name="description" content="">
		<meta name="author" content="">


  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>

        	<i>
        	<a href="<?php echo home_url('/')?>"><?php bloginfo('name') ?></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">

        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Accueil</a></li>
          <li><a href="#services" class="scroll-link">Nos Services</a></li>
          <li><a href="#aPropos" class="scroll-link">A propos</a></li>
          <li><a href="#menu" class="scroll-link">Nos Menus</a></li>
          <li><a href="#team" class="scroll-link">Nos Chefs</a></li>
          <li><a href="#contactUs" class="scroll-link">Contact</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
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
