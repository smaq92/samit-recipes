<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Samit-Recipes
 */

get_header();
the_post();
?>

<main id="primary" class="wrap single-recipe">
	<h1><?php the_title(); ?></h1>
	<?php if (has_post_thumbnail()) {
		the_post_thumbnail('large');
	} ?>

	<?php get_template_part('template-parts/meta', 'recipe'); ?>

	<section>
		<h2>Ingredients</h2>
		<ul>
			<?php
			$ingredients = get_field('ingredients');
			if ($ingredients) {
				foreach (explode("\n", $ingredients) as $item) {
					$item = trim($item);
					if ($item) {
						echo "<li>" . esc_html($item) . "</li>";
					}
				}
			}
			?>
		</ul>
	</section>

	<section>
		<h2>Steps</h2>
		<ol><?php
				$steps = get_field('steps');
				if ($steps) {
					foreach (explode("\n", $steps) as $step) {
						$item = trim($step);
						if ($item) {
							echo "<li>" . esc_html($item) . "</li>";
						}
					}
				}
				?></ol>
	</section>

	<section class="content">
		<?php the_content(); ?>
	</section>
</main><!-- #main -->

<?php
get_footer();
