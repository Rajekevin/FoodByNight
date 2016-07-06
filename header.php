<!DOCTYPE html>

<html lang="fr">


<body id="page-top" class="index">

 



<header class="header">
		<meta charset="utf-8"/>
		<title><?php bloginfo('title')?></title>
     <script src="assets/js/jquery-2.2.2.js"></script>
     <link href="assets/css/animate.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />

    <link rel="stylesheet" href="assets/css/404.css" />

       <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



    <link href="404.css" rel="stylesheet" type="text/css"  media="all" />


      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php wp_head(); ?>
		<?php wp_enqueue_script("jquery"); ?>

		<meta name="description" content="">
		<meta name="author" content="">


 <!--  <div class="container">
    <nav class="navbar   navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>

          <i>
          <a class="navbar-brand page-scroll" href="#page-top" href="<?php echo home_url('/')?>"><?php bloginfo('name') ?></i></b></a> </div>
      
     
      <div id="main-nav" class="collapse navbar-collapse">

        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Accueil</a></li>
          <li><a href="#services" class="scroll-link">Nos Services</a></li>
          <li><a href="#aPropos" class="scroll-link">A propos</a></li>
          <li><a href="#menu" class="scroll-link">Nos Menus</a></li>
          <li><a href="#team" class="scroll-link">Nos Chefs</a></li>
          <li><a href="#contactUs" class="scroll-link">Contact</a></li>


          <li><a href="reglement.php" class="scroll-link">reglement</a></li>
        </ul>
      </div>
      
    </nav>
    
  </div> -->


   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">FoodByNight </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home">Acceuil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Nos Services</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#menu">Nos Menu</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#team">Nos Chefs</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#aPropos">A Propos</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contactUs">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


  




   
     
   
</header>




  





<?php 
		if ( has_nav_menu('main_menu') ) {
		wp_nav_menu(array('theme-location' => 'main_menu') ); 
	}
		?>



	<div id="container">

	</div>
