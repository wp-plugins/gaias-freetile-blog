<?php
register_taxonomy(
		__( "gaia_ftb_categories" ),
		array(__( "gaiaftb" )),
		array(
			"hierarchical" => true,
			"label" => __( "Categories" ),
			"singular_label" => __( "Category" ),
			"rewrite" => array(
				'slug' => 'gaia_ftb_categories',
				'hierarchical' => true
       )
      )
   );
   ?>