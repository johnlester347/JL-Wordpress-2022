<?php
/**
 *
 * Template Name: User Field
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
                if( have_rows('author')) :
                    while( have_rows('author')) : the_row();
                ?>

                <?php $author_id = get_sub_field('user')['ID']; ?>

                <div class="col-sm-4">
                    <h5>Eto yung author field sa acf na naka set as user_form is equals to add/edit</h5>
                    <img src="<?php echo get_field('image', 'user_' . $author_id)['url']; ?>" alt="" class="img-fluid">
                    <p style="padding-top: 1rem;"><?php echo get_field('bio', 'user_' . $author_id); ?></p>
                    <p><?php echo get_field('location', 'user_' . $author_id); ?></p>
                </div>

                <?php
                endwhile;
                endif;
                ?>


            </section>

        </div><!-- content -->

    </div><!-- primary -->
</div><!-- container -->

<?php
get_footer();