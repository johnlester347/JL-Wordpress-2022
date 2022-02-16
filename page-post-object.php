<?php
/**
 *
 * Template Name: Post Object Field
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
    <h1><?php the_title(); ?></h1>\
</section>
<?php } else { // This is the fallback image ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1><?php the_title(); ?></h1>
</section>
<?php } ?>

<!-- MAIN CONTENT
	================================================== -->
<div class="container">
    <div class="row" id="primary">

        <div id="content" class="col-sm-12">

            <section class="main-content">

                <?php while (have_posts(  )) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <hr>

                <?php
                    foreach ( get_field('featured_post') as $post ) : // Need mo i-name yung variable na $post kasi need yan dapat yung name na ippass mo sa parameter ng setup_postdata
                ?>
                <?php  setup_postdata( $post ); // ?>

                <div class="col-sm-6">
                    <h3><?php the_title(); ?></h3>
                    <?php the_post_thumbnail( array(200) ); ?><br>
                    <p><?php the_excerpt(  ); ?></p>
                    <a href="<?php echo the_permalink(); ?>" style="margin-top: 1rem;" class="btn btn-primary">Go to
                        this blog</a>
                </div>

                <?php
                    wp_reset_postdata();
                endforeach;
                ?>

            </section>

        </div><!-- content -->

    </div><!-- primary -->
</div><!-- container -->

<?php
get_footer();