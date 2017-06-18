<?php
add_shortcode( 'bonuin_featured_vehicles_v1', 'initialize_bonuin_featured_vehicles_v1' );
function initialize_bonuin_featured_vehicles_v1( $atts ) {
    extract( shortcode_atts( array(
		'number_of_vehicles'      	 => '',
		'number_of_columns'      	 => ''
	), $atts ));

	ob_start();




global $featured_vehicles_column;
$featured_vehicles_column = $number_of_columns;
if ($featured_vehicles_column == ''){
	$featured_vehicles_column = 'five';
}
?>

<div class="user_listings <?php echo esc_attr($featured_vehicles_column);?>-col-listing">
       
			<?php 
				$featured_vehicles_args = array(
					'post_type' => 'vehicles',
					'post_status' => 'publish',
					'posts_per_page' => $number_of_vehicles,
					'order '	=> 'DESC',
					'orderby'	=> 'date',
					'meta_key ' => 'bonuin_featured_listing',
					'meta_value ' => 'Yes'
					
				);
				$featured_vehicles_query = new WP_Query( $featured_vehicles_args );
		 
			?>
			<div class="grid_items_container featured_vehicles_grid">
					<?php if ( $featured_vehicles_query->have_posts() ) { ?>

		
						<?php 
						$animation_delay = 150;
						while ( $featured_vehicles_query->have_posts() ) : $featured_vehicles_query->the_post();?>
			
								<div class="grid_item grid-col-<?php echo $featured_vehicles_column;?> " data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="<?php echo $animation_delay;?>" >
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
 
 function bonuin_featured_vehicles_shortcode_script(){
	 global $featured_vehicles_column;
	 $column_seperator = '';
	 switch ($featured_vehicles_column){
		 case 'five':
			$column_seperator = 20;
		 break;
		 case 'four':
			$column_seperator = 30;
		 break;
		 case 'three':
			$column_seperator = 40;
		 break;
	 }
	 ?>
	 <script>
			var $container = jQuery('.featured_vehicles_grid');
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
 add_action('wp_print_footer_scripts','bonuin_featured_vehicles_shortcode_script',90);
 

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
?>
