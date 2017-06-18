<?php 
/**
 * Custom Parameter Type
 * @author TOMPLABS.COM 
 * @package TOMP
 * @since TOMP
 *
 * 
 */

 
vc_add_shortcode_param ('bonuin_icon', 'bonuin_icon_settings_field', array(get_template_directory_uri().'/assets/plugins/icon-picker/ipko-icon.js'));

function bonuin_icon_settings_field( $settings, $value ) {
   return 	'<div class="bonuin_icon_block">'
			 
				.'<input type="text" id="e4_element" name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" value="' . esc_attr( $value ) . '"/>'
				.'<script type="text/javascript">
				   jQuery(document).ready(function($) {
						var ipkoIcons1 = {
							\'Ipko Icons\' :["ipkoIcon-arrow-right1", "ipkoIcon-3g1", "ipkoIcon-4g1","ipkoIcon-movie1","ipkoIcon-movie2","ipkoIcon-pako2","ipkoIcon-pako1","ipkoIcon-banking1","ipkoIcon-battery-empty","ipkoIcon-battery-full","ipkoIcon-pako5","ipkoIcon-buy1","ipkoIcon-calculator1","ipkoIcon-calendar1","ipkoIcon-calendar11","ipkoIcon-chart1","ipkoIcon-chat1","ipkoIcon-city1","ipkoIcon-clouds2","ipkoIcon-cog1","ipkoIcon-cog2","ipkoIcon-creditcard1","ipkoIcon-database2","ipkoIcon-database1","ipkoIcon-doc1","ipkoIcon-facebook1","ipkoIcon-rrufeja1","ipkoIcon-football1","ipkoIcon-globe1","ipkoIcon-google-plus1","ipkoIcon-hd1","ipkoIcon-help1","ipkoIcon-home1","ipkoIcon-instagram1","ipkoIcon-usb1","ipkoIcon-clouds2","ipkoIcon-database3","ipkoIcon-search1","ipkoIcon-screen1","ipkoIcon-safety1","ipkoIcon-record1","ipkoIcon-question1","ipkoIcon-price-tag1","ipkoIcon-play-music2","ipkoIcon-play-music1","ipkoIcon-pinterest1","ipkoIcon-instagram2","ipkoIcon-phone1","ipkoIcon-pdf1","ipkoIcon-pause1","ipkoIcon-pako4","ipkoIcon-pako3","ipkoIcon-mobile2","ipkoIcon-mobile1","ipkoIcon-excel1","ipkoIcon-rewind1","ipkoIcon-map2","ipkoIcon-map1","ipkoIcon-loading","ipkoIcon-linkedin","ipkoIcon-help1","ipkoIcon-google-plus1","ipkoIcon-globe1","ipkoIcon-facebook1","ipkoIcon-doc1","ipkoIcon-wifi1","ipkoIcon-wifi2","ipkoIcon-wifi3","ipkoIcon-voleyball","ipkoIcon-vimeo1","ipkoIcon-user2","ipkoIcon-users1","ipkoIcon-user1","ipkoIcon-upload1","ipkoIcon-twitter2","ipkoIcon-twitter1","ipkoIcon-screen2","ipkoIcon-tag1","ipkoIcon-screen3","ipkoIcon-phone2","ipkoIcon-syni2","ipkoIcon-syni1","ipkoIcon-streaming","ipkoIcon-storage1","ipkoIcon-stats1","ipkoIcon-star-filled","ipkoIcon-star-empty","ipkoIcon-mobile3","ipkoIcon-shopping1","ipkoIcon-share1","ipkoIcon-service2","ipkoIcon-service1","ipkoIcon-sendemail","ipkoIcon-security4","ipkoIcon-security2","ipkoIcon-security1","ipkoIcon-zemra1"],
							//\'Web Application Icons\' : ["icon-mail", "icon-mail-alt", "icon-th-large", "icon-th", "icon-th-list", "icon-help-circled", "icon-info-circled", "icon-info", "icon-home", "icon-link", "icon-unlink", "icon-link-ext", "icon-link-ext-alt", "icon-attach", "icon-tag", "icon-tags", "icon-bookmark", "icon-bookmark-empty", "icon-download", "icon-upload", "icon-download-cloud", "icon-upload-cloud", "icon-reply", "icon-reply-all"]
						};
							
							$(\'#e4_element\').fontIconPicker({
									source: ipkoIcons1,
									theme: \'fip-bootstrap\'
								});
							});
				</script>'
				
			.'</div>'; 
}


?>
