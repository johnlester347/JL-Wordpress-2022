<?php
/**
 *
 * Template Name: Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_Wordpress
 */
get_header();
?>


<?php get_template_part('template-parts/content', 'hero'); ?>

<?php get_template_part('template-parts/content', 'optin'); ?>

<?php get_template_part('template-parts/content', 'boost'); ?>

<?php get_template_part('template-parts/content', 'benefits'); ?>

<?php get_template_part('template-parts/content', 'course-feature'); ?>

<?php get_template_part('template-parts/content', 'project-feature'); ?>

<?php get_template_part('template-parts/content', 'video-feature'); ?>

<?php get_template_part('template-parts/content', 'instructor'); ?>

<?php get_template_part('template-parts/content', 'testimonial'); ?>


<?php
get_footer();