<?php
/**
Template Name: Страница: с сайдбаром, без заголовка
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="primary" class="<?php echo apply_filters( 'alienship_primary_container_class', 'content-area col-sm-8' ); ?>">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( '/templates/parts/content', 'page' );

				comments_template( '', true );

			endwhile;
			?>

		</main><!-- #main -->

	</div><!-- #primary -->
<?php get_footer();
?>