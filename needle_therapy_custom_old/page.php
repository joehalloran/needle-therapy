<?php get_header(); ?>
	
	<div class="container">
    	<div class="row">
	    	<section>  
	    		<div class="col-md-8 col-lg-9">  
	        		
	    			<?php
		            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            	<header>
				   			<h2 id="page-title"><?php the_title(); ?></h2>
				   		</header>
				        
				        <? the_content(); ?>
				        
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no content matched your criteria.', 'needletherapy'); ?></p>
					<?php endif; ?>

				</div> <!-- /.col -->
			</section>
    		<aside id="sibebar">
    			<div class="col-md-4 col-lg-3">
			    	<?php get_sidebar(); ?>
		        </div> <!-- /.col -->
    		</aside>
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
	
<?php get_footer(); ?>
