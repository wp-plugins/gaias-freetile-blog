  <div class="wrap">        
  <h2>Gaia Freetile Blog Options</h2>
  <h3 class="gaia-known">Click here to toggle more info and known settings</h3>
  <div class="gaia-known">
    <p>Here are some know settings that typically look pretty good for a site that is 960px wide</p>
    <p>Gaias Freetile Blog recommends using a full width page template with no sidebar</p>
    <ul class="gaia-known">
      <li>Narrowest Column Width: 170px</li>
      <li>Margins (left side): 5px</li>
      <li>Padding (left side): 5px</li>
      <li>Border: 1px</li>
      <li>Multiplier:
        <ul>
          <li>Non-random widths: 2</li>
          <li>Random widths: 20</li>
        </ul>
      </ul>
      <p>Here are your shortcodes</p>
      <ul class="gaia-known">
        <li>[gaia_ftb_random] - uses CPT and randomizes the sizes of the post containers</li>
        <li>[gaia_ftb_not_random] - uses CPT but does not randomize sizes of post containers</li>
        <li>[gaia_ftb_random_default] - uses WP default posts and randomizes the size of the post container</li>
        <li>[gaia_ftb_not_random_default] - uses WP default posts but does not randomize the size of the post container</li>
      </ul>
    </div>
    <form method="post" action="options.php">
      <?php settings_fields('gaia_ftb_options'); ?>
      <?php $gaia_options = get_option('gaia_ftb_options'); ?>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Randomize Post Container Size?</th>
          <td>
            <select name="gaia_ftb_options[random]">
              <option <?php if ($gaia_options['random'] === 'no') echo 'selected="selected"'; ?> value="no">No</option>
              <option <?php if ($gaia_options['random'] === 'yes') echo 'selected="selected"'; ?> value="yes">Yes</option>
            </select>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Use default Posts or the Gaia Free Tile CPT?</th>
          <td>
            <select name="gaia_ftb_options[post]">
              <option <?php if ($gaia_options['post'] === 'default') echo 'selected="selected"'; ?> value="default">Use Default Posts</option>
              <option <?php if ($gaia_options['post'] === 'cpt') echo 'selected="selected"'; ?> value="cpt">Use CPT</option>
            </select>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Narrowest Column Width</th>
          <td><input type="text" name="gaia_ftb_options[width]" value="<?php echo $gaia_options['width']; ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Margins (left side)</th>
          <td><input type="text" name="gaia_ftb_options[margin]" value="<?php echo $gaia_options['margin']; ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Padding (left side)</th>
          <td><input type="text" name="gaia_ftb_options[padding]" value="<?php echo $gaia_options['padding']; ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Border width (for border:1px solid #000; enter '1')</th>
          <td><input type="text" name="gaia_ftb_options[borders]" value="<?php echo $gaia_options['borders']; ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Multiplier: if random post size: <br />adjust this slightly if you are having layout problems with any 3 column posts. It is a pixel value that adds to the 3 column width (20 = 20px)<br /><br />If not random post size:<br /> this number acts as a multipler to the 'Narrowest Column Width' to account for those posts with a featured image.</th>
          <td><input type="text" name="gaia_ftb_options[multiplier]" value="<?php if (!empty($gaia_options['multiplier'])) { echo $gaia_options['multiplier']; } else { echo '20'; } ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Show Title?</th>
          <td>
            <select name="gaia_ftb_options[title]">
             <option <?php if ($gaia_options['title'] === 'yes') echo 'selected="selected"'; ?> value="yes">Yes</option>
             <option <?php if ($gaia_options['title'] === 'no') echo 'selected="selected"'; ?> value="no">No</option>
           </select>
         </td>
       </tr>
       <tr valign="top">
        <th scope="row">Show Excerpt?</th>
        <td>
          <select name="gaia_ftb_options[excerpt]">
           <option <?php if ($gaia_options['excerpt'] === 'yes') echo 'selected="selected"'; ?> value="yes">Yes</option>
           <option <?php if ($gaia_options['excerpt'] === 'no') echo 'selected="selected"'; ?> value="no">No, Use only the featured image</option>
         </select>
       </td>
     </tr>
     <!-- <tr valign="top">
      <th scope="row">What page are you using Gaia FTB Blog on? - not currenlt being used for anything</th>
      <td><?php
      $gaia_page_selected = $gaia_options['page'];
      $args = array(
       'echo' => true,
       'selected' => $gaia_page_selected,
       'name'  => 'gaia_ftb_options[page]');
       wp_dropdown_pages($args);  ?>
     </td>
   </tr> -->
 </table>
 <p class="submit">            
  <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>
<?php
// $gaia_options = get_option('gaia_ftb_options');
// echo 'post ' . $gaia_options['post'] . '</br>';
// echo 'width ' . $gaia_options['width'] . '</br>';
// echo 'margin ' . $gaia_options['margin'] . '</br>';
// echo 'padding ' . $gaia_options['padding'] . '</br>';
// echo 'borders ' . $gaia_options['borders'] . '</br>';
// echo 'title ' . $gaia_options['title'] . '</br>';
// echo 'excerpt ' . $gaia_options['excerpt'] . '</br>';
// echo 'page ' . $gaia_options['page'] . '</br>';
?>
</div>