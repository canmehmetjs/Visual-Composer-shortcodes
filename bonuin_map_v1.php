<?php
add_shortcode( 'bonuin_map_v1', 'initialize_bonuin_map_v1' );
function initialize_bonuin_map_v1( $atts ) {
    global $latitude;
    global $longtitude;
	global $center;
	global $marker_image;
	extract( shortcode_atts( array(
		'latitude'      		 => '',
		'longtitude'      		 => '',
		'center'      			 => '',
		'marker_image'      	 => '',
		'map_height'      	 => ''
	
	 ), $atts ));

	ob_start();
	
	
	if ($latitude == ''){
		$latitude = '40.6700';
	}
	
	if ($longtitude == ''){
		$longtitude = '-73.9400';
	}
	
	if ($center == ''){
		$center = '40.6700, -73.9400';
	}
	if ($map_height == ''){
		$map_height = '400px';
	}
	
	
	
	
	$marker_image = wp_get_attachment_image_src( $marker_image, 'thumbnail' );
	
	
	$marker_image = $marker_image[0];
	
	
	wp_enqueue_script( 'google_map' );
?>

		<style>
		#bonuin_map {
                width: 100%;
                height: <?php echo esc_attr($map_height);?>;
            }
			
			</style>
		<div id="bonuin_map" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150"></div>

		<?php 
		function print_shortcode_map_script(){
			global $latitude;
			global $longtitude;
			global $center;
			global $marker_image;
			?>
			
			<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(<?php echo esc_attr($center);?>), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f3f4f5"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d5e5f4"},{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"color":"#b1b8be"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('bonuin_map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo esc_attr($latitude);?>,<?php echo esc_attr($longtitude);?>),
                    map: map,
                    title: 'Our Location',
                    icon: "<?php echo esc_attr($marker_image);?>"
                });
            }
        </script>
			
		<?php } 
		add_action('init','print_shortcode_map_script');
		add_action('wp_footer','print_shortcode_map_script',20);
		?>
	  	 
		
		


<?php

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
?>
