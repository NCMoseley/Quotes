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
    
  <div class="authorlink">
    <h2 class="author" id="author"></h2>
    <h2 id="source"></h2>
  </div>  
</div>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

    <button type="button" id="new-quote-button">Show Me Another!</button>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

    <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main>
    </div>

<?php get_footer(); ?>

