<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="author"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<button type="button" class="ne"><?php previous_post_link( '%link', 'Previous Entry', TRUE ); ?></button>
<button type="button" class="ne"><?php next_post_link( '%link', 'Next Entry', TRUE ); ?></button>


