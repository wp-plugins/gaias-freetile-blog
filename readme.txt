=== Gaia Freetile Blog ===
Contributors: dan-gaia
Donate link: http://gaiarendering.com/buy-me-a-beer/
Tags: freetile.js, freetile blog, custom post type, magazine layout, filterable, filter, photowall, photo wall
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 0.1.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gaia FTB creates a CPT to display the posts using freetile.js and can random sets the width  to either x, 2x, or 3x. Options must be saved upon install.

== Description ==

[Frontend Live Demo](http://gaiarendering.com/my-work/plugins/gaia-freetile/ "Frontend Live Demo")

Gaia Rendering's FTB Blog is intended for a developer to impliment as it requires additions and changes to theme files

Please read the Read Me file

Gaia FTB (Freetile Blog) Blog creates a custom post type that can be filtered by custom taxonomy (dynamically updated) and CAN randomly set the post width to either X, X*2, or X*3.  It also uses the default WP featured image if present.

You can also use the default WordPress posts if you don't want to use the CPT included.

Turning off 'show title' and 'show excerpt' essentally turn Gaia FTB blog into an image wall that randomly CAN set the width of the images.

Note: your must set the 'Use default Posts or the Gaia Free Tile CPT?' options to the correct setting if you are using either the php or the shortcode method of displaying the output.


== Installation ==

By Wordpress Backend:

1. Search for 'Gaia Freetile Blog.'
1. Click 'Install' from the plugs-in search page.
1. Click 'Activate' from the plug-in page.
1. Goto Gaia FTB Blog > Options and set column width, margin, padding, and border.
1. column width should be approximately 1/9th the width of your containing div
1. **options must be saved upon install for the plugin to act correctly**
1. Place code into your theme files (see below). Refer to the 'examples' directory of the plugin files for code to insert into your theme files.
1. populate content.
1. Have fun!

By FTP:

1. Upload to wp-content/plugins
1. Continue from step 3 above

Short Codes:

* [gaia_ftb_random] - uses CPT and randomizes the sizes of the post containers
* [gaia_ftb_not_random] - uses CPT but does not randomize sizes of post containers
* [gaia_ftb_random_default] - uses WP default posts and randomizes the size of the post container
* [gaia_ftb_not_random_default] - uses WP default posts but does not randomize the size of the post container

Call back function (place this on the page template you want Gaia FTB Blog to show up, full width / no sidebar is recommended):
`<?php if(function_exists('gaia_ftb_random')) { gaia_ftb_random(); } //this displays the posts ?>`



List taxonomy code:
`<?php //this displays the categories
echo '<ul class="gaia-ftb-filter">';
echo '<li class="all"><a href="#">all</a></li>';
$taxonomyName = "gaia_ftb_categories";
$terms = get_terms($taxonomyName,array('parent' => 0));
foreach($terms as $term) {
    echo '<li><a href="javascript:void(0)" id="'.  $term->slug .'">' . $term->name . '</a></li>';
    }
echo '</ul>';
?>`

== Frequently Asked Questions ==

= Can this be used as a Photo Wall =

Yes, just set the border to 0 and adjust settings the hide title and excerpt

== Screenshots ==

1. The options page

== Changelog ==

= 0.1 =

* 6-28-13
* inital upload

= 0.1.1 =

* 6-28-14
* Updated readme

= 0.1.2 =

* Fixed multiplier for fiexed width output

= 0.1.3 =

* Sterilized user settings to allow for the use of 'px'
* Cleaned up php to removed un-needed warning
* Updated admin page with known settings and css
