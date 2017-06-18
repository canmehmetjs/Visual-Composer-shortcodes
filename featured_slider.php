<div class="featured_vehicles_slider_v1 module_latest_cars grey">
        
		
		  <?php 
		
		  
			$args = array(
					'post_type' => 'vehicles',
					'post_status' => 'publish',
					'posts_per_page' => 20,
					'meta_key ' => 'bonuin_featured_listing',
					'meta_value ' => 'Yes'
				);
				$the_query = new WP_Query( $args );
		 
		 ?>
				<div class="featured_vehicles_content latest_cars_container user_listings">
									<?php if ( have_posts() ) { ?>


										<?php while ( $the_query->have_posts() ) : $the_query->the_post();
											$vehicle_author = get_the_author(); 
											$post_id = get_the_ID();
											
											$attachment_id = get_post_thumbnail_id($post->ID);
											
										?>
										<div class="col-md-3">
											<?php get_template_part('templates/loop-one');?>
										</div>
										
												
										<?php endwhile; ?>

									<?php } else {
										bonuin_no_posts();
										wp_reset_postdata();
									}	
									?>	
							</div><!--end  of latest cars container-->
							
							
									
			
							
		
 </div>
   
