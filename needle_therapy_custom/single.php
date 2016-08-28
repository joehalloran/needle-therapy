<?php get_header(); ?>
	<div class="container">
    	<div class="row">
    		<div id="main" class="col-md-8 col-lg-9">
		        <section class="row page-section"> 
	        	  <div class="col-md-12">
		            <?php
		            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   			<h2 id="page-title"><?php the_title(); ?></h2>
				        
				        <? the_content(); ?>
				        
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.', 'needletherapy'); ?></p>
					<?php endif; ?>
		          </div> <!-- /.col -->
		   
		        </section> <!-- /.row -->
	
    		</div> <!-- /.col -->
    		<div id="aside" class="col-md-4 col-lg-3">
    			<div class="row">
	        	  <div class="col-md-12">
			    	<?php get_sidebar(); ?>
		    	  </div>
		        </div> <!-- /.row -->
    		</div> <!-- /.col -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
   	
<?php get_footer(); ?>