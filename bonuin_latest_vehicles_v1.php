<?php
add_shortcode( 'bonuin_latest_vehicles_v1', 'initialize_bonuin_latest_vehicles_v1' );
function initialize_bonuin_latest_vehicles_v1( $atts ) {
    extract( shortcode_atts( array(
		'number_of_vehicles'      	 => '',
		'number_of_columns'      	 => ''
	), $atts ));

	ob_start();


 
global $latest_vehicle_columns ;
$latest_vehicle_columns = $number_of_columns;
if ($latest_vehicle_columns == ''){
	$latest_vehicle_columns = 'five';
}
?>

<div class="user_listings <?php echo esc_attr($latest_vehicle_columns);?>-col-listing">
       
			<?php 
				$latest_vehicles_args = array(
					'post_type' => 'vehicles',
					'post_status' => 'publish',
					'posts_per_page' => $number_of_vehicles,
					'order '	=> 'DESC',
					'orderby'	=> 'date'
					
				);
				$latest_vehicle_query = new WP_Query( $latest_vehicles_args );
		 
			?>
			<div class="grid_items_container latest_vehicles_grid">
					<?php if ( $latest_vehicle_query->have_posts() ) { ?>
	
						
						<?php 
						$animation_delay = 150;
						while ( $latest_vehicle_query->have_posts() ) : $latest_vehicle_query->the_post();?>
								
								<div class="grid_item grid-col-<?php echo $latest_vehicle_columns;?> "  data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="<?php echo $animation_delay;?>">
										<?php get_template_part('templates/loop','one');?>
								</div>
							   <?php 
							   $animation_delay = $animation_delay + 100;
							   ?>
						<?php 
						endwhile;
						
						?>

					<?php } else {
						bonuin_no_posts();
						wp_reset_postdata();
					}	
					?>	
			</div><!--end  of latest cars container-->
		
 </div>
 
 <?php 
 
 
 
 function bonuin_latest_vehicles_shortcode_script(){
	 global $latest_vehicle_columns;
	 $column_seperator = '';
	 switch ($latest_vehicle_columns){
		 case 'five':
			$column_seperator = 20;
		 break;
		 case 'four':
			$column_seperator = 30;
		 break;
		 case 'three':
			$column_seperator = 50;
		 break;
	 }
	 ?>
	 <script>
			var $container = jQuery('.latest_vehicles_grid');
			// init
			$container.isotope({
			  // options
			  itemSelector: '.grid_item',
				masonry: {
				
				  columnWidth: <?php echo $column_seperator;?>,
				  isFitWidth: true
				}
			});


			
	</script>
	 
	 <?php
	 
 }
 add_action('wp_print_footer_scripts','bonuin_latest_vehicles_shortcode_script',90);
 

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
?>
