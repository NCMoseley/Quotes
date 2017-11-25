<?php

get_header(); ?>


<div id="primary" class="content-area">
<main id="main" class="site-main">

<section>

<header>
<?php the_title('<h1 class="entry-title">', '</h1>' ); ?>
</header>

<?php if(is_user_logged_in() && current_user_can( 'edit_posts' ) ): ?>

<div class="quote-submission-wrapper">

<form name="quoteForm" id="quote-submission-form" >

<div>
<label for="quote-author">Original Author</label>
<input type="text" name="quote_author" id="quote-author" >
</div>

<div>
<label for="quote-content">Quote</label>
<textarea rows="3" cols="70" type="text" name="quote_content" id="quote-content" ></textarea>
</div>

<div>
<label for="quote-source">What website/source did this come from?</label>
<textarea rows="1" cols="40" type="text" name="quote_source" id="quote-source" ></textarea>
</div>

<div>
<label for="quote-source-url">Website url:</label>
<input type="url" name="quote_source_url" id="quote-source-url" >
</div>

<button id="submit" type="button" value="Submit Quote">Submit Quote</button>

</form>

<p class="submit-success-message" style="display:none;"></p>

</div>

<?php else: ?>

<p>Please login to post a quote.</p>

<p><?php echo sprintf('<a href="%1s">%2s</a>', 
esc_url(wp_login_url()), 'Click here to login.' ); ?></p>


<?php endif; ?>


</section>

</main>

</div>


<?php get_footer(); ?>