<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<button type="button" id="new-quote-button">Show Me Another!</button>