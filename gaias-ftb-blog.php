<?php
/*
Plugin Name: Gaia Rendering Freetile Blog
Plugin URI: http://gaiarendering.com
Description: Creates a custom post type which is displayed using the jquery freetile.js plugin 'if (if function exists('gaia_ftb_output') { gaia_ftb_output(); };'. You can also use the [gaia_ftb_random] ro [gaia_ftb_not_random] short codes in you pages or posts, this will over-ride the 'Randomize Post Container Size'.  It is strongly recommend that you use a full width (no sidebar) page template for this plugin's output.
Author: Dan Beil
Version: 0.1.2
Author URI: http://gaiarendering.com

A special thanks to Blindspot Advisors (http://www.blindspot-advisors.com) for helping with development and W Creative (http://www.wcreative-mpls.com) for being my Guinea Pig.

*/
function register_styles_gaia_ftb () {
  wp_enqueue_style('gaia_ftb_styles', '/wp-content/plugins/gaias-freetile-blog/css/gaia-ftb-css.css', '', '', '');
}
add_action('init', 'register_styles_gaia_ftb');

function gaia_ftb_scripts() {
  wp_enqueue_script('gaia_ftb_enqueue_freetile', '/wp-content/plugins/gaias-freetile-blog/js/freetile.js', array('jquery'), '', '');
}

add_action('wp_enqueue_scripts', 'gaia_ftb_scripts');

//Create the post type
add_action('init', 'gaia_ftb_blog_post');

function gaia_ftb_blog_post() {
  include ('inc/gaia-ftb-cpt.php');
}
?>
<?php
// lets create a taxonomy for our post type
add_action( 'init', 'gaia_ftb_tax', 0 );
function gaia_ftb_tax() {
	include ('inc/gaia-ftb-taxonomy.php');
} // end gaia_ftb_tax registration
?>
<?php
//http://www.billrobbinsdesign.com/custom-post-type-admin-page/
add_action('admin_menu' , 'gaia_ftb_options'); 

function gaia_ftb_options() {
  add_submenu_page('edit.php?post_type=gaiaftb', 'Gaia Freetile Blog Options', 'Gaia Freetile Blog Options', 'edit_posts', basename(__FILE__), 'gaia_ftb_function');
}
// the Gaia FTB Blog options page
function gaia_ftb_function() {
  include ('inc/gaia-ftb-options.php');
}
?>
<?php
//http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
add_action('admin_init', 'gaia_ftb_init' );
function gaia_ftb_init(){
	register_setting( 'gaia_ftb_options', 'gaia_ftb_options' );
}

add_action('wp_head', 'gaia_ftb_head');
function gaia_ftb_head() {
  include ('inc/gaia-ftb-head.php');
}

$gaia_options = get_option('gaia_ftb_options');
if ($gaia_options['post'] === 'default') {
  add_action('wp_footer', 'gaia_ftb_foot');
  function gaia_ftb_foot() {
    include ('inc/gaia-ftb-foot-default.php');
  }
} else {
  add_action('wp_footer', 'gaia_ftb_foot');
  function gaia_ftb_foot() {
    include ('inc/gaia-ftb-foot.php');
  }
};


//the output, i.e. this pumps out the code for the frontend of your site.
$gaia_options = get_option('gaia_ftb_options');
if ($gaia_options['random'] === 'yes') {
  function gaia_ftb_output() {
    include ('inc/output-random.php') ;
  };
} else {
  function gaia_ftb_output() {
    include ('inc/output-not-random.php') ;
  };
};

function gaia_ftb_random() {
  ob_start();
  include ('inc/output-random.php');
  $output_string_random = ob_get_contents();
  ob_end_clean();
  return $output_string_random;
};

add_shortcode('gaia_ftb_random', 'gaia_ftb_random');

function gaia_ftb_random_default() {
  ob_start();
  include ('inc/output-random-default.php');
  $output_string_not_random = ob_get_contents();
  ob_end_clean();
  return $output_string_not_random;
};

add_shortcode('gaia_ftb_random_default', 'gaia_ftb_random_default');

function gaia_ftb_not_random() {
  ob_start();
  include ('inc/output-not-random.php');
  $output_string_not_random = ob_get_contents();
  ob_end_clean();
  return $output_string_not_random;
};

add_shortcode('gaia_ftb_not_random', 'gaia_ftb_not_random');

function gaia_ftb_not_random_default() {
  ob_start();
  include ('inc/output-not-random-default.php');
  $output_string_not_random = ob_get_contents();
  ob_end_clean();
  return $output_string_not_random;
};

add_shortcode('gaia_ftb_not_random_default', 'gaia_ftb_not_random_default');
//Code Like No-one's watching?>