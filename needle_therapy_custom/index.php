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
			   			<?php get_template_part( 'template-parts/post', 'preview' );?>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.', 'needletherapy'); ?></p>
					<?php endif; ?>
		          </div> <!-- /.col -->
		   
		        </section> <!-- /.row -->
		        <section class="row"> 
		        	<div class="col-md-12">
			        <? the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'needletherapy' ),
						'next_text'          => __( 'Next page', 'needletherapy' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'needletherapy' ) . ' </span>',
					) ); ?>
					</div>
				</section>
	
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