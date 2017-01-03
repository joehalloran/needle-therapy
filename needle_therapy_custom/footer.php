		<footer id="footer">

			<?php 
		    global $wp;
		    $current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
		    ?>

			<ul class="icons">

				<li><a href="https://twitter.com/NeedleTherapy" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url ?>&amp;title=Needle%20Therapy" title="Share on Facebook" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
			
			</ul>

			<ul class="copyright">
				<li>&copy; Eleanor Tetlow <?php echo date("Y"); ?></li><li>Wordpress Theme: <a href="#">Joe Halloran</a></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>

		</footer>
	</div>
	<?php wp_footer(); ?>
  </body>
</html>