<?php

/**
 * Returns an array of luminance variants of $base_color
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
 function an_colorsplosion($base_color) {
	$RGB = array(
		"R" => hexdec(substr($base_color, 1, 2)),
		"G" => hexdec(substr($base_color, 3, 2)),
		"B" => hexdec(substr($base_color, 5, 2))
	);
	$color_array = array();
	$luminance = an_luminance($base_color);
	for($i=1; $i<=100; $i++){
		$color_array['darker'][$i] = "#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, ($i/100))));
		$color_array['lighter'][$i] = "#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, (-($i/100)))));
		if($luminance > 50) {
			$color_array['high_contrast'][$i] = "#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, (($i+(100-$luminance))/(100+(100-$luminance))))));
			$color_array['low_contrast'][$i] = "#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, (-(($i+(100-$luminance))/(100+(100-$luminance)))))));
		} else {
			$color_array['low_contrast'][$i] = "#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, (($i+$luminance)/(100+$luminance)))));
			$color_array['high_contrast'][$i] = "#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, (-(($i+$luminance)/(100+$luminance))))));
		}
	}
	return $color_array;
}

/**
 * Shifts the luminance of a single color by $shift in the direction $direction
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
function shift_luminance($color, $shift, $direction="high_contrast") {
	$RGB = array(
		"R" => hexdec(substr($color, 1, 2)),
		"G" => hexdec(substr($color, 3, 2)),
		"B" => hexdec(substr($color, 5, 2))
	);
	$luminance = an_luminance($color);
	switch($direction){
		case "lighter":
			return ("#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, -($shift/100)))));
			break;
		case "darker":
			return ("#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, ($shift/100)))));
			break;
		case "high_contrast":
			if($luminance < 50){
				return ("#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, -($shift/100)))));
			} else {
				return ("#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, ($shift/100)))));
			}
			break;
		case "low_contrast":
			if($luminance < 50){
				return ("#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, ($shift/100)))));
			} else {
				return ("#" . an_array2color(an_dec2hex(an_shift_luminance($RGB, -($shift/100)))));
			}
			break;
	}
	
}

/**
 * Calculates luminance of a color.
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
 function an_luminance($color) {
	$RGB = array(
		"R" => hexdec(substr($color, 1, 2)),
		"G" => hexdec(substr($color, 3, 2)),
		"B" => hexdec(substr($color, 5, 2))
	);
	$luminance = ((.299 * $RGB["R"]) + (.587 * $RGB["G"]) + (.114 * $RGB["B"])) / 2.55;
	return $luminance;
 }
 
 
/**
 * Shifts the luminance of a color towards black or white by the given factor.
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
function an_shift_luminance($RGB, $shift){
	if($shift < 0){
		foreach($RGB as $key => $val){
			$RGB[$key] = round($val - ((255 - $val) * $shift));
		}
		return $RGB;
	} else {
		foreach($RGB as $key => $val){
			$RGB[$key] = round($val * (1 - $shift));
		}
		return $RGB;
	}
}

/**
 * Converts a decimal RGB array to a hex array.
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
function an_dec2hex($RGB){
	foreach($RGB as $key => $val){
		$RGB[$key] = dechex($RGB[$key]);
		if(strlen($RGB[$key])==1){
			$RGB[$key] = '0' . $RGB[$key];
		}
	}
	return $RGB;
}

/**
 * Converts a hex RGB array to a web color.
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
function an_array2color ($RGB) {
	return ($RGB['R'] . $RGB['G'] . $RGB['B']);
}
 
 ?>