<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Samit-Recipes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
		<h2><?php the_title(); ?></h2>
	</a>
	<div class="meta">
		<?php
		$prep = get_field('prep_time');
		$cook = get_field('cook_time');
		$serv = get_field('servings');
		$diff = get_field('difficulty');
		echo $prep ? "<span>Prep: {$prep}m</span>" : '';
		echo $cook ? "<span>Cook: {$cook}m</span>" : '';
		echo $serv ? "<span>Serves: {$serv}</span>" : '';
		echo $diff ? "<span>Level: {$diff}</span>" : '';
		?>
	</div>
	<footer class="entry-footer">
		<?php samit_recipes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->