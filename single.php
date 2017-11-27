<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

        <div class="nextentry">

          <!-- <button class=""><?php the_post_navigation(); ?></button> -->
            
           <!-- <a class="ne" href="<?php the_post_navigation(); ?>">Next Entry</a> -->

           <!-- <?php next_post_link( '%link', 'Next Entry', TRUE ); ?> -->
        </div>
                 
		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
