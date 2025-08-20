<?php
add_action('init', function () {
  register_taxonomy('cuisine', 'recipe', [
    'label' => 'Cuisine', 'public' => true, 'hierarchical' => true,
    'show_in_rest' => true, 'rewrite' => ['slug' => 'cuisine']
  ]);
  register_taxonomy('diet', 'recipe', [
    'label' => 'Diet', 'public' => true, 'hierarchical' => false,
    'show_in_rest' => true, 'rewrite' => ['slug' => 'diet']
  ]);
});

?>