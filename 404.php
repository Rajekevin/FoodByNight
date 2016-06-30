<?php

get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" >
    			<article id="post-0" class="post error404 not-found">
    				<i class="fa fa-frown-o"></i>
    		    	<header>
    		    	   	<h1 class="entry-title"><?php _e( '404 Error', 'arcade-basic' ); ?></h1>
    		        </header>
    		        <div class="entry-content description">
    		            <p><?php _e( "Sorry. We can't seem to find the page you're looking for.", 'arcade-basic' ); ?></p>
    		        </div>
    		    </article>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>