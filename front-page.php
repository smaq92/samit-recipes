<?php
/**
 * Home Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Samit-Recipes
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;?>

			<h2>Welcome to Samit</h2>
			<p>This is the place to be!</p>

		<?php
			endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
