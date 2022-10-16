<?php
function add_files(){
  wp_enqueue_style('base', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_files');
?>