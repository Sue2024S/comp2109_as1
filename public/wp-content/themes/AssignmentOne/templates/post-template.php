<?php
/**
 * Template Name: Custom Post
 * Template Post Type: post
 */
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
// $featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id(), size:'full');
?>
    <section class="post-masthead">
        <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-featured-image">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
        <?php endif; ?>
            <div class="post-content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>

    </section>

<?php
    endwhile;
endif;  
get_footer();
?>