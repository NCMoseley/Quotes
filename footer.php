<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

		</div><!-- #content -->
            <nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="nav">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
				  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>	
				<div class="proud">
				  <a class="site-info" href="https://github.com/NCMoseley?tab=repositories">  <text>Delivered to you by</text> Nate Dogg </a>
				</div>		
			</nav><!-- #site-navigation -->
				
			<footer id="colophon" class="site-footer" role="contentinfo">
		<div >
					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
