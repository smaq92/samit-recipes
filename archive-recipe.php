<?php
/**
 * Recipe Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Samit-Recipes
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

		<form action="/" method="get" class="recipe-filters">
			<?php
				wp_dropdown_categories( array(
					'show_option_all' => 'All Cuisines',
					'taxonomy'        => 'cuisine',
					'name'           => 'cuisine',
					'orderby'        => 'name',
					'selected'       => get_query_var( 'cuisine' ),
					'hierarchical'   => true,
					'depth'         => 1,
					'echo'          => true,
					'value_field'   => 'slug',
				) );
				wp_dropdown_categories( array(
					'show_option_all' => 'All Diets',
					'taxonomy'        => 'diet',
					'name'           => 'diet',
					'orderby'        => 'name',
					'selected'       => get_query_var( 'diet' ),
					'hierarchical'   => true,
					'depth'         => 1,
					'echo'          => true,
					'value_field'   => 'slug',
				) );	
			?>
		</form>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
