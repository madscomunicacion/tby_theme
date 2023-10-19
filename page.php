<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

get_header();


while ( have_posts() ) :
	the_post();
	?>

<main id="content" <?php post_class( 'site-main  floating-head' ); ?>>
    <header class="page-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

	<div class="page-content">
        <?php the_content(); ?>
        
	</div>

</main>

	<?php
endwhile; // End of the loop.

get_footer();