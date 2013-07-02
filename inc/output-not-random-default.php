<?php
/* some (probably most) code from:
http://wp.tutsplus.com/tutorials/theme-development/create-a-quicksand-portfolio-with-wordpress/
*/
echo '<ul class="gaia-ftb-filter">';
echo '<li class="all"><a href="javascript:void(0)" class="ftb-style">all</a></li>';
$taxonomyName = "category";
$terms = get_terms($taxonomyName);
foreach($terms as $term) {
  echo '<li><a class="ftb-style" href="javascript:void(0)" id="'.  $term->slug .'">' . $term->name . '</a></li>';
}
echo '</ul>';
wp_reset_query(); ?>
<ul class="clearfix gaiaftb" style="height:auto;">
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
    ); ?>
  <?php $ftbloop = new WP_Query( $args );
  while ( $ftbloop->have_posts() ) : $ftbloop->the_post();
  //random height php
  $gaia_options = get_option('gaia_ftb_options');
  $gaiaftb_borders = str_replace('px', '', $gaia_options['borders']) * 2;
  $gaia_ftb_t_width = str_replace('px', '', $gaia_options['width']);
  $gaia_ftb_margins = str_replace('px', '', $gaia_options['margin'])*2;
  $gaia_ftb_padding = str_replace('px', '', $gaia_options['padding']*2);
  if (has_post_thumbnail()) {
    $gaia_static_width = ((($gaia_ftb_t_width+$gaia_ftb_margins+$gaia_ftb_padding+$gaiaftb_borders) * $gaia_options['multiplier'])-$gaia_ftb_padding-$gaia_ftb_margins);
  } else {
    $gaia_static_width = $gaia_ftb_t_width;
  };
  ?>
  <!--end random height-->
  <!-- lets get the terms-->
  <?php $terms = get_the_terms(  get_the_ID(), 'category' ); ?>
  <li class="m_item id-<?php the_ID(); ?> <?php foreach ($terms as $term) { echo $term->slug . ' '; } ?>" style="width:<?php echo $gaia_static_width .'px'; ?>;">
   <?php if($gaia_options['title'] === 'yes') { ?>
   <h1 style="width:90%; margin:0 auto;" class="title">
     <a href="<?php the_permalink(); ?>">
       <?php the_title(); ?>
     </a>
   </h3>
   <?php } ?>
   <?php if(has_post_thumbnail()) { ?>
   <?php
   $gaia_attr = array(
    'class' => "gaia-freetile",
    );
    ?>
    <div class="gaia-sqm-post-thumb" style="text-align:center;">
     <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium', $gaia_attr); ?>
    </a>
  </div>
  <?php }  ?>
  <?php if($gaia_options['excerpt'] === 'yes') { ?>
  <div class="excerpt<?php the_ID(); ?>" style="width:90%; margin:0 auto;">
   <?php $content = get_the_content();
   ?>
   <?php the_excerpt(); ?>
 </div>
 <?php } ?>
</li>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</ul>
<script type="text/javascript">
(function(){
  var $ = jQuery;
  $('img.gaia-freetile').css({
    'width': '90%',
    'margin': '10px 0 0'
  }).removeAttr('height');
})();
</script>