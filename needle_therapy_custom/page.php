<?php get_header(); ?>
	
	<body class="no-sidebar">
		<div id="page-wrapper">

			<?php get_template_part( 'template-parts/menu', 'normal' );?>

			<!-- Main -->
				<article id="main">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<header class="special container">
							<span class="icon fa-mobile"></span>
							<h2><?php the_title(); ?></h2>
						</header>

						<!-- One -->
							<section class="wrapper style4 container">

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

						</section>

				</article>

<?php get_footer(); ?>
