<?php get_header(); ?>
	
	<div class="container">
    	<div class="row">
	    	<article>  
	    		<div class="col-md-8 col-lg-9">  
	        		
	    			<?php
		            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            	<header>
				   			<h2 id="page-title"><?php the_title(); ?></h2>
				   		</header>
				        
				        <? the_content(); ?>
				        
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.', 'needletherapy'); ?></p>
					<?php endif; ?>
			        <? the_post_navigation( array(
						'prev_text'          => __( 'Previous', 'needletherapy' ),
						'next_text'          => __( 'Next', 'needletherapy' ),
					) ); ?>
				</div> <!-- /.col -->
			</article>
    		<aside id="sibebar">
    			<div class="col-md-4 col-lg-3">
			    	<?php get_sidebar(); ?>
		        </div> <!-- /.col -->
    		</aside>
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
	
<?php get_footer(); ?>
