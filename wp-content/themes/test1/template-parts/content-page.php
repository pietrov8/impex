<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package m2n_theme
 */


?>

<div class="about-page subpage-content" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
    <div class="container">
        <div class="about">
            <h2 class="page-title"><?php the_title(); ?></h2>

            <?php if( get_field('p_heading') ): ?>
                <strong data-aos="fade-down"></strong>
                <p class="top"><?php the_field('p_heading') ?></p>
            <?php endif; ?>

            <?php echo the_content(); ?>
        </div>
    </div>
</div>
