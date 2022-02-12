<?php

?>
<!-- TESTIMONIALS
	================================================== -->
<section id="kudos">
    <div class="container">
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
                <h2>What People Are Saying About Brad</h2>
                <!-- TESTIMONIAL -->
                <div class="row testimonial">
                    <?php $loop = new WP_Query( array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                    <?php while($loop->have_posts(  )) : $loop->the_post(  ); ?>

                    <div class="row">
                        <div class="col-sm-4">
                            <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="Brennan">
                            <?php endif; ?>
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                <?php the_content(); ?>
                                <cite>&mdash;<?php the_title(); ?></cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div>
                    <?php wp_reset_query(  ); ?>
                    <?php endwhile; ?>
                </div><!-- row -->

            </div><!-- end col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- kudos -->