<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

              <nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<span class="site-info" href="<?php echo esc_url( 'https://github.com/NCMoseley?tab=repositories' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'NateDogg' ); ?></span>
				</nav><!-- #site-navigation -->
				
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div >
					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
