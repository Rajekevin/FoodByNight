<?php get_header() ?>

<div>

	<?php while(have_posts()): the_post()?>

	<h2> </h2>
	<?php the_content(); ?>
	<?php the_content(_('Continue Reading')); ?>

	<?php endwhile; ?>


</div>



<?php get_footer() ?>
<?php get_sidebar() ?>