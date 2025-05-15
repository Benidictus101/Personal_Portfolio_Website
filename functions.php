<?php


function mytheme_enqueue_assets() {
  // CSS
  wp_enqueue_style(
    'mytheme-common', 
    get_template_directory_uri() . '/assets/css/common.css'
  );
  wp_enqueue_style(
    'mytheme-global', 
    get_template_directory_uri() . '/assets/css/global.css'
  );
  wp_enqueue_style(
    'mytheme-top', 
    get_template_directory_uri() . '/assets/css/top.css'
  );

  wp_enqueue_script(
    'mytheme-common-js', 
    get_template_directory_uri() . '/assets/js/common.js', 
    array(), 
    null, 
    true
  );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );


// create a page

add_action('init', 'add_customer_pages');
function add_customer_pages()
{
    $pages = array(
        array(
            'post_title' => 'Home',
            'post_content' => 'Home',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'home'
        ),
        array(
          'post_title' => 'Work',
          'post_content' => 'Work',
          'post_status' => 'publish',
          'post_author' => 1,
          'post_type' => 'page',
          'post_name' => 'work'
      ),
    
        array(
            'post_title' => 'Contact',
            'post_content' => 'Contact',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'contact'
        ),
        array(
            'post_title' => 'About',
            'post_content' => 'About',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'about'
        ),
        array(
            'post_title' => 'Blog',
            'post_content' => 'Blog',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'blog'
        ),

    );

    foreach ($pages as $page) {
        $existing_page = get_page_by_path($page['post_name']);
        if (is_null($existing_page)) {
            wp_insert_post($page);
        }
    }
    $homepage = get_page_by_path('home');
    update_option('page_on_front', $homepage->ID);
    update_option('show_on_front', 'page');



}

function mytheme_gutenberg_setup() {
 
  add_theme_support( 'global' );
  add_editor_style( 'assets/css/global.css' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'align-wide' );
  add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'mytheme_gutenberg_setup' );

function mytheme_gutenberg_editor_assets() {
  wp_enqueue_style(
    'mytheme-editor-css',
    get_template_directory_uri() . '/assets/css/global.css',
    array(),
    '1.0'
  );
}
add_action( 'enqueue_block_editor_assets', 'mytheme_gutenberg_editor_assets' );
