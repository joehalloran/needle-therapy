<?php get_header(); ?>
	<main>
		<div class="container-fluid">
	        <section>
	        	<div class="container">
		        	<div class="row front-page-section"> 
			          <div class="col-sm-6">
			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
			          </div> <!-- /.col -->
			          <div class="col-sm-6">
			             <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/2.jpg" />
			          </div> <!-- /.col -->
			        </div> <!-- /.row -->
		        </div> <!-- /.container -->
	        </section> 
		    <section>
		    	<div class="highlight-section">
				    <div class="container"> 
				        <div id="services" class="row"> 
				          <div class="col-md-12">
				            <h2 class="section-title">Services</h2>
				          </div> <!-- /.col -->
				          <div class="col-md-4 service-box">
				            <h3>Acupuncture</h3>
				            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
				            <button type="button" class="btn btn-default">More</button>
				          </div> <!-- /.col -->
				          <div class="col-md-4 service-box">
				            <h3>Facial Acupuncture</h3>
				            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
				            <button type="button" class="btn btn-default">More</button>
				          </div> <!-- /.col -->
				          <div class="col-md-4 service-box">
				            <h3>Nutritional Therapy</h3>
				            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
				            <button type="button" class="btn btn-default">More</button>
				          </div> <!-- /.col -->
				        </div> <!-- /.row -->
			      </div> <!-- /.container -->
			    </div> <!-- /.highlight-section -->
			</section>
			<section>	
			    <div class="container">
			       	<div class="row front-page-section"> 
			          <div class="col-md-12">
			            <h2 class="section-title">About Acupuncture</h2>
			          </div> <!-- /.col -->
			          <div class="col-sm-6">
			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
			          </div> <!-- /.col -->
			          <div class="col-sm-6">
			             <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/7.jpg" />
			          </div> <!-- /.col -->
			        </div> <!-- /.row -->
			    </div> <!-- /.container -->
	        </section> 
	        <?php if ( have_posts() ) : ?>
	    	<section>
	    		<div class="container">
			        <div class="row front-page-section highlight-section">
			          <div class="col-md-12">
			            <h2 class="section-title">Needle Therapy Blog</h2>
			          </div> <!-- /.col -->
			          <div class="col-md-6">
			          	<?php 
			  			$my_query = new WP_Query( array( 'posts_per_page' => 2, 'cat' => ( get_cat_ID( 'featured' ) * -1 ) ) );
						while ( $my_query->have_posts() ) : $my_query->the_post();
					   		get_template_part( 'template-parts/post', 'preview' );?>
					    <?php endwhile; ?>
			          </div> <!-- /.col -->
			          <div class="col-md-6">
			            <?php 
			            $my_query = new WP_Query( 'category_name=featured&posts_per_page=1' );
						while ( $my_query->have_posts() ) : $my_query->the_post();
							if ( $post->ID == $do_not_duplicate ) continue; 
							get_template_part( 'template-parts/post', 'preview' );
						endwhile; 
						?>
			          </div> <!-- /.col -->
			        </div> <!-- /.row -->
			    </div> <!-- /.container -->
	        </section> 
	        <?php endif; ?>
	        <section>
	        	<div class="container">
	        		<div class="row front-page-section"> 
			          <div class="col-md-8 col-md-offset-2 text-center">
				        <img id="about-me-image" class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/img/ellie.jpg" />
			            <h2 class="section-title">About Eleanor</h2>
			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum.</p>
			          </div> <!-- /.col -->
			        </div> <!-- /.row -->
	    		</div> <!-- /.container -->
	    	</section>
	   	</div> <!-- /.container-fluid -->
	</main>
   <?php get_footer(); ?>