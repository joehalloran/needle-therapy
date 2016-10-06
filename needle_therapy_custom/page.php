<?php get_header(); ?>
	
	<body class="no-sidebar">
		<div id="page-wrapper">

			<?php get_template_part( 'template-parts/menu', 'normal' );?>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-mobile"></span>
						<h2>And finally there's <strong>No Sidebar</strong></h2>
						<p>Where that in the center faces the nameless horrors alone.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
										<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Dolore Amet Consequat</h3>
										</header>
										<p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum massa. Morbi eu faucibus massa. Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.</p>
										<p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum porta cursus justo. Quisque ultricies lorem in ligula condimentum, et egestas turpis sagittis. Cras ac nunc urna. Nullam eget lobortis purus. Phasellus vitae tortor non est placerat tristique. Sed id sem et massa ornare pellentesque. Maecenas pharetra porta accumsan. </p>
										<p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem eget lacinia fringilla. Sed sed felis justo. Nunc sodales elit in laoreet aliquam. Nam gravida, nisl sit amet iaculis porttitor, risus nisi rutrum metus, non hendrerit ipsum arcu tristique est.</p>
									</section>
								</div>

						</section>

					

				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>


	<div class="container">
    	<div class="row">
	    	<section>  
	    		<div class="col-md-8 col-lg-9">  
	        		
	    			<?php
		            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            	<header>
				   			<h2 id="page-title"><?php the_title(); ?></h2>
				   		</header>
				        
				        <? the_content(); ?>
				        
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no content matched your criteria.', 'needletherapy'); ?></p>
					<?php endif; ?>

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
