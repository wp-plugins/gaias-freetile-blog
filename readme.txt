=== Gaia Freetile Blog ===
Contributors: dan-gaia
Donate link: http://gaiarendering.com/buy-me-a-beer/
Tags: freetile.js, freetile blog, custom post type, magazine layout, filterable, filter, photowall, photo wall
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 0.1.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gaia FTB creates a CPT to display the posts using freetile.js and random sets the width  to either x, 2x, or 3x. Options must be saved upon install.

== Description ==

**Gaia Rendering's FTB Blog is intended for a developer to impliment as it requires additions and changes to theme files.**
*Please read the Read Me file*

Gaia FTB (Freetile Blog) Blog creates a custom post type that can be filtered by custom taxonomy (dynamically updated) and randomly sets the post width to either X, X*2, or X*3.  It also uses the default WP featured image if present.
This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

Turning off 'show title' and 'show excerpt' essentally turn Gaia FTB blog into an image wall that randomly sets the width of the images.


== Installation ==

By Wordpress Backend:
1. Search for 'Gaia Freetile Blog.'
2. Click 'Install' from the plugs-in search page.
3. Click 'Activate' from the plug-in page.
4. Goto Gaia FTB Blog > Options and set column width, margin, padding, and border.
	4.1 column width should be approximately 1/9th the width of your containing div
	4.2 **options must be saved upon install for the plugin to act correctly**
5. Place code into your theme files (see below). Refer to the 'examples' directory of the plugin files for code to insert into your theme files.
6. populate content.
7. Have fun!

By FTP:
1. Upload to wp-content/plugins
2. Continue from step 3 above

Short Codes:
[gaia_ftb_random] - uses CPT and randomizes the sizes of the post containers
[gaia_ftb_not_random] - uses CPT but does not randomize sizes of post containers
[gaia_ftb_random_default] - uses WP default posts and randomizes the size of the post container
[gaia_ftb_not_random_default] - uses WP default posts but does not randomize the size of the post container

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

= A question that someone might have =

An answer to that question.

= Why? =

Why not.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 0.1 =
* 6-28-13
* inital upload

= 0.1.1 =
* 6-28-14
* Updated readme
