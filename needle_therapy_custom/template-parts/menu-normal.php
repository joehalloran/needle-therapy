<!-- Header -->
<header id="header">
	<h1 id="logo"><a href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?> <span><?php bloginfo("description"); ?></span></a></h1>
		<?php
		 wp_nav_menu( array(
		            'theme_location'    => 'main_menu',
		            'depth'             => 2,
		            'container'         => 'nav',
		            'container_id'   	=> 'nav',
		            )
		    );
		?>
	</nav>
</header>