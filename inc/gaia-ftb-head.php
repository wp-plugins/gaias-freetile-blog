<?php $gaia_options = get_option('gaia_ftb_options');
$gaia_m = $gaia_options['margin'];
$gaia_w = $gaia_options['padding'];
$gaia_b = $gaia_options['borders'];
?>
<style type="text/css">
ul.gaia-ftb-filter {
	float:left;
	list-style-type:none;
	height:1%;
	overflow:hidden;
	text-transform:uppercase;
}
ul.gaia-ftb-filter li {
	float:left;
	padding:5px 0 5px 10px;
}
ul.gaia-ftb-filter li:first-child {
	padding-left:0px;
}
.gaia-sqm-post-thumb {
  margin-top: 5px;
}
.m_item .title {
	text-align:center;
}
ul.gaiaftb {
	width:auto;
	list-style-type:none;
	min-height:500px;
	position:relative;
	margin:10px auto 0;
}
ul.gaiaftb li {
	float:left;
	margin: <?php echo $gaia_m .'px'; ?>;
	padding: <?php echo $gaia_w .'px'; ?>;
	border: <?php echo $gaia_b .'px'; ?> solid #e58c0b;
}
</style>