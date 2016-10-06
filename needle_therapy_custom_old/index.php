<?php get_header(); ?>
	
	<div class="container">
    	<div class="row">
    		<section>
	    		<div class="col-md-8 col-lg-9">
		    	    
	        		<header>
			    		<h2 id="page-title"><?php _e('Needle Therapy Blog', 'needletherapy'); ?></h2>
		    		</header>
		    		 
		            <?php
		            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   			<?php get_template_part( 'template-parts/post', 'preview' );?>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.', 'needletherapy'); ?></p>
					<?php endif; ?>
			        <? the_posts_pagination( array(
						'prev_text'          => __( 'Previous', 'needletherapy' ),
						'next_text'          => __( 'Next', 'needletherapy' ),
					) ); ?>
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