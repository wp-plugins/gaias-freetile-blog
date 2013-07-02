<script type="text/javascript">
(function() {
  var $ = jQuery;
  $(window).load(function() {
    $('.gaiaftb').freetile({
                               // options
                               selector : '.m_item',
                             });
  });
})();
(function () {
 var $ = jQuery;
 $(window).load(function() {
   $('li.all').on('click', (function() {
    $('.m_item').fadeIn();
    $('ul.gaiaftb').freetile({
     animate: true,
     selector: '.m_item',
     elementDelay: 10
   });
  })
   );
 });
 $(document).ready(function() {
  var ul_mas_w = $('ul.gaia-ftb-filter').width() + 3;
  $('ul.gaia-ftb-filter').css({
   'width': ul_mas_w,
   'margin': '0 auto',
   'float': 'none',
   'height': 'auto'
 });
  $('ul.gaia-ftb-filter li.all a:link').css('color', '#f5a41d');
  $('ul.gaia-ftb-filter li a:link').on('click', (function(){
    $('ul.gaia-ftb-filter li a:link').css('color', '');
    $(this).css('color', '#f5a41d');
  })
  );
});
})();
</script>
<?php
$terms = get_terms('gaia_ftb_categories');
$count = count($terms);
$i=0;
if ($count > 0) {
  foreach ($terms  as $term) { ?>
  <script type="text/javascript">
  (function() {
    var $ = jQuery;
    $(window).load(function() {
      $('#<?php echo $term->slug; ?>').on('click', (function() {
        $('.m_item').hide();
        $('.<?php echo $term->slug; ?>').show();
        $('ul.gaiaftb').freetile({
         animate: true,
         selector: '.<?php echo $term->slug; ?>',
         elementDelay: 50,
         containerAnimate: true
       });
      })
      );
    });
  })();
  </script>
  <?php }
}
?>