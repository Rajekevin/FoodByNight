<?php get_header() ?>
<?php get_sidebar() ?>

<div id="left">

	<?php 

	 query_posts( array (
        'post_type' => 'Menu_FBN',
        'posts_per_page' => -1
        ) );

	while(have_posts()): the_post()?>

	<h2> <?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php the_post_thumbnail('medium') ?>

	<?php endwhile; ?>


</div>



<?php get_footer() ?>
