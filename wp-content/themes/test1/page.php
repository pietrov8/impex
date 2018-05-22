<?php get_header(); ?>

<?php

if (  is_front_page() == 1 )
{
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'main' );

        // If comments are open or we have at least one comment, load up the comment template.
        //	if ( comments_open() || get_comments_number() ) :
        //		comments_template();
         //	endif;

    endwhile; // End of the loop.
}
else
{
 			while ( have_posts() ) : the_post();

   				get_template_part( 'template-parts/content',  get_post_type() );

 			endwhile; // End of the loop.
}

?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
