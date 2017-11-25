<?php
/**
* The main template file.
*
* @package QOD_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>

<?php if ( is_home() && ! is_front_page() ) : ?>
<header>
<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>

<div class="wrapper">
<p id="quote"></p>
<h2 id="author"></h2>
<p id="source"></p>
<p id="link"></p>
</div>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- This is the Word press default comment generation Loop ====================================== -->

    <!-- <?php get_template_part( 'template-parts/content' ); ?> -->

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

    <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main>
    </div>

<?php get_footer(); ?>
