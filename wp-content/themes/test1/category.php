<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>




			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<div class="news-list subpage-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news-bg.jpg')">
	<div class="container">
		<h2 class="page-title"><?php single_cat_title(); ?></h2>
		<div class="news-list__loop">

			<?php get_template_part('news-item'); ?>

		</div>
		<!--<div class="pagination">-->
			<!--<a href="#" class="prev"><i class="fa fa-chevron-left"></i> <span>Poprzednia</span></a>-->
			<!--<a href="#">1</a>-->
			<!--<a href="#" class="current">2</a>-->
			<!--<a href="#">3</a>-->
			<!--<a href="#" class="next"><span>Następna</span> <i class="fa fa-chevron-right"></i></a>-->
		<!--</div>-->
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
