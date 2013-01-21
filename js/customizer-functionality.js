( function( $ ) {
	
	/*
	 *  Show/Hide Color Schemes and Custom Color Options
	 */
	 var custom_sections = new Array(
		'an-basic-colors',
		'an-advanced-colors-menu',
		'an-advanced-colors-body',
		'an-advanced-colors-breadcrumb',
		'an-advanced-colors-footer-1',
		'an-advanced-colors-footer-2',
		'an-advanced-colors-footer-3'
	 );
	 if($("[name='_customize-radio-color_mode']").attr("checked") == "checked"){
		hide_stuff('hide', custom_sections, 'section');
	 }
	 $("[name='_customize-radio-color_mode']").on("change", function(event){
		if ($("[name='_customize-radio-color_mode']").attr("checked") == "checked"){
			hide_stuff('hide', custom_sections, 'section');
		} else {
			hide_stuff('show', custom_sections, 'section');
		}
	 });
	 
	
	/*
	 *  Show/Hide Advanced Menu Color controls
	 */
	var navigation_controls = new Array(
		'navigation_gradient_start',
		'navigation_gradient_end',
		'navigation_drop',
		'navigation_text',
		'navigation_text_hover'
	);
	if($("[data-customize-setting-link='navigation_color_advanced']").attr('checked') != 'checked') {
		hide_stuff('hide', navigation_controls, "control");
	};
	$("[data-customize-setting-link='navigation_color_advanced']").on("change", function(event){
		if($("[data-customize-setting-link='navigation_color_advanced']").attr('checked') == 'checked'){
			var navigation_colors = new Array(
				shift_luminance($("#customize-control-navigation_color .color-picker-hex").wpColorPicker("color"),30,'lighter'),
				$("#customize-control-navigation_color .color-picker-hex").wpColorPicker("color"),
				shift_luminance($("#customize-control-navigation_color .color-picker-hex").wpColorPicker("color"),15,'darker'),
				shift_luminance($("#customize-control-navigation_color .color-picker-hex").wpColorPicker("color"),55,'high_contrast'),
				shift_luminance($("#customize-control-navigation_color .color-picker-hex").wpColorPicker("color"),95,'high_contrast')
			);
			hide_stuff('show', navigation_controls, "control");
			change_colors(navigation_controls,navigation_colors);
		} else {
			hide_stuff('hide', navigation_controls, "control");
		}
	});
	
	/*
	 *  Show/Hide Advanced Body Color controls
	 */
	var body_controls = new Array(
		'body_background_color',
		'body_text_color',
		'body_link_advanced_color',
		'body_headline_1_color',
		'body_headline_2_color',
		'body_table_header_color',
		'body_table_alternating_color',
		'body_search_background_color',
		'body_search_button_color',
		'body_line_color'
	);
	if($("[data-customize-setting-link='body_color_advanced']").attr('checked') != 'checked') {
		hide_stuff('hide', body_controls, "control");
	};
	$("[data-customize-setting-link='body_color_advanced']").on("change", function(event){
		if($("[data-customize-setting-link='body_color_advanced']").attr('checked') == 'checked'){
			var body_colors = new Array(
				$("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),50,'high_contrast'),
				$("#customize-control-body_link_color .color-picker-hex").wpColorPicker("color"),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),45,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),50,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),45,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),10,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),10,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),20,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),20,'high_contrast')
			);
			hide_stuff('show', body_controls, "control");
			change_colors(body_controls,body_colors);
		} else {
			hide_stuff('hide', body_controls, "control");
		}
	});
	
	/*
	 *  Show/Hide Advanced Secondary Menu / Breadcrumbs Color controls
	 */
	var breadcrumb_controls = new Array(
		'breadcrumb_text_color',
		'breadcrumb_trail_color',
		'breadcrumb_line_color',
		'breadcrumb_highlight_color'
	);
	if($("[data-customize-setting-link='breadcrumb_color_advanced']").attr('checked') != 'checked') {
		hide_stuff('hide', breadcrumb_controls, "control");
	};
	$("[data-customize-setting-link='breadcrumb_color_advanced']").on("change", function(event){
		if($("[data-customize-setting-link='breadcrumb_color_advanced']").attr('checked') == 'checked'){
			var breadcrumb_colors = new Array(
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),45,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),20,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),20,'high_contrast'),
				shift_luminance($("#customize-control-body_color .color-picker-hex").wpColorPicker("color"),5,'high_contrast')
			);
			hide_stuff('show', breadcrumb_controls, "control");
			change_colors(breadcrumb_controls,breadcrumb_colors);
		} else {
			hide_stuff('hide', breadcrumb_controls, "control");
		}
	});
	
	/*
	 *  Show/Hide Advanced Footer 1 Color controls
	 */
	var footer_1_controls = new Array(
		'footer_1_background_color',
		'footer_1_text_color',
		'footer_1_headline_color',
		'footer_1_advanced_link_color'
	);
	if($("[data-customize-setting-link='footer_1_color_advanced']").attr('checked') != 'checked') {
		hide_stuff('hide', footer_1_controls, "control");
	};
	$("[data-customize-setting-link='footer_1_color_advanced']").on("change", function(event){
		if($("[data-customize-setting-link='footer_1_color_advanced']").attr('checked') == 'checked'){
			var footer_1_colors = new Array(
				$("#customize-control-footer_1_color .color-picker-hex").wpColorPicker("color"),
				shift_luminance($("#customize-control-footer_1_color .color-picker-hex").wpColorPicker("color"),35,'high_contrast'),
				shift_luminance($("#customize-control-footer_1_color .color-picker-hex").wpColorPicker("color"),45,'high_contrast'),
				$("#customize-control-footer_1_link_color .color-picker-hex").wpColorPicker("color")
			);
			hide_stuff('show', footer_1_controls, "control");
			change_colors(footer_1_controls,footer_1_colors);
		} else {
			hide_stuff('hide', footer_1_controls, "control");
		}
	});
	
	/*
	 *  Show/Hide Advanced Footer 2 Color controls
	 */
	var footer_2_controls = new Array(
		'footer_2_background_color',
		'footer_2_text_color',
		'footer_2_headline_color',
		'footer_2_advanced_link_color'
	);
	if($("[data-customize-setting-link='footer_2_color_advanced']").attr('checked') != 'checked') {
		hide_stuff('hide', footer_2_controls, "control");
	};
	$("[data-customize-setting-link='footer_2_color_advanced']").on("change", function(event){
		if($("[data-customize-setting-link='footer_2_color_advanced']").attr('checked') == 'checked'){
			var footer_2_colors = new Array(
				$("#customize-control-footer_2_color .color-picker-hex").wpColorPicker("color"),
				shift_luminance($("#customize-control-footer_2_color .color-picker-hex").wpColorPicker("color"),35,'high_contrast'),
				shift_luminance($("#customize-control-footer_2_color .color-picker-hex").wpColorPicker("color"),45,'high_contrast'),
				$("#customize-control-footer_2_link_color .color-picker-hex").wpColorPicker("color")
			);
			hide_stuff('show', footer_2_controls, "control");
			change_colors(footer_2_controls,footer_2_colors);
		} else {
			hide_stuff('hide', footer_2_controls, "control");
		}
	});
	
	/*
	 *  Show/Hide Advanced Footer 3 Color controls
	 */
	var footer_3_controls = new Array(
		'footer_3_background_color',
		'footer_3_text_color',
		'footer_3_headline_color',
		'footer_3_advanced_link_color'
	);
	if($("[data-customize-setting-link='footer_3_color_advanced']").attr('checked') != 'checked') {
		hide_stuff('hide', footer_3_controls, "control");
	};
	$("[data-customize-setting-link='footer_3_color_advanced']").on("change", function(event){
		if($("[data-customize-setting-link='footer_3_color_advanced']").attr('checked') == 'checked'){
			var footer_3_colors = new Array(
				$("#customize-control-footer_3_color .color-picker-hex").wpColorPicker("color"),
				shift_luminance($("#customize-control-footer_3_color .color-picker-hex").wpColorPicker("color"),35,'high_contrast'),
				shift_luminance($("#customize-control-footer_3_color .color-picker-hex").wpColorPicker("color"),45,'high_contrast'),
				$("#customize-control-footer_3_link_color .color-picker-hex").wpColorPicker("color")
			);
			hide_stuff('show', footer_3_controls, "control");
			change_colors(footer_3_controls,footer_3_colors);
		} else {
			hide_stuff('hide', footer_3_controls, "control");
		}
	});
	
	/*
	 *  Function to show or hide an array of controls
	 */
	function hide_stuff (sh, elements, cs) {
		for(i=0; i<elements.length; i++) {
			if(sh == "show") {
				$("#customize-" + cs + "-" + elements[i]).show();
			} else {
				$("#customize-" + cs + "-" + elements[i]).hide();
			}
		}
	}
	
	/*
	 *  Function to change the advanced colors to match
	 *  the basic calculated custom colors
	 */
	 function change_colors(elements, colors){
		for(i=0; i<elements.length; i++){
			$("#customize-control-" + elements[i] + " .color-picker-hex").wpColorPicker("color", colors[i]);
		}
	 }
	 
	 /*
	  *  Shift the luminance of a color
	  */
	 function shift_luminance (color, shift, direction) {
		var RGB = new Array(
			parseInt(color.substring(1,3), 16),
			parseInt(color.substring(3,5), 16),
			parseInt(color.substring(5,7), 16)
		);
		var lum = luminance(RGB);
		switch(direction){
			case "high_contrast":
				if(lum < 50){
					return ("#" + array2color(dec2hex(an_shift_luminance(RGB, -(shift/100)))));
				} else {
					return ("#" + array2color(dec2hex(an_shift_luminance(RGB, (shift/100)))));
				}
				break;
			case "lighter":
				return ("#" + array2color(dec2hex(an_shift_luminance(RGB, -(shift/100)))));
				break;
			case "darker":
				return ("#" + array2color(dec2hex(an_shift_luminance(RGB, (shift/100)))));
				break;
		}
	 }
	 
	 function an_shift_luminance(RGB, shift){
		if(shift < 0){
			RGB[0] = Math.round(RGB[0] - ((255 - RGB[0]) * shift));
			RGB[1] = Math.round(RGB[1] - ((255 - RGB[1]) * shift));
			RGB[2] = Math.round(RGB[2] - ((255 - RGB[2]) * shift));
			return RGB;
		} else {
			RGB[0] = Math.round(RGB[0] * (1 - shift));
			RGB[1] = Math.round(RGB[1] * (1 - shift));
			RGB[2] = Math.round(RGB[2] * (1 - shift));
			return RGB;
		}
	 }
	 
	 function dec2hex(RGB){
		for(i=0; i<3; i++){
			RGB[i] = RGB[i].toString(16);
			if(RGB[i].length == 1){
				RGB[i] = '0' + RGB[i];
			}
		}
		return RGB;
	 }
	 
	 function array2color(RGB){
		return (RGB[0] + RGB[1] + RGB[2]);
	 }
	 
	 function luminance (RGB) {
		var lum = ((.299 * RGB[0]) + (.587 * RGB[1]) + (.114 * RGB[2])) / 2.55;
		return lum;
	 }
} )( jQuery );