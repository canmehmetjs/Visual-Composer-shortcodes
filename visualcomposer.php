<?php
add_action('init', 'TheShortcodesForVC');
function TheShortcodesForVC() {
	
	if (!class_exists('WPBakeryVisualComposerAbstract')) { // or using plugins path function
		return;
	}
	// Remove Front End 
	vc_disable_frontend();
	
	// Set as Theme
	WPBakeryVisualComposerAbstract::$config['USER_DIR_NAME'] = 'inc/shortcodes';
	
	if(function_exists('vc_set_default_editor_post_types')) vc_set_default_editor_post_types( array('post','page') );
	
	if(function_exists('vc_set_as_theme')) vc_set_as_theme(true);
	
	// Removing Default shortcodes
	//vc_remove_element("vc_widget_sidebar");
	vc_remove_element("vc_wp_search");
	vc_remove_element("vc_wp_meta");
	vc_remove_element("vc_wp_recentcomments");
	vc_remove_element("vc_wp_calendar");
	vc_remove_element("vc_wp_pages");
	vc_remove_element("vc_wp_tagcloud");
	vc_remove_element("vc_wp_custommenu");
	vc_remove_element("vc_wp_text");
	vc_remove_element("vc_wp_posts");
	vc_remove_element("vc_wp_links");
	vc_remove_element("vc_wp_categories");
	vc_remove_element("vc_wp_archives");
	vc_remove_element("vc_wp_rss");
	vc_remove_element("vc_teaser_grid");
	vc_remove_element("vc_button");
	vc_remove_element("vc_button2");
	vc_remove_element("vc_cta_button");
	//vc_remove_element("vc_message");
	vc_remove_element("vc_progress_bar");
	vc_remove_element("vc_pie");
	vc_remove_element("vc_posts_slider");
	vc_remove_element("vc_posts_grid");
	vc_remove_element("vc_images_carousel");
	vc_remove_element("vc_carousel");
	vc_remove_element("vc_gallery");
	//vc_remove_element("vc_single_image");
	vc_remove_element("vc_facebook");
	vc_remove_element("vc_tweetmeme");
	vc_remove_element("vc_googleplus");
	vc_remove_element("vc_pinterest");
	
	vc_remove_element("vc_cta_button2");
	vc_remove_element("vc_gmaps");
	vc_remove_element("vc_raw_js");
	vc_remove_element("vc_flickr");
	vc_remove_element("vc_separator");
	vc_remove_element("vc_text_separator");
	//vc_remove_element("vc_empty_space");
	//vc_remove_element("vc_custom_heading");
	
	if (is_admin()) :
		function remove_vc_teaser() {
			remove_meta_box('vc_teaser', '' , 'side');
		}
		add_action( 'admin_head', 'remove_vc_teaser' );
	endif;
	
	
	// Tell VC where to loook for shortcodes
	$vc_shortcodes_dir = get_stylesheet_directory() . '/inc/shortcodes';
	vc_set_shortcodes_templates_dir( $vc_shortcodes_dir );


	
	/**
	* Register Backend CSS Styles
	*/
	//add_action( 'vc_base_register_front_css', 'leadinjection_vc_iconpicker_base_register_css' );
	add_action( 'vc_base_register_admin_css', 'leadinjection_vc_iconpicker_base_register_css' );
	function leadinjection_vc_iconpicker_base_register_css(){
		wp_register_style('vc_bonuin_icons', get_template_directory_uri(). '/assets/css/tomplabs_icons.css');
	}

	/**
	* Enqueue Backend Styles
	*/
	add_action( 'vc_backend_editor_enqueue_js_css', 'leadinjection_vc_iconpicker_editor_jscss' );
	//add_action( 'vc_frontend_editor_enqueue_js_css', 'leadinjection_vc_iconpicker_editor_jscss' );
	function leadinjection_vc_iconpicker_editor_jscss(){
		wp_enqueue_style( 'vc_bonuin_icons' );
	}

	
	
	/**
	* Define the Icons for VC Iconpicker
	*/
	add_filter( 'vc_iconpicker-type-bonuinIcon', 'vc_iconpicker_type_bonuinIcon' );
	function vc_iconpicker_type_bonuinIcon( $icons ) {
		$bonuinIcon_icons = array(
			array('is tomplabs-youtube-2' => 'tomplabs-youtube-2'), 
			array('is tomplabs-youtube-1' => 'tomplabs-youtube-1'), 
			array('is tomplabs-youtube' => 'tomplabs-youtube'),
			array('is tomplabs-user' => 'tomplabs-user'),
			array('is tomplabs-upload-arrow' => 'tomplabs-upload-arrow'),
			array('is tomplabs-worldwide-1' => 'tomplabs-worldwide-1'),
			array('is tomplabs-user-1' => 'tomplabs-user-1'),
			array('is tomplabs-van' => 'tomplabs-van'),
			array('is tomplabs-viber' => 'tomplabs-viber'),
			array('is tomplabs-viber-1' => 'tomplabs-viber-1'),
			array('is tomplabs-video-camera' => 'tomplabs-video-camera'),
			array('is tomplabs-video-player' => 'tomplabs-video-player'),
			array('is tomplabs-whatsapp' => 'tomplabs-whatsapp'),
			array('is tomplabs-whatsapp-1' => 'tomplabs-whatsapp-1'),
			array('is tomplabs-whatsapp-2' => 'tomplabs-whatsapp-2'),
			array('is tomplabs-woman' => 'tomplabs-woman'),
			array('is tomplabs-worldwide' => 'tomplabs-worldwide'),
			array('is tomplabs-upload' => 'tomplabs-upload'),
			array('is tomplabs-up-arrow' => 'tomplabs-up-arrow'),
			array('is tomplabs-twitter-logo-silhouette' => 'tomplabs-twitter-logo-silhouette'),
			array('is tomplabs-twitter-2' => 'tomplabs-twitter-2'),
			array('is tomplabs-twitter-1' => 'tomplabs-twitter-1'),
			array('is tomplabs-twitter' => 'tomplabs-twitter'),
			array('is tomplabs-truck' => 'tomplabs-truck'),
			array('is tomplabs-transport-9' => 'tomplabs-transport-9'),
			array('is tomplabs-transport-8' => 'tomplabs-transport-8'),
			array('is tomplabs-transport-7' => 'tomplabs-transport-7'),
			array('is tomplabs-stemware' => 'tomplabs-stemware'),
			array('is tomplabs-technology' => 'tomplabs-technology'),
			array('is tomplabs-technology-1' => 'tomplabs-technology-1'),
			array('is tomplabs-time' => 'tomplabs-time'),
			array('is tomplabs-skype-1' => 'tomplabs-skype-1'),
			array('is tomplabs-tool-1' => 'tomplabs-tool-1'),
			array('is tomplabs-tool' => 'tomplabs-tool'),
			array('is tomplabs-transport' => 'tomplabs-transport'),
			array('is tomplabs-transport-1' => 'tomplabs-transport-1'),
			array('is tomplabs-transport-2' => 'tomplabs-transport-2'),
			array('is tomplabs-transport-3' => 'tomplabs-transport-3'),
			array('is tomplabs-transport-4' => 'tomplabs-transport-4'),
			array('is tomplabs-transport-5' => 'tomplabs-transport-5'),
			array('is tomplabs-transport-6' => 'tomplabs-transport-6'),
			array('is tomplabs-star-1' => 'tomplabs-star-1'),
			array('is tomplabs-star' => 'tomplabs-star'),  
			array('is tomplabs-squares' => 'tomplabs-squares'),  
			array('is tomplabs-square' => 'tomplabs-square'),  
			array('is tomplabs-speech-bubble' => 'tomplabs-speech-bubble'),  
			array('is tomplabs-smartphone' => 'tomplabs-smartphone'),  
			array('is tomplabs-skype-2' => 'tomplabs-skype-2'),  
			array('is tomplabs-skype' => 'tomplabs-skype'),  
			array('is tomplabs-shopping-cart' => 'tomplabs-shopping-cart'),  
			array('is tomplabs-shopping-bag' => 'tomplabs-shopping-bag'),  
			array('is tomplabs-shield' => 'tomplabs-shield'),  
			array('is tomplabs-share' => 'tomplabs-share'),  
			array('is tomplabs-pinterest-2' => 'tomplabs-pinterest-2'),  
			array('is tomplabs-placeholder' => 'tomplabs-placeholder'),
			array('is tomplabs-placeholder-1' => 'tomplabs-placeholder-1'),  
			array('is tomplabs-plus' => 'tomplabs-plus'),  
			array('is tomplabs-price-tag' => 'tomplabs-price-tag'),  
			array('is tomplabs-profile' => 'tomplabs-profile'),  
			array('is tomplabs-pulse' => 'tomplabs-pulse'),  
			array('is tomplabs-road' => 'tomplabs-road'),
			array('is tomplabs-search' => 'tomplabs-search'),
			array('is tomplabs-server' => 'tomplabs-server'),
			array('is tomplabs-settings-1' => 'tomplabs-settings-1'),
			array('is tomplabs-shapes' => 'tomplabs-shapes'),
			array('is tomplabs-pinterest' => 'tomplabs-pinterest'),
			array('is tomplabs-picture-1' => 'tomplabs-picture-1'),
			array('is tomplabs-picture' => 'tomplabs-picture'),
			array('is tomplabs-phone-call-1' => 'tomplabs-phone-call-1'),  
			array('is tomplabs-phone-call' => 'tomplabs-phone-call'), 
			array('is tomplabs-paper-plane-1' => 'tomplabs-paper-plane-1'),
			array('is tomplabs-paper-plane' => 'tomplabs-paper-plane'),
			array('is tomplabs-padlock' => 'tomplabs-padlock'),
			array('is tomplabs-next' => 'tomplabs-next'),
			array('is tomplabs-new-file' => 'tomplabs-new-file'),
			array('is tomplabs-mouse' => 'tomplabs-mouse'),
			array('is tomplabs-minus' => 'tomplabs-minus'),
			array('is tomplabs-line-graph' => 'tomplabs-line-graph'),
			array('is tomplabs-linkedin' => 'tomplabs-linkedin'),
			array('is tomplabs-linkedin-1' => 'tomplabs-linkedin-1'),
			array('is tomplabs-linkedin-logo' => 'tomplabs-linkedin-logo'),
			array('is tomplabs-list' => 'tomplabs-list'),
			array('is tomplabs-list-1' => 'tomplabs-list-1'),
			array('is tomplabs-list-2' => 'tomplabs-list-2'),
			array('is tomplabs-locked' => 'tomplabs-locked'),
			array('is tomplabs-mail' => 'tomplabs-mail'),
			array('is tomplabs-mail-1' => 'tomplabs-mail-1'),
			array('is tomplabs-man' => 'tomplabs-man'),
			array('is tomplabs-medical' => 'tomplabs-medical'),
			array('is tomplabs-like' => 'tomplabs-like'),
			array('is tomplabs-light-bulb' => 'tomplabs-light-bulb'),
			array('is tomplabs-letter' => 'tomplabs-letter'),
			array('is tomplabs-interface-2' => 'tomplabs-interface-2'),
			array('is tomplabs-interface-1' => 'tomplabs-interface-1'),
			array('is tomplabs-interface' => 'tomplabs-interface'),
			array('is tomplabs-instagram-2' => 'tomplabs-instagram-2'),
			array('is tomplabs-instagram-1' => 'tomplabs-instagram-1'),
			array('is tomplabs-instagram' => 'tomplabs-instagram'),
			array('is tomplabs-image-1' => 'tomplabs-image-1'),
			array('is tomplabs-image' => 'tomplabs-image'),
			array('is tomplabs-home' => 'tomplabs-home'),
			array('is tomplabs-gasoline-pump' => 'tomplabs-gasoline-pump'),
			array('is tomplabs-envelope' => 'tomplabs-envelope'),
			array('is tomplabs-envelope-1' => 'tomplabs-envelope-1'),
			array('is tomplabs-eye' => 'tomplabs-eye'),
			array('is tomplabs-facebook' => 'tomplabs-facebook'),
			array('is tomplabs-facebook-1' => 'tomplabs-facebook-1'),
			array('is tomplabs-favorite' => 'tomplabs-favorite'),
			array('is tomplabs-edit' => 'tomplabs-edit'),
			array('is tomplabs-earth-globe' => 'tomplabs-earth-globe'),
			array('is tomplabs-dribble-logo' => 'tomplabs-dribble-logo'),
			array('is tomplabs-download-arrow' => 'tomplabs-download-arrow'),
			array('is tomplabs-download' => 'tomplabs-download'),
			array('is tomplabs-down-arrow' => 'tomplabs-down-arrow'),
			array('is tomplabs-diamond' => 'tomplabs-diamond'),
			array('is tomplabs-cup' => 'tomplabs-cup'),
			array('is tomplabs-credit-card' => 'tomplabs-credit-card'),
			array('is tomplabs-compass' => 'tomplabs-compass'),
			array('is tomplabs-command' => 'tomplabs-command'),
			array('is tomplabs-clock-3' => 'tomplabs-clock-3'),
			array('is tomplabs-clock-2' => 'tomplabs-clock-2'),
			array('is tomplabs-boxes' => 'tomplabs-boxes'),
			array('is tomplabs-briefcase' => 'tomplabs-briefcase'),
			array('is tomplabs-business' => 'tomplabs-business'),
			array('is tomplabs-calendar' => 'tomplabs-calendar'),
			array('is tomplabs-car' => 'tomplabs-car'),
			array('is tomplabs-car-1' => 'tomplabs-car-1'),
			array('is tomplabs-car-2' => 'tomplabs-car-2'),
			array('is tomplabs-car-3' => 'tomplabs-car-3'),
			array('is tomplabs-car-4' => 'tomplabs-car-4'),
			array('is tomplabs-chat' => 'tomplabs-chat'),
			array('is tomplabs-circle' => 'tomplabs-circle'),
			array('is tomplabs-clock' => 'tomplabs-clock'),
			array('is tomplabs-clock-1' => 'tomplabs-clock-1'),
			array('is tomplabs-box' => 'tomplabs-box'),
			array('is tomplabs-bookmark' => 'tomplabs-bookmark'),
			array('is tomplabs-bolt' => 'tomplabs-bolt'),
			array('is tomplabs-back' => 'tomplabs-back'),
			array('is tomplabs-atom' => 'tomplabs-atom'),
			array('is tomplabs-artist-color-palette' => 'tomplabs-artist-color-palette'),
			array('is tomplabs-apple-1' => 'tomplabs-apple-1'),
			array('is tomplabs-apple' => 'tomplabs-apple'),
			array('is tomplabs-android-hand-drawn-logo-outline' => 'tomplabs-android-hand-drawn-logo-outline'),
			array('is tomplabs-android-logo' => 'tomplabs-android-logo'),
			array('is tomplabs-alarm-1' => 'tomplabs-alarm-1'),
			array('is tomplabs-alarm' => 'tomplabs-alarm'),
			array('is tomplabs-agenda' => 'tomplabs-agenda'),
			array('is tomplabs-add' => 'tomplabs-add'),
			array('is tomplabs-paper-plane-2' => 'tomplabs-paper-plane-2'),
			array('is tomplabs-view' => 'tomplabs-view'),
			array('is tomplabs-picture-2' => 'tomplabs-picture-2'),
			array('is tomplabs-alarm-2' => 'tomplabs-alarm-2'),
			array('is tomplabs-calendar-1' => 'tomplabs-calendar-1'),
			array('is tomplabs-play-button' => 'tomplabs-play-button'),
			array('is tomplabs-play-button-1' => 'tomplabs-play-button-1'),
			array('is tomplabs-edit-1' => 'tomplabs-edit-1'),
			array('is tomplabs-error' => 'tomplabs-error'),
			array('is tomplabs-search-1' => 'tomplabs-search-1'),
			array('is tomplabs-settings' => 'tomplabs-settings'),
			array('is tomplabs-facebook-logo' => 'tomplabs-facebook-logo'),
			array('is tomplabs-file' => 'tomplabs-file'),
			array('is tomplabs-share-1' => 'tomplabs-share-1'),
			array('is tomplabs-social' => 'tomplabs-social'),
			array('is tomplabs-google' => 'tomplabs-google'),
			array('is tomplabs-internet' => 'tomplabs-internet'),
			array('is tomplabs-star-2' => 'tomplabs-star-2'),
			array('is tomplabs-success' => 'tomplabs-success'),
			array('is tomplabs-like-1' => 'tomplabs-like-1'),
			array('is tomplabs-locked-1' => 'tomplabs-locked-1'),
			array('is tomplabs-twitter-3' => 'tomplabs-twitter-3'),
			array('is tomplabs-user-2' => 'tomplabs-user-2'),
			array('is tomplabs-login' => 'tomplabs-login'),
			array('is tomplabs-mail-2' => 'tomplabs-mail-2'),
			array('is tomplabs-video-player-1' => 'tomplabs-video-player-1'),
			array('is tomplabs-add-1' => 'tomplabs-add-1'),
			array('is tomplabs-add-circular-button' => 'tomplabs-add-circular-button'),
			array('is tomplabs-cross' => 'tomplabs-cross'),
			array('is tomplabs-delete' => 'tomplabs-delete'),
			array('is tomplabs-delete-1' => 'tomplabs-delete-1'),
			array('is tomplabs-edit-2' => 'tomplabs-edit-2'),
			array('is tomplabs-list-3' => 'tomplabs-list-3'),
			array('is tomplabs-professional-profile-with-image' => 'tomplabs-professional-profile-with-image'),
			array('is tomplabs-test-tube-experiment' => 'tomplabs-test-tube-experiment'),
			array('is tomplabs-world' => 'tomplabs-world'),
			array('is tomplabs-user-3' => 'tomplabs-user-3'),
			array('is tomplabs-vallet' => 'tomplabs-vallet'),
			array('is tomplabs-video' => 'tomplabs-video'),
			array('is tomplabs-vynil' => 'tomplabs-vynil'),
			array('is tomplabs-tv' => 'tomplabs-tv'),
			array('is tomplabs-truck-1' => 'tomplabs-truck-1'),
			array('is tomplabs-tag' => 'tomplabs-tag'),
			array('is tomplabs-paperplane' => 'tomplabs-paperplane'),
			array('is tomplabs-heart' => 'tomplabs-heart'),
			array('is tomplabs-like-2' => 'tomplabs-like-2'),
			array('is tomplabs-lab' => 'tomplabs-lab'),
			array('is tomplabs-camera' => 'tomplabs-camera'),
			array('is tomplabs-clip' => 'tomplabs-clip'),
			array('is tomplabs-clock-4' => 'tomplabs-clock-4'),
			array('is tomplabs-location' => 'tomplabs-location'),
			array('is tomplabs-stack' => 'tomplabs-stack'),
			array('is tomplabs-megaphone' => 'tomplabs-megaphone'),
			array('is tomplabs-data' => 'tomplabs-data'),
			array('is tomplabs-display' => 'tomplabs-display'),
			array('is tomplabs-diamond-1' => 'tomplabs-diamond-1'),
			array('is tomplabs-music' => 'tomplabs-music'),
			array('is tomplabs-news' => 'tomplabs-news'),
			array('is tomplabs-note' => 'tomplabs-note'),
			array('is tomplabs-eye-1' => 'tomplabs-eye-1'),
			array('is tomplabs-t-shirt' => 'tomplabs-t-shirt'),
			array('is tomplabs-study' => 'tomplabs-study'),
			array('is tomplabs-star-3' => 'tomplabs-star-3'),  
			array('is tomplabs-sound' => 'tomplabs-sound'),  
			array('is tomplabs-mail-3' => 'tomplabs-mail-3'),  
			array('is tomplabs-cup-1' => 'tomplabs-cup-1'),  
			array('is tomplabs-cloud' => 'tomplabs-cloud'), 
			array('is tomplabs-lock' => 'tomplabs-lock'), 
			array('is tomplabs-shop' => 'tomplabs-shop'), 
			array('is tomplabs-settings-2' => 'tomplabs-settings-2'),  
			array('is tomplabs-search-2' => 'tomplabs-search-2'),  
			array('is tomplabs-photo' => 'tomplabs-photo'),  
			array('is tomplabs-phone' => 'tomplabs-phone'),  
			array('is tomplabs-key' => 'tomplabs-key'),  
			array('is tomplabs-calendar-2' => 'tomplabs-calendar-2'),  
			array('is tomplabs-bulb' => 'tomplabs-bulb'),  
			array('is tomplabs-pen' => 'tomplabs-pen'),  
			array('is tomplabs-params' => 'tomplabs-params'),  
			array('is tomplabs-bubble' => 'tomplabs-bubble'),  
			array('is tomplabs-banknote' => 'tomplabs-banknote'),  
			array('is tomplabs-fire' => 'tomplabs-fire'),  
			array('is tomplabs-trash' => 'tomplabs-trash'),  
			array('is tomplabs-imac' => 'tomplabs-imac'),  
			array('is tomplabs-pencil' => 'tomplabs-pencil'),  
			array('is tomplabs-bag' => 'tomplabs-bag')
			
		);

	return array_merge( $icons, $bonuinIcon_icons );
	}


	
}