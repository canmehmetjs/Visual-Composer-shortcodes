<?php
/**
 * Visual Composer Extend
 *
 * @package BONUIN
 * @since BONUIN 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


if (class_exists('WPBakeryVisualComposerAbstract')) {




	get_template_part( '/inc/shortcodes/CustomParamTypes/bonuin-icon' );
	get_template_part( '/inc/shortcodes/bonuin_buttons' );
	get_template_part( '/inc/shortcodes/bonuin_callout_add_v1' );
	get_template_part( '/inc/shortcodes/bonuin_callout_v2' );
	get_template_part( '/inc/shortcodes/bonuin_title_v1' );
	get_template_part( '/inc/shortcodes/bonuin_contact_form_v1' );
	get_template_part( '/inc/shortcodes/bonuin_intro_section_v1' );
	get_template_part( '/inc/shortcodes/bonuin_latest_vehicles_v1' );
	get_template_part( '/inc/shortcodes/bonuin_featured_vehicles_v1' );
	get_template_part( '/inc/shortcodes/bonuin_subscribe_template_1' );
	get_template_part( '/inc/shortcodes/bonuin_subscribe_template_2' );
	get_template_part( '/inc/shortcodes/bonuin_our_team_v1' );
	get_template_part( '/inc/shortcodes/bonuin_map_v1' );
	get_template_part( '/inc/shortcodes/bonuin_twitter_carousel_v1' );
	get_template_part( '/inc/shortcodes/bonuin_pricing_v1' );
	get_template_part( '/inc/shortcodes/bonuin_pricing_v2' );



		
		/*
		 *
		 *	BONUIN PRICING 1  - BONUIN SHORTCODE
		 *
		 */

		add_action( 'vc_before_init', 'integrate_bonuin_pricing_v1' );
		function integrate_bonuin_pricing_v1() {
			vc_map( array(
				"name" => __( "Pricing V1", "hoh_shortcodes" ),
				"base" => "bonuin_pricing_v1",
				"class" => "",
				"icon" => get_template_directory_uri() . '/assets/images/fav.png',
				"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
				"description" => __( 'Add twiter carousel to your frontend ', 'hoh_shortcodes' ),
				"params" => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Number of pricing items', 'bonuin_shortcodes' ),
						'param_name'  => 'pricing_items',
						'value'       => '3',
						"admin_label" => true,
						'description' => __( 'Please paste marker latitude', 'bonuin_shortcodes' )
					),
					array(
							"type"        => "dropdown",
							"heading"     => __('Select column type','bonuin_shortcodes'),
							"param_name"  => "columns",
							"admin_label" => true,
							"value"       => array(
								"Select pricing columns" => "",
								"Two Columns" 	 	 	 => "2",
								"Three Columns" 	 	 => "3",
								"Four Columns"  		 => "4",
								"Six Columns"  			 => "6",
							),
							"description" => __('Please choose pricing columns','bonuin_shortcodes')
					)
					
					
				)
			));
		}
		
		
		/*
		 *
		 *	BONUIN PRICING 1  - BONUIN SHORTCODE
		 *
		 */

		add_action( 'vc_before_init', 'integrate_bonuin_pricing_v2' );
		function integrate_bonuin_pricing_v2() {
			vc_map( array(
				"name" => __( "Pricing V2", "hoh_shortcodes" ),
				"base" => "bonuin_pricing_v2",
				"class" => "",
				"icon" => get_template_directory_uri() . '/assets/images/fav.png',
				"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
				"description" => __( 'Add pricing tables to your site ', 'hoh_shortcodes' ),
				"params" => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Number of pricing items', 'bonuin_shortcodes' ),
						'param_name'  => 'pricing_items',
						'value'       => '3',
						"admin_label" => true,
						'description' => __( 'Please paste marker latitude', 'bonuin_shortcodes' )
					),
					array(
							"type"        => "dropdown",
							"heading"     => __('Select column type','bonuin_shortcodes'),
							"param_name"  => "columns",
							"admin_label" => true,
							"value"       => array(
								"Select pricing columns" => "",
								"Two Columns" 	 	 	 => "2",
								"Three Columns" 	 	 => "3",
								"Four Columns"  		 => "4",
								"Six Columns"  			 => "6",
							),
							"admin_label" => true,
							"description" => __('Please choose pricing columns','bonuin_shortcodes')
					),
					array(
							"type"        => "dropdown",
							"heading"     => __('Show button on the bottom?','bonuin_shortcodes'),
							"param_name"  => "display_button",
							"admin_label" => true,
							"value"       => array(
								"Select button visibility" 	=> "",
								"Yes , show button" 	 	 => "yes",
								"No , hide button" 	 		 => "no"
							),
							"admin_label" => true,
							"description" => __('Please choose pricing columns','bonuin_shortcodes')
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Button placeholder', 'bonuin_shortcodes' ),
						'param_name'  => 'button_placeholder',
						'value'       => 'Contact us',
						"admin_label" => true,
						'description' => __( 'Button placeholder text that will show in button.', 'bonuin_shortcodes' ),
						'dependency' => array(
							'element' => 'display_button',
							'value' => array('yes'),
						)
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Button Url', 'bonuin_shortcodes' ),
						'param_name'  => 'button_url',
						'value'       => '',
						'admin_label' => true,
						'description' => __( 'Paste button URL to redirect when clicked', 'bonuin_shortcodes' ),
						'dependency' => array(
							'element' => 'display_button',
							'value' => array('yes'),
						)
					),
					
				)
			));
		}
		
		
		
		/*
		 *
		 *	BONUIN TWITTER SHORTCODE 1  - BONUIN SHORTCODE
		 *
		 */

		add_action( 'vc_before_init', 'integrate_bonuin_twitter_carousel_v1' );
		function integrate_bonuin_twitter_carousel_v1() {
			vc_map( array(
				"name" => __( "Twitter Carousel V1", "hoh_shortcodes" ),
				"base" => "bonuin_twitter_v1",
				"class" => "",
				"icon" => get_template_directory_uri() . '/assets/images/fav.png',
				"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
				"description" => __( 'Add twiter carousel to your frontend ', 'hoh_shortcodes' ),
				"params" => array(
					array(
							"type"        => "dropdown",
							"heading"     => __('Select icon type','bonuin_shortcodes'),
							"param_name"  => "icon_type",
							"admin_label" => true,
							"value"       => array(
								"Select icon type" 	 => "",
								"Twitter Profile Image"  			=> "serice_with_image",
								"Choose icon from Bonuin Icons"		 => "service_with_icon"
							),
							"description" => __('Please choose icon type','bonuin_shortcodes')
					),
					array(
							'type' => 'iconpicker',
							'heading' => __( 'Choose twitter carousel icon', 'js_composer' ),
							'param_name' => 'twitter_carousel_icon',
							'value' => 'tomplabs-twitter-2',
							'settings' => array(
								'emptyIcon' => false, // default true, display an "EMPTY" icon?
								'type' => 'bonuinIcon',
								'iconsPerPage' => 200, // default 100, how many icons per/page to display
							),
							'description' => __( 'Select icon from library.', 'js_composer' ),
							'dependency' => array(
								'element' => 'icon_type',
								'value' => 'service_with_icon',
							),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Tweet items', 'bonuin_shortcodes' ),
						'param_name'  => 'tweet_items',
						'value'       => '3',
						'description' => __( 'Please paste marker latitude', 'bonuin_shortcodes' )
					)
				)
			));
		}
		
		
		/*
		 *
		 *	BONUIN MAP SHORTCODE 1  - BONUIN SHORTCODE
		 *
		 */

		add_action( 'vc_before_init', 'integrate_bonuin_map_v1' );
		function integrate_bonuin_map_v1() {
			vc_map( array(
				"name" => __( "Map V1", "hoh_shortcodes" ),
				"base" => "bonuin_map_v1",
				"class" => "",
				"icon" => get_template_directory_uri() . '/assets/images/fav.png',
				"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
				"params" => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Marker Latitude', 'bonuin_shortcodes' ),
						'param_name'  => 'latitude',
						'value'       => '',
						'description' => __( 'Please paste marker latitude', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Marker Longtitude', 'bonuin_shortcodes' ),
						'param_name'  => 'longtitude',
						'value'       => '',
						'description' => __( 'Please paste marker latitude', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'The latitude and longitude to center the map', 'bonuin_shortcodes' ),
						'param_name'  => 'center',
						'value'       => '',
						'description' => __( 'Please paste marker latitude', 'bonuin_shortcodes' )
					),
					array(
						"type" => "attach_image",
						"class" => "",
						"heading" => "Select marker image",
						"param_name" => "marker_image",
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Map Height', 'bonuin_shortcodes' ),
						'param_name'  => 'map_height',
						'value'       => '400px',
						'description' => __( 'Please type map height . Default is 400px', 'bonuin_shortcodes' )
					),



				)
			));
		}
		
		
  
		/*
		 *
		 *	BONUIN OUR TEAM 1  - BONUIN SHORTCODE
		 *
		 */

		add_action( 'vc_before_init', 'integrate_bonuin_our_team_v1' );
		function integrate_bonuin_our_team_v1() {
			vc_map( array(
				"name" => __( "Our Team V1", "hoh_shortcodes" ),
				"base" => "bonuin_our_team_v1",
				"class" => "",
				"icon" => get_template_directory_uri() . '/assets/images/fav.png',
				"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
				"params" => array(
					array(
							"type"        => "dropdown",
							"heading"     => __('Select team style','bonuin_shortcodes'),
							"param_name"  => "style",
							"admin_label" => true,
							"value"       => array(
								"Select our team style type" 	 => "",
								"With Background"  			=> "with_bg",
								"With Borders"			 => "with_border"
							),
							"description" => __('Please choose background type','bonuin_shortcodes')
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'How many team member do you want to show?', 'bonuin_shortcodes' ),
						'param_name'  => 'member_items',
						'value'       => 3,
						'description' => __( 'Number of team members that you want to show', 'bonuin_shortcodes' )
					)



				)
			));
		}


		

		/*
		 *
		 *	BONUIN MAILCHIMP SUBSCRIBE 1  - BONUIN SHORTCODE
		 *
		 */

		add_action( 'vc_before_init', 'integrate_bonuin_subscribe_template_1' );
		function integrate_bonuin_subscribe_template_1() {
			vc_map( array(
				"name" => __( "Mailchimp Subscribe 1", "hoh_shortcodes" ),
				"base" => "bonuin_subscribe_template_1",
				"class" => "",
				"icon" => get_template_directory_uri() . '/assets/images/fav.png',
				"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
				"params" => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Subscribe  title', 'bonuin_shortcodes' ),
						'param_name'  => 'subscribe_title',
						'value'       => __('Subscribe to our latest offers','bonuin_theme'),
						'description' => __( 'This will be the callout title', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Input placeholder for user name', 'bonuin_shortcodes' ),
						'param_name'  => 'name_input_text',
						'value'       => __('Your Name','bonuin_theme'),
						'description' => __( 'This is input placeholder for the name field', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Input placeholder for user email', 'bonuin_shortcodes' ),
						'param_name'  => 'email_input_text',
						'value'       => __('Your Email','bonuin_theme'),
						'description' => __( 'This is input placeholder for the email field', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Button placeholder for user email submission', 'bonuin_shortcodes' ),
						'param_name'  => 'button_placeholder',
						'value'       => __('Subscribe to offers','bonuin_theme'),
						'description' => __( 'This is button placeholder that will show on button', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Let users now for what they are subscibing to...', 'bonuin_shortcodes' ),
						'param_name'  => 'notification',
						'value'       => __('By clicking "Subscribe to offers!" I agree to this site sending me offers.','bonuin_theme'),
						'description' => __( 'This text will show under the submit button', 'bonuin_shortcodes' )
					),
					array(
						'type'        => 'colorpicker',
						'heading'     => __( 'Callout background color', 'bonuin_shortcodes' ),
						'param_name'  => 'callout_bg_color',
						'value'       => '#323a45',
						'description' => __( 'If you dont choose a background color , default color will be applied.', 'bonuin_shortcodes' )
					)



				)
			));
		}




	/*
	 *
	 *	BONUIN MAILCHIMP SUBSCRIBE 2  - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_subscribe_template_2' );
	function integrate_bonuin_subscribe_template_2() {
		vc_map( array(
			"name" => __( "Mailchimp Subscribe 2", "hoh_shortcodes" ),
			"base" => "bonuin_subscribe_template_2",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Subscribe  title', 'bonuin_shortcodes' ),
					'param_name'  => 'subscribe_title',
					'value'       => __('Subscribe to our latest offers','bonuin_theme'),
					'description' => __( 'This will be the callout title', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Input placeholder for user name', 'bonuin_shortcodes' ),
					'param_name'  => 'name_input_text',
					'value'       => __('Your Name','bonuin_theme'),
					'description' => __( 'This is input placeholder for the name field', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Input placeholder for user email', 'bonuin_shortcodes' ),
					'param_name'  => 'email_input_text',
					'value'       => __('Your Email','bonuin_theme'),
					'description' => __( 'This is input placeholder for the email field', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button placeholder for user email submission', 'bonuin_shortcodes' ),
					'param_name'  => 'button_placeholder',
					'value'       => __('Subscribe to offers','bonuin_theme'),
					'description' => __( 'This is button placeholder that will show on button', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Let users now for what they are subscibing to...', 'bonuin_shortcodes' ),
					'param_name'  => 'notification',
					'value'       => __('By clicking "Subscribe to offers!" I agree to this site sending me offers.','bonuin_theme'),
					'description' => __( 'This text will show under the submit button', 'bonuin_shortcodes' )
				),
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => "Select callout image that will appear on right",
					"param_name" => "callout_image",
				)

			)
		));
	}



	/*
	 *
	 *	BONUIN BUTTONS - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_buttons' );
	function integrate_bonuin_buttons() {
		vc_map( array(
			"name" => __( "Buttons", "hoh_shortcodes" ),
			"base" => "bonuin_buttons",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button style','bonuin_shortcodes'),
					  "param_name"  => "button_type",
					  "admin_label" => true,
					  "value"       => array(
						"Select button type"   		 => "",
						"Button in circle style"   		 => "btn_circle",
						"Button in box style"   		 => "btn_box",
						"Button with rounded corners" 	 => "btn_round",
						"Button creative in Circle" 	 => "btn_creative_circle",
						"Button creative in Box"     	 => "btn_creative_box"
					  ),
					 "description" => __('Please choose button style','bonuin_shortcodes')
				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button alignment','bonuin_shortcodes'),
					  "param_name"  => "button_alignment",
					  "admin_label" => true,
					  "value"       => array(
						"Select button position"   	=> "",
						"left"   		 => "left",
						"center"   		 => "center",
						"right" 		 => "right"
					),
					 "description" => __('Please choose button style','bonuin_shortcodes')
				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button color type','bonuin_shortcodes'),
					  "param_name"  => "button_color",
					  "admin_label" => true,
					  "value"       => array(
						"White" 			 => "white",
						"White Outline"		 => "white_outline",
						"Grey" 				 => "grey",
						"Grey Outline" 		 => "grey_outline",
						"Blue" 				 => "blue",
						"Blue Outline" 		 => "blue_outline",
						"Blue Dark" 		 => "blue_dark",
						"Blue Dark Outline"  => "blue_dark_outline",
						"Yellow"			 => "yellow",
						"Yellow Outline"     => "yellow_outline" ,
						"Red"			     => "red" ,
						"Red Outline"		 => "red_outline" ,
						"Green" 			 => "green",
						"Green Outline"		 => "green_outline"

					  ),
					  "description" => __('Please choose button color type','bonuin_shortcodes')
				),

				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button title', 'bonuin_shortcodes' ),
					'param_name'  => 'button_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Click me", "bonuin_shortcodes" ),
					'description' => __( 'This will be the button placeholder.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'button_type',
						'value' => array('btn_circle','btn_box','btn_round'),
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button Top small title', 'bonuin_shortcodes' ),
					'param_name'  => 'button_small_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Download for", "bonuin_shortcodes" ),
					'description' => __( 'This text will apear on top of button container.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'button_type',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button Bottom Big title', 'bonuin_shortcodes' ),
					'param_name'  => 'button_big_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Android", "bonuin_shortcodes" ),
					'description' => __( 'Android', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'button_type',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Button URL', 'bonuin_shortcodes' ),
					'param_name' => 'button_url',
					'description' => __( 'Add custom link.', 'bonuin_shortcodes' ),
				),
			)
		));
	}







	/*
	 *
	 *	BONUIN TITLE - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_title_v1' );
	function integrate_bonuin_title_v1() {
		vc_map( array(
			"name" => __( "Title V1", "hoh_shortcodes" ),
			"base" => "bonuin_title_v1",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Type the title', 'bonuin_shortcodes' ),
					'param_name'  => 'title', //param_name for textarea_html must be named "content"
					'value'       => __( "Contact Us", "bonuin_shortcodes" ),
					'description' => __( 'This will be the title placeholder.', 'bonuin_shortcodes' )

				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Title description', 'bonuin_shortcodes' ),
					'param_name'  => 'title_description', //param_name for textarea_html must be named "content"
					'value'       => 'Responsive & Retina ready, Bonuin looks awesome and elegant on all devices and screen sizes.
Creativity unleashed in a stylish WordPress theme',
					'description' => __( 'This will be the subtitle placeholder.', 'bonuin_shortcodes' )


				),

			)
		));
	}




	/*
	 *
	 *	BONUIN LATEST VECHILES V1 - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_latest_vehicles_v1' );
	function integrate_bonuin_latest_vehicles_v1() {
		vc_map( array(
			"name" => __( "Latest vehicles V1", "hoh_shortcodes" ),
			"base" => "bonuin_latest_vehicles_v1",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Number of vehicles to show', 'bonuin_shortcodes' ),
					'param_name'  => 'number_of_vehicles', //param_name for textarea_html must be named "content"
					'value'       => 10,
					'description' => __( 'How many vehicle items you want to show?', 'bonuin_shortcodes' )

				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('How many columns should this layout have?','bonuin_shortcodes'),
					  "param_name"  => "number_of_columns",
					  "admin_label" => true,
					  "value"       => array(
						"Select column layout"   		 => "",
						"Three Columns"   		 => "three",
						"Four Columns"   		 => "four",
						"Five Columns"   	 => "five"
					),
					 "description" => __('Please choose a column layout for this shortcode','bonuin_shortcodes')
				),

			)
		));
	}




	/*
	 *
	 *	BONUIN FEATURED VEHILES V1 - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_featured_vehicles_v1' );
	function integrate_bonuin_featured_vehicles_v1() {
		vc_map( array(
			"name" => __( "Featured vehicles V1", "hoh_shortcodes" ),
			"base" => "bonuin_featured_vehicles_v1",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Number of vehicles to show', 'bonuin_shortcodes' ),
					'param_name'  => 'number_of_vehicles', //param_name for textarea_html must be named "content"
					'value'       => 10,
					'description' => __( 'How many vehicle items you want to show?', 'bonuin_shortcodes' )

				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('How many columns should this layout have?','bonuin_shortcodes'),
					  "param_name"  => "number_of_columns",
					  "admin_label" => true,
					  "value"       => array(
						"Select column layout"   		 => "",
						"Three Columns"   		 => "three",
						"Four Columns"   		 => "four",
						"Five Columns"   	 => "five"
					),
					 "description" => __('Please choose a column layout for this shortcode','bonuin_shortcodes')
				),

			)
		));
	}





	/*
	 *
	 *	BONUIN FORM - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_form_v1' );
	function integrate_bonuin_form_v1() {
		vc_map( array(
			"name" => __( "Contact form", "hoh_shortcodes" ),
			"base" => "bonuin_contact_form_v1",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Type the email address for the form', 'bonuin_shortcodes' ),
					'param_name'  => 'email_address', //param_name for textarea_html must be named "content"
					'value'       => __( "info@tomplabs.com", "bonuin_shortcodes" ),
					'description' => __( 'All emails sent from this form will be sent to this email address.', 'bonuin_shortcodes' )

				)
			)
		));
	}





	/*
	 *
	 *	BONUIN CALLOUT AD BANNER V1 - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_callout_ad_v1' );
	function integrate_bonuin_callout_ad_v1() {
		vc_map( array(
			"name" => __( "Callout Ad Banner", "hoh_shortcodes" ),
			"base" => "bonuin_callout_ad_v1",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose banner background color','bonuin_shortcodes'),
					  "param_name"  => "banner_color",
					  "admin_label" => true,
					  "value"       => array(
						"Green"   		 => "green",
						"Grey"   		 => "grey",
						"Blue Dark"   	 => "blue_dark",
						"Blue"   		 => "blue",
						"Pink"   		 => "pink",
					),
					 "description" => __('Please choose banner background color','bonuin_shortcodes')
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Banner top small title', 'bonuin_shortcodes' ),
					'param_name'  => 'banner_top_small_title',
					'value'       => __( "BONUIN AD", "bonuin_shortcodes" ),
					'description' => __( 'This will be shown on top of banner.', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Banner Big title', 'bonuin_shortcodes' ),
					'param_name'  => 'banner_big_title',
					'value'       => __( "Boost your vehicles sales. Upgrade your package and start adding your advert.", "bonuin_shortcodes" ),
					'description' => __( 'This is main title of banner.', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Banner description', 'bonuin_shortcodes' ),
					'param_name'  => 'banner_description',
					'value'       => __( '', "bonuin_shortcodes" ),
					'description' => __( 'This description will show under title.', 'bonuin_shortcodes' )
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Banner Button Title', 'bonuin_shortcodes' ),
					'param_name' => 'banner_button_title',
					'value'       => __( "Choose packages.", "bonuin_shortcodes" ),
					'description' => __( 'Banner title placeholder.', 'bonuin_shortcodes' ),
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Banner Button URL', 'bonuin_shortcodes' ),
					'param_name' => 'banner_url',
					'description' => __( 'Add custom link.', 'bonuin_shortcodes' ),
				),
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => "Select banner image ( PNG would be perfect )",
					"param_name" => "banner_image",
				),

			)
		));
	}





	/*
	 *
	 *	BONUIN CALLOUT BANNER V2 - BONUIN SHORTCODE
	 *
	 */

	add_action( 'vc_before_init', 'integrate_bonuin_callout_banner_v2' );
	function integrate_bonuin_callout_banner_v2() {
		vc_map( array(
			"name" => __( "Callout Banner 2", "hoh_shortcodes" ),
			"base" => "bonuin_callout_v2",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => "Select callout image ( PNG would be perfect )",
					"param_name" => "callout_image",
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Callout title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_title',
					'value'       => __( "Get Bonuin now and start building your website.", "bonuin_shortcodes" ),
					'description' => __( 'This will be shown on top of callout.', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => __( 'Callout title color', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_title_color',
					'value'       => '#fff',
					'description' => __( 'If you want to change heading color , please click on color attributes.', 'bonuin_shortcodes' )
				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button style','bonuin_shortcodes'),
					  "param_name"  => "callout_button_type",
					  "admin_label" => true,
					  "value"       => array(
						"Button in circle style"   		 => "btn_circle",
						"Button in box style"   		 => "btn_box",
						"Button with rounded corners" 	 => "btn_round",
						"Button creative in Circle" 	 => "btn_creative_circle",
						"Button creative in Box"     	 => "btn_creative_box"
					  ),
					 "description" => __('Please choose button style','bonuin_shortcodes')
				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button color type','bonuin_shortcodes'),
					  "param_name"  => "callout_button_color",
					  "admin_label" => true,
					  "value"       => array(
						"White" 			 => "white",
						"White Outline"		 => "white_outline",
						"Grey" 				 => "grey",
						"Grey Outline" 		 => "grey_outline",
						"Blue" 				 => "blue",
						"Blue Outline" 		 => "blue_outline",
						"Blue Dark" 		 => "blue_dark",
						"Blue Dark Outline"  => "blue_dark_outline",
						"Yellow"			 => "yellow",
						"Yellow Outline"     => "yellow_outline" ,
						"Red"			     => "red" ,
						"Red Outline"		 => "red_outline" ,
						"Green" 			 => "green",
						"Green Outline"		 => "green_outline"

					  ),
					  "description" => __('Please choose button color type','bonuin_shortcodes')
				),

				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_button_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Click me", "bonuin_shortcodes" ),
					'description' => __( 'This will be the button placeholder.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type',
						'value' => array('btn_circle','btn_box','btn_round'),
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button Top small title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_button_small_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Download for", "bonuin_shortcodes" ),
					'description' => __( 'This text will apear on top of button container.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button Bottom Big title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_button_big_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Android", "bonuin_shortcodes" ),
					'description' => __( 'Big button title', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Banner Button URL', 'bonuin_shortcodes' ),
					'param_name' => 'banner_url',
					'description' => __( 'Add custom link.', 'bonuin_shortcodes' ),
				),



			)
		));
	}





	add_action( 'vc_before_init', 'integrate_bonuin_callout_banner_v3' );
	function integrate_bonuin_callout_banner_v3() {
		vc_map( array(
			"name" => __( "Callout Banner 3", "hoh_shortcodes" ),
			"base" => "bonuin_callout_v3",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Callout Type','bonuin_shortcodes'),
					  "param_name"  => "callout_type",
					  "admin_label" => true,
					  "value"       => array(
						"Download App View"   		 => "download_app_view",
						"Sign Up App View"   		 => "signup_app_view"
					  ),
					 "description" => __('Please choose callout style','bonuin_shortcodes')
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Callout title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_title',
					'value'       => __( "Why choose Bonuin", "bonuin_shortcodes" ),
					'description' => __( 'This will be shown on top of callout.', 'bonuin_shortcodes' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Callout description', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_description',
					'value'       => __( "Why choose Bonuin", "bonuin_shortcodes" ),
					'description' => __( 'This will be shown on top of callout.', 'bonuin_shortcodes' )
				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button style','bonuin_shortcodes'),
					  "param_name"  => "callout_button_type_download_app",
					  "admin_label" => true,
					  "value"       => array(
						"Button creative in Circle" 	 => "btn_creative_circle",
						"Button creative in Box"     	 => "btn_creative_box"
					  ),
					 "description" => __('Please choose button style','bonuin_shortcodes'),
					 'dependency' => array(
 						'element' => 'callout_type',
 						'value' => array('download_app_view'),
 					)
				),
				array(
					  "type"        => "dropdown",
					  "heading"     => __('Choose button style','bonuin_shortcodes'),
					  "param_name"  => "callout_button_type_sign_up_app",
					  "admin_label" => true,
					  "value"       => array(
							"Button in circle style"   		 => "btn_circle",
							"Button in box style"   		 => "btn_box",
							"Button with rounded corners" 	 => "btn_round",
					  ),
					 "description" => __('Please choose button style','bonuin_shortcodes'),
					 'dependency' => array(
 						'element' => 'callout_type',
 						'value' => array('signup_app_view'),
 					)
				),
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => "Select callout image ( PNG would be perfect )",
					"param_name" => "callout_image",
				),
				array(
					"type"        => "dropdown",
					"heading"     => __('Choose button color type','bonuin_shortcodes'),
					"param_name"  => "callout_button_color",
					"admin_label" => true,
					"value"       => array(
					"White" 			 => "white",
					"White Outline"		 => "white_outline",
					"Grey" 				 => "grey",
					"Grey Outline" 		 => "grey_outline",
					"Blue" 				 => "blue",
					"Blue Outline" 		 => "blue_outline",
					"Blue Dark" 		 => "blue_dark",
					"Blue Dark Outline"  => "blue_dark_outline",
					"Yellow"			 => "yellow",
					"Yellow Outline"     => "yellow_outline" ,
					"Red"			     => "red" ,
					"Red Outline"		 => "red_outline" ,
					"Green" 			 => "green",
					"Green Outline"		 => "green_outline"

					),
					"description" => __('Please choose button color type','bonuin_shortcodes')
				),

				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_button_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Click me", "bonuin_shortcodes" ),
					'description' => __( 'This will be the button placeholder.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type',
						'value' => array('btn_circle','btn_box','btn_round'),
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Button Top small title', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_button_small_title', //param_name for textarea_html must be named "content"
					'value'       => __( "Download for", "bonuin_shortcodes" ),
					'description' => __( 'This text will apear on top of button container.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),

				array(
					'type'        => 'textfield',
					'heading'     => __( 'App buttons', 'bonuin_shortcodes' ),
					'param_name'  => 'callout_button_big_title', //param_name for textarea_html must be named "content"
					'value'       =>
						array(
							"I have android application" => "android_app_exists",
							"I have iOS application" => "ios_app_exists",
							"I have both"	=> "both_app_exists"
						),
					'description' => __( 'Choose android , ios or both buttons to show', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type_download_app',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),

				array(
					'type' => 'textfield',
					'heading' => __( 'Android Button URL', 'bonuin_shortcodes' ),
					'param_name' => 'android_button_url',
					'description' => __( 'Add custom link.', 'bonuin_shortcodes' ),
					'dependency' => array(
						'element' => 'callout_button_type_download_app',
						'value' => array('btn_creative_circle','btn_creative_box'),
					)
				),



			)
		));
	}








	add_action( 'vc_before_init', 'integrate_bonuin_intro_section_v1' );
	function integrate_bonuin_intro_section_v1() {
		vc_map( array(
			"name" => __( "Intro Section V1", "hoh_shortcodes" ),
			"base" => "bonuin_intro_section_v1",
			"class" => "",
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"params" => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Intro title', 'bonuin_shortcodes' ),
					'param_name'  => 'intro_title',
					'value'       => __( "Bonuin for Enterprise gives you the clarity, collaboration, and control you need to power your design process—company-wide. And with unlimited projects and unlimited team members, it scales to fit your business needs, no matter how big or small.", "bonuin_shortcodes" ),
					'description' => __( 'This will be shown on top of intro.', 'bonuin_shortcodes' )
				),
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => "Select callout image ( PNG would be perfect )",
					"param_name" => "intro_image"
				)



			)
		));
	}


	add_action( 'vc_before_init', 'integrate_test_function' );
	function integrate_test_function(){
	//Register "container" content element. It will hold all your inner (child) content elements
		vc_map( array(
			"name" => __("Bonuin Services V1", "my-text-domain"),
			"base" => "bonuin_services_v1",
			"as_parent" => array('only' => 'bonuin_services_item_v1'),
			"icon" => get_template_directory_uri() . '/assets/images/fav.png',
			"category" => __( 'by TOMPlabs', 'hoh_shortcodes' ),
			"as_parent" => array('only' => 'bonuin_service_item_v1'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			"is_container" => true,
			"params" => array(),
			"js_view" => 'VcColumnView'

		) );
		vc_map( array(
			"name" => __("Service Item", "my-text-domain"),
			"base" => "bonuin_services_item_v1",
			"show_settings_on_create" => true,
			"content_element" => true,
			"as_child" => array('only' => 'bonuin_services_v1'), // Use only|except attributes to limit parent (separate multiple values with comma)
			"params" => array(
						// add params same as with any other content element
						array(
							"type"        => "dropdown",
							"heading"     => __('Select icon type','bonuin_shortcodes'),
							"param_name"  => "icon_type",
							"admin_label" => true,
							"value"       => array(
								"Select icon type" 	 => "",
								"Image Icon" 			 => "serice_with_image",
								"Choose from icons"		 => "service_with_icon"
							),
							"description" => __('Please choose icon type','bonuin_shortcodes')
						),
						array(
							'type' => 'iconpicker',
							'heading' => __( 'Choose service icon', 'js_composer' ),
							'param_name' => 'bonuin_icon_selected',
							'value' => 'is tomplabs-interface',
							'settings' => array(
								'emptyIcon' => false, // default true, display an "EMPTY" icon?
								'type' => 'bonuinIcon',
								'iconsPerPage' => 200, // default 100, how many icons per/page to display
							),
							'dependency' => array(
								'element' => 'icon_type',
								'value' => 'service_with_icon',
							),
							'description' => __( 'Select icon from library.', 'js_composer' )
						),
						array(
							'type' => 'attach_image',
							'class' => '',
							'heading' => __( 'Upload your custom image', 'js_composer' ),
							'param_name' => 'service_image',
							'dependency' => array(
								'element' => 'icon_type',
								'value' => 'serice_with_image',
							)
						),
						array(
							"type" => "textfield",
							"heading" => __("Service Title", "my-text-domain"),
							"param_name" => "service_title",
							"description" => __("Please enter your service title", "my-text-domain")
						),
						array(
							"type" => "textarea_html",
							"heading" => __("Service description", "my-text-domain"),
							"param_name" => "content",
							"description" => __("Please enter your service description", "my-text-domain")
						)

				),
			)
		);



		//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
		if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
			class WPBakeryShortCode_Bonuin_Services_V1 extends WPBakeryShortCodesContainer {
			}
		}
		if ( class_exists( 'WPBakeryShortCode' ) ) {
			class WPBakeryShortCode_Bonuin_Services_Item_V1 extends WPBakeryShortCode {
			}
		}

	}





}
