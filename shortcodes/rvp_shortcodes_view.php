<?php
/**
 * @package
 *
 */
 add_shortcode('rvp_show', function($atts){
		if ( !isset($rvp_view_object) ){
				$rvp_view_object = new rvp_view_list;
		}
    if(!$atts){
        return $rvp_view_object->rvp_view_shortcode();
    } else{
      $a = shortcode_atts( array(
        'no_products' => '3',
        'slider_use' => 'true',
      ), $atts );
      return $rvp_view_object->rvp_view_single_short($a['no_products'],$a['slider_use']);
    }

});
