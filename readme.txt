=== Gaia Freetile Blog ===
Contributors: dan-gaia
Donate link: http://gaiarendering.com/buy-me-a-beer/
Tags: freetile.js, freetile blog, custom post type, magazine layout, filterable, filter, photowall, photo wall
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 0.1
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



Call back function (place this on the page template you want Gaia FTB Blog to show up, full width / no sidebar is recommended):
`<?php if(function_exists('gaia_ftb_output')) { gaia_ftb_output(); } //this displays the posts ?>`



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

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`