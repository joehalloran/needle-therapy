<?php get_header(); ?>
	
	<body class="right-sidebar">
		<div id="page-wrapper">

			<?php get_template_part( 'template-parts/menu', 'normal' );?>

			<!-- Main -->
				<article id="main">
					
						<header class="special container">
							<span class="icon fa-mobile"></span>
							<h2><?php echo nt_custom_title(); ?></h2>
						</header>

						<!-- One -->
							<section class="wrapper style4 container">
								<div class="row 150%">
									<div class="8u 12u(narrower)">

									<!-- Content -->
										<div class="content">
											<section>

												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													
												<article class="post-preview">
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<?php the_excerpt(); ?>
													<nav>
														 <a style="white-space: nowrap;" href="<?php the_permalink(); ?>" class="button special">Learn More</a>
													</nav>
												</article>
												<?php endwhile; else: ?>
												<article class="post-preview">
													<p><?php _e('Sorry, no content matched your criteria.', 'needletherapy'); ?></p>
												</article>
												<?php endif; ?>
													
												
											</section>
										</div>
									</div>
									<div class="4u 12u(narrower)">

									<!-- Sidebar -->
										<div class="sidebar">
											<?php //get the right sidebar ?>
									        <?php get_sidebar( 'right' ); ?>
										</div>

								</div>
							</div>
						</section>

				</article>
	
<?php get_footer(); ?>



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