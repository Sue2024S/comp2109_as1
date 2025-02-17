<?php

get_header();

//declare global $post to ensure it's available to use
global $post;

//in order to use our featured image we will need to add the fuction to our functions.php and create a variable to collect it here.
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
?>

<section class="post-masthead" style="background: url('<?php echo $featuredImg[0];?>')">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="homepage-content">
    <?php echo get_the_content(); ?>
</section>

<?php
get_footer();
?>