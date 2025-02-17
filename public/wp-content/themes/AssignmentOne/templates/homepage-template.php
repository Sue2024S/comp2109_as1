<?php
/**
 * Template Name: Homepage Template - Assignment 1
 * Template Post Type: page, cmsPosttype
 */
get_header();
?>
<main>
    <section class="home-masthead" style="background-image: url('<?php echo wp_kses_post(the_field('masthead_image')); ?>')">
        <div>
            <h1><?php echo wp_kses_post(the_field('masthead_title')); ?></h1>
        </div>
    </section>
    <section class="home-intro-row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2><?php echo wp_kses_post(the_field('row_one_title')); ?></h2>
            <p><?php echo wp_kses_post(the_field('row_one_text')); ?></p>
        </div>
    </sectoin>

    <section class="home-row-two">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="text-column">
                <h3><?php echo wp_kses_post(the_field('row_two_title')); ?></h3>
                <p><?php echo wp_kses_post(the_field('row_two_text')); ?></p>
            <div class="custom-plugin">
                <?php echo do_shortcode(wp_kses_post(the_field('custom_plugin_shortcode'))); ?>
            </div>
            <div class="image-column">
                <img src="<?php echo wp_kses_post(the_field('row_two_image')); ?>" alt="<?php echo wp_kses_post(the_field('row_two_image_alt')); ?>">
            </div>
        </div>
    </section>

    <!-- <section class="custom-plugin-section-row"> -->
    <section class="shortcode">
        <?php echo do_shortcode("[cms_posttype]"); ?>
    </section>
</main>

<?php
get_footer();
?>