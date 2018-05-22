<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dynamic_development
 */

?>

<div class="home-top box-darknes" id="section0" style="background-image: url('<?php the_field('top_section_background') ?>') ">
    <div class="container">
        <h1>
            <?php if( get_field('top_section_text_line1') ): ?>
                <strong data-aos="fade-down"><?php the_field('top_section_text_line1') ?></strong>
            <?php endif; ?>

            <?php if( get_field('top_section_text_line2') ): ?>
                <span data-aos="fade-down" data-aos-delay="150"><?php the_field('top_section_text_line2') ?></span>
            <?php endif; ?>

        </h1>

        <?php if( get_field('top_section_link') ): ?>
            <a href="#section1" class="btn-blue scroll-to"  data-aos="fade-down" data-aos-delay="200"><?php the_field('top_section_link') ?> <i class="fa fa-chevron-right"></i></a>
        <?php endif; ?>
    </div>
    <a href="#section1" class="home-top__scroll scroll-to"><i class="fa fa-chevron-down"></i></a>
</div>
