<?php get_header(); ?>
	<div class="container">
    	<div class="row">
    		<div id="main" class="col-md-8 col-lg-9">
		        <section class="row page-section"> 
	        	  <div class="col-md-12">
			    	<h2 id="page-title"><?php _e('Needle Therapy Blog', 'needletherapy'); ?></h2>
		    	  </div>
		          <div class="col-sm-12">
		            <?php
		            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   			<a href="<?php the_permalink(); ?>">
			   				<?php the_post_thumbnail('full', array( 'class' => 'img-rounded book-thumbnail book-thumbnail-list')); ?>
				        	<h3><?php the_title(); ?></h3>
				        </a>
				        <p class="excerpt"><?php echo get_the_excerpt();?>
				        <br />
				        <a href="<?php the_permalink(); ?>"><?php _e('Read more', 'needletherapy') ?></a></p>
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
   	
<?php get_footer(); ?>