<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_Wordpress
 */

get_header();

//This will return the full url or path and id of the feature image
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<!-- FEATURE IMAGE
	================================================== -->
<?php if( has_post_thumbnail() ) { // Check for if it has a feature img uploaded ?>
<section class="feature-image"
    style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background"
    data-speed="2">
    <h1><?php the_title(); ?></h1>
</section>
<?php } else { // This is the fallback image ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1><?php the_title(); ?></h1>
</section>
<?php } ?>

<!-- BLOG CONTENT
================================================== -->
<div class="container">
    <div class="row" id="primary">
        <main id="content" class="col-sm-8">
            <?php
		    while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bootstrap2wordpress' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bootstrap2wordpress' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        </main>

        <!-- SIDEBAR
			================================================== -->
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>



<?php
get_sidebar();
get_footer();