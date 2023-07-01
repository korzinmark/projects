<?php
/*
Template Name: Шаблон для постеров
Template Post Type: post, item
*/
?>

<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page', get_post_type() );

		endwhile; 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();