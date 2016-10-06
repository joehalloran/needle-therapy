<article>
	<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
	</a>
	<p class="excerpt"><?php echo get_the_excerpt();?></p>
	<p><a href="<?php the_permalink(); ?>"><?php _e('Read more', 'needletherapy') ?></a></p>
</article>