<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package Shape
* @since Shape 1.0
*/
?>

<div class="footer">
    <div class="container">
        <a href="#section0" class="scroll-top scroll-to"><i class="fa fa-chevron-up"></i></a>
        <?php
            if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
            }

            if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
            }

            if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
            }

            if(is_active_sidebar('footer-sidebar-4')){
                dynamic_sidebar('footer-sidebar-4');
            }

             if(is_active_sidebar('footer-sidebar-5')){
                dynamic_sidebar('footer-sidebar-5');
            }

            if(is_active_sidebar('footer-sidebar-6')){
                dynamic_sidebar('footer-sidebar-6');
            }
        ?>
    </div>
</div>


<?php wp_footer(); ?>

</body>
</html>