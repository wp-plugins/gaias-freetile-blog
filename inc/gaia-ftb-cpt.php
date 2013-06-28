<?php
$labels = array(
    'name' => _x('Gaia ftb Blog', 'post', 'Gaia Rendering'),
    'singular_name' => _x('Blog Post', 'post', 'Gaia Rendering'),
    'add_new' => _x('Add New Post', 'post', 'Gaia Rendering'),
    'add_new_item' => __('Add New Post', 'Gaia Rendering'),
    'edit_item' => __('Edit Post', 'Gaia Rendering'),
    'new_item' => __('New Post', 'Gaia Rendering'),
    'all_items' => __('All Posts', 'Gaia Rendering'),
    'view_item' => __('View Post', 'Gaia Rendering'),
    'search_items' => __('Search Posts', 'Gaia Rendering'),
    'not_found' =>  __('No Posts Found', 'Gaia Rendering'),
    'not_found_in_trash' => __('No Posts found in Trash', 'Gaia Rendering'), 
    'parent_item_colon' => '',
    'menu_name' => __('Gaia FTB Blog', 'Gaia Rendering')

    );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => true,
    'query_var' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    );
  register_post_type( 'gaiaftb' , $args );
  ?>