<?php
/*
Template Name: wc-container
*/
get_header();
?>

	<main>
        <section class="section top__section"> 
            <div class="container">

	            <?php		
	            while ( have_posts() ) :
	            	the_post();

	            	the_content();

	            	// If comments are open or we have at least one comment, load up the comment template.
	            	if ( comments_open() || get_comments_number() ) :
	            		comments_template();
	            	endif;

	            endwhile; // End of the loop.
	            ?>
            </div>
        </section>
	</main>

<?php
get_footer();
