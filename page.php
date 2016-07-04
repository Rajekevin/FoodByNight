<?php get_header() ?>


<!-- <div id="left">

	<?php 

	 query_posts( array (
        'post_type' => 'Menu_FBN',
        'posts_per_page' => -1
        ) );

	while(have_posts()): the_post()?>

	<h2> <?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php the_post_thumbnail('medium') ?>

	<?php endwhile; ?> -->


<!-- </div> -->

<div  class="jumbotron">
<?PHP

$loop = new WP_Query( array( 'post_type' => 'produit', 'posts_per_page' => 10 ) );
while ( $loop->have_posts() ) : $loop->the_post();
  the_title();
  echo '<div>';
  the_content();
  echo '</div>';
endwhile;
?>
</div>







<?php get_footer(); ?>


 
 





 

