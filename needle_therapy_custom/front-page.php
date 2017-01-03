<?php get_header(); ?>
	<body class="index">
		<div id="page-wrapper">

			<?php get_template_part( 'template-parts/menu', 'front' );?>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->

					<div class="inner">

						<header>
							<h2><?php bloginfo("name"); ?></h2>
						</header>
						<p><strong><?php bloginfo("description"); ?></strong>
						</p>
						<footer>
							<ul class="buttons vertical">
								<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">
					<?php $customText = get_option( 'nt_options', $nt_options ); ?>

					<header class="special container">
						<span class="icon"><img class="site-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/acupuncture-needles-final-small.png"></span>
						<h2>Needle Therapy</h2>
						<p><?php echo $customText['nt_intro_text']; ?></p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row 50%">
								<div class="8u 12u(narrower)">

									<header>
										<h2>About Eleanor</h2>
									</header>
									<p><?php echo $customText['nt_about_text']; ?></p>
									<footer>
										<ul class="buttons">
											<li><a href="/about-eleanor/" class="button">Find Out More</a></li>
										</ul>
									</footer>

								</div>
								<div class="4u 12u(narrower) important(narrower)">

									<img id="about-eleanor-image" class="image featured" src="<?php bloginfo('stylesheet_directory'); ?>/images/eleanor.jpg" alt="" />
								</div>
							</div>
						</section>

					<!-- Two -->
						<section id="products-preview" class="wrapper style1 container special">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon fa-ravelry"><img class="front-page-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/acupuncture-needles-final-small.png"></span>
										<header>
											<h3>Acupuncture</h3>
										</header>
										<p><?php echo $customText['nt_acu_text']; ?></p>
										<ul class="buttons">
											<li><a href="/acupuncture/" class="button special">Learn More</a></li>
										</ul>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon"><img class="front-page-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/facial-acupuncture-final-small-bw.png"></span>
										<header>
											<h3>Facial Acupuncture</h3>
										</header>
										<p><?php echo $customText['nt_facial_text']; ?></p>
										<ul class="buttons">
											<li><a href="/facial-acupuncture/" class="button special">Learn More</a></li>
										</ul>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon fa-ravelry"><img class="front-page-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/fruit-bowl-final-small-bw.png"></span>
										<header>
											<h3>Nutritional Therapy</h3>
										</header>
										<p><?php echo $customText['nt_nutrition_text']; ?></p>
										<ul class="buttons">
											<li><a href="/nutrition/" class="button special">Learn More</a></li>
										</ul>
									</section>

								</div>
							</div>
						</section>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Needle Therapy Blog</h2>
							</header>

							
							<?php 
				  			$my_query = new WP_Query( 
				  				array( 
				  					'posts_per_page' => 4, 
				  					'category_name' => 'featured',
				  					) 
				  				);

				  			$loopCount = 0;

							while ( $my_query->have_posts() ) : $my_query->the_post(); 

							if ( $loopCount % 2 == 0 ) {
								echo '<div class="row">';
							}
							?>
								
						   		<div class="6u 12u(narrower)">

									<section>
										<!-- <a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail(); ?></a> -->
										<header>
											<a href="<?php the_permalink(); ?>">
												<h3><?php the_title(); ?></h3>
											</a>
										</header>
										<p>	
											<?php echo excerpt_character_limit(get_the_excerpt()); ?>
											<br />
											<a class="moretag" href="<?php the_permalink(); ?>">Read the full article</a>
										</p>
									</section>

								</div>

							<?php		
							if ( $loopCount % 2 == 1 ) {
								echo '</div>';
							}    

							$loopCount ++;

							endwhile; 
							?>

							<footer class="major">
								<ul class="buttons">
									<li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="button">See all blog posts</a></li>
								</ul>
							</footer>

						</section>

				</article>

			<!-- CTA -->
				<section id="cta">
					<footer>
						<ul class="buttons">
							<li><a href="/contact/" class="button special">Contact me</a></li>
							<!-- <li><a href="#" class="button">Mailing list</a></li> -->
						</ul>
					</footer>
				</section>

			          
   <?php get_footer(); ?>