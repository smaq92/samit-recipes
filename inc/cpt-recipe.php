<?php
add_action('init', function () {
  register_post_type('recipe', [
    'labels' => [
      'name' => 'Recipes', 'singular_name' => 'Recipe'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-carrot',
    'supports' => ['title','editor','thumbnail','excerpt','author','revisions'],
    'show_in_rest' => true,
    'rewrite' => ['slug' => 'recipes'],
  ]);
});

?>