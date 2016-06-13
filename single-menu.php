<?php
/**
 * The Template for displaying all single films.
 *
 * @package WordPress
 * @subpackage Food_By_Night
 * @since Food_By_Night
 */

get_header(); ?>

<div id="container">
	<div id="content" role="main">
	
	<!-- BOUCLE CLASSIQUE -->

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Food_By_Night' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->


			<div class="entry-utility">
				<?php edit_post_link( __( 'Edit', 'Food_By_Night' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- #post-## -->

	<!-- BOUCLE CLASSIQUE -->
	
	<!-- CONTENU ACF -->
		<?php
			// Contrôler si ACF est actif
			if ( !function_exists('get_field') ) return;
		?>
	
		<ul>
			<li><strong>Nom du Menu </strong><?php the_field('nom_du_menu'); ?></li>
			<li><strong>Entree </strong><?php the_field('Entree'); ?> personnes</li>
			<li><strong>Plat : </strong><?php the_field('plat'); ?></li>
			<li><strong>Dessert : </strong><?php the_field('dessert'); ?></li>
			<li><strong>Prix : </strong><?php the_field('prix'); ?></li>
		</ul>


	<!-- CONTENU ACF -->

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
