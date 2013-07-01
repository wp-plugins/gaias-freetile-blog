<?php
//Template Name: Blog
get_header(); ?>

<div id="content">
<?php //this code spitts out the categories
echo '<ul class="gaia-ftb-filter">';
echo '<li class="all"><a href="#">all</a></li>';
$taxonomyName = "gaia_ftb_categories";
$terms = get_terms($taxonomyName,array('parent' => 0));
foreach($terms as $term) {
    echo '<li><a href="javascript:void(0)" id="'.  $term->slug .'">' . $term->name . '</a></li>';
    }
echo '</ul>';
?>
<?php
//this code spitts out the actual Gaia FTB Blog posts content
if(function_exists('gaia_ftb_output')) { gaia_ftb_output(); } ?>
</div><!--end content-->
<?php get_footer(); ?>