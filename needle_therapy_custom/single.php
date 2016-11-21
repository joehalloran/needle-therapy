<?php get_header(); ?>
	
	<body class="right-sidebar">
		<div id="page-wrapper">

			<?php get_template_part( 'template-parts/menu', 'normal' );?>

			<!-- Main -->
				<article id="main">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<header class="special container">
							<span class="icon"><img class="site-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/acupuncture-needles-final-small.png"></span>
							<h2><?php the_title(); ?></h2>
						</header>

						<!-- One -->
							<section class="wrapper style4 container">
								<div class="row 150%">
									<div class="8u 12u(narrower)">

									<!-- Content -->
										<div class="content">
											<section>	

												
												<?php
												the_post_thumbnail('full', array( 'class' => 'image featured'));
												the_content();
												?>
						        
												<?php endwhile; else: ?>
													<p><?php _e('Sorry, no content matched your criteria.', 'needletherapy'); ?></p>
												<?php endif; ?>
											</section>
										</div>
									</div>
									<div class="4u 12u(narrower)">

									<!-- Sidebar -->
										<div class="sidebar">
											<?php //get the right sidebar ?>
									        <?php dynamic_sidebar( 'Right Sidebar' ); ?>
										</div>

								</div>
							</div>
						</section>

				</article>
	
<?php get_footer(); ?>
