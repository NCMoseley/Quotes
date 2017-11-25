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
				  <span class="site-info" href="<?php echo esc_url( 'https://github.com/NCMoseley?tab=repositories' ); ?>"><?php printf( esc_html( 'Delivered to you by %s' ), "<text>Nate Dogg</text>" ); ?> </span>
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
