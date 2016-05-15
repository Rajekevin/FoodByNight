<?php get_header() ?>
<?php get_sidebar() ?>

<div id="left">
	<?php while(have_posts()):?>

	<h2> </h2>
	<?php the_content(); ?>

	<?php endwhile; ?>


	<?php comments_template('', true); ?>


</div>



<?php get_footer() ?>
