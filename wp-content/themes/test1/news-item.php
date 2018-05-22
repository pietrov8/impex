<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="news-thumb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" class="news-thumb__img"><?php the_post_thumbnail(array(291,291)); // Declare pixel size you need inside the array ?></a>
    <?php endif; ?>
<!-- /post thumbnail -->

    <div class="news-thumb__text">
        <time><?php the_time('m / Y'); ?></time>


        <!-- post title -->
        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <!-- /post title -->


        <p>Etiam luctus auctor laoreet. Nam finibus dignissim lorem, et cursus ex dignissim et. Sed laoreet non elit a facilisis. Vestibulum consectetur convallis sapien ac ultricies. Cras ex enim, sodales vitae libero non, sagittis mollis leo. In finibus diam eget neque pretium, a eleifend justo varius. </p>
        <a href="<?php the_permalink(); ?>" class="read-more">Czytaj więcej <i class="fa fa-chevron-right"></i></a>
    </div>
</div>

<?php endwhile; ?>

<?php endif; ?>