<?php
function mrgpd_top($vals = ''){
	if( !empty($vals) ){
	  $filter_vals = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $vals)));
	  $vexc = !empty($vals)?explode(' ', $filter_vals):'';
	  $vtop = isset($vexc[0]) && !empty($vexc[0])?$vexc[0]:'';
	  return $vtop; 
	}
	return '';
  }
 
  function mrgpd_btm($vals = ''){
	if( !empty($vals) ){
	  $filter_vals = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $vals)));
	  $vexc = !empty($vals)?explode(' ', $filter_vals):'';
	  $vbtm = '';
	  if( isset($vexc[1]) && !empty($vexc[1]) ) {
		$vbtm = $vexc[1];
	  }elseif( isset($vexc[0]) && !empty($vexc[0]) ){
		$vbtm = $vexc[0];
	  } 
	  return $vbtm;
	}
	return '';
  }


  function hex_to_rgb($hex) {
    $hex = str_replace("#", "", $hex);
    if (strlen($hex) == 3) {
        $r = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
        $g = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
        $b = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
    } else {
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
    }
    return "$r, $g, $b";
}