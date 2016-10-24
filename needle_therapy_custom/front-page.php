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

					<header class="special container">
						<span class="icon fa-heart-o"></span>
						<h2>Acupuncture and Nutrition</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id sollicitudin urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a tincidunt ipsum, eu pellentesque ante. Suspendisse laoreet nibh at libero gravida pharetra. Morbi dapibus consectetur erat at vestibulum. <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row 50%">
								<div class="8u 12u(narrower)">

									<header>
										<h2>About Acupuncture</h2>
									</header>
									<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
									<footer>
										<ul class="buttons">
											<li><a href="#" class="button">Find Out More</a></li>
										</ul>
									</footer>

								</div>
								<div class="4u 12u(narrower) important(narrower)">

									<ul class="featured-icons">
										<li><span class="icon fa-tree"><span class="label">Feature 1</span></span></li>
										<li><span class="icon fa-user"><span class="label">Feature 2</span></span></li>
										<li><span class="icon fa-venus-mars"><span class="label">Feature 3</span></span></li>
										<li><span class="icon fa-plus-square"><span class="label">Feature 4</span></span></li>
										<li><span class="icon fa-heart"><span class="label">Feature 5</span></span></li>
										<li><span class="icon fa-user-md"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Acupuncture</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Facial Acupuncture</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Nutritional Therapy</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
									</section>

								</div>
							</div>
						</section>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Needle Therapy Blog</h2>
							</header>

							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>Article 1</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Article 2</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Article 3</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Article 4</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer>

						</section>

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Ready to do <strong>something</strong>?</h2>
						<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button special">Contact me</a></li>
							<li><a href="#" class="button">Mailing list</a></li>
						</ul>
					</footer>

				</section>



			        
			          	<?php /*
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
						*/
						?>
			          
   <?php get_footer(); ?>