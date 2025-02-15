<?php
/**
 * Template Name: Homepage Template
 * Template Post Type: page
 */
get_header();
?>
<main>
    <section class="homasthead" style="background: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>')">
        <div>
            <h1><?php echo wp_kses_post(get_field('masthead_title')); ?></h1>
        </div>
    </section>
    <section>
    </sectoin>
</main>
<?php
get_footer();
?>