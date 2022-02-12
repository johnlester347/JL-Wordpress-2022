<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
        <div class="post-details">
            <i class="fa fa-user"></i> <?php the_author(); ?>
            <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
            <i class="fa fa-folder"></i><?php the_category(', '); ?>
            <i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?>

            <div class="post-comments-badge">
                <a href="<?php comment_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0,1,'%'); ?></a>
            </div><!-- post-comments-badge -->
            <?php edit_post_link('Edit', '<div><i class="fa fa-comments"></i>', '</div>'); ?>
        </div><!-- post-details -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail()) : ?>
    <div class="post-image">
        <?php the_post_thumbnail(); ?>
    </div><!-- post-image -->
    <?php endif; ?>
    <div class="post-excerpt">
        <p><?php the_excerpt(  ); ?></p>
    </div><!-- post-excerpt -->


    <!----------- BACKUP COPY OF INDEX CONTNENT ----------------->
    <?php //bootstrap2wordpress_post_thumbnail(); ?>

    <!-- <div class="entry-content"> -->
    <?php
		// the_content(
		// 	sprintf(
		// 		wp_kses(
		// 			/* translators: %s: Name of current post. Only visible to screen readers */
		// 			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bootstrap2wordpress' ),
		// 			array(
		// 				'span' => array(
		// 					'class' => array(),
		// 				),
		// 			)
		// 		),
		// 		wp_kses_post( get_the_title() )
		// 	)
		// );

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap2wordpress' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
    <!-- </div> -->

    <!-- <footer class="entry-footer"> -->
    <?php //bootstrap2wordpress_entry_footer(); ?>
    <!-- </footer> -->
    <!----------- BACKUP COPY OF INDEX CONTNENT ----------------->

</article><!-- #post-<?php the_ID(); ?> -->