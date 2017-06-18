
<div class="module_latest_cars section_padding grey">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-xs-12">
						<div class="section_title1 bonuin_animate">
							 <h2 class="underline">Latest vehicles</h2>
							<p>Responsive & Retina ready, Kerri looks awesome and elegant on all devices and screen sizes. <br>Creativity unleashed in a stylish PSD theme.</p>
						</div>
					</div>
				</div>
				<div class="vehicle_filter_conditions bonuin_animate">
					<ul class="list-inline bonuin_list">
						<li><button  class="filter" data-filter="all">All</button></li>
						<li><button  class="filter" data-filter=".condition-new">New</button></li>
						<li><button  class="filter" data-filter=".condition-used">Used</button></li>
						
					</ul>
				</div>		
		
					
					<?php 

						
								$args = array(
									'post_type' => 'vehicles',
									'post_status' => 'publish',
									'posts_per_page' => 20	
									
									
								);
								$the_query = new WP_Query( $args );
								
					?>

					
								<div class="latest_cars_container user_listings bonuin_animate">
									<?php if ( have_posts() ) { ?>


										<?php while ( $the_query->have_posts() ) : $the_query->the_post();
											
											$post_id = get_the_ID();
											$vehicle_condition = get_vehicle_info('vehicle_condition',$post_id);
											$vehicle_author = get_the_author(); 
											$vehicle_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'bonuin_vehicle_3_column_listing' );
										?>
										
										<div class="latest_car_item mix <?php if ($vehicle_condition !=''){echo 'condition-'.esc_attr($vehicle_condition->slug);}?>" >
											 <div class="vehicle_image">
													<a href="<?php echo the_permalink();?>">
														<div class="user_listing_car_image user_listing_item_wrapper__image" style="background-image:url(<?php echo $vehicle_image[0];?>);">
														</div>
														
													</a>
													
											 </div>
											 <div class="bottom">	
												<div class="vehicle_price">
													 <?php  get_vehicle_price();?>
												</div>
												 <div class="car_title clearfix">
													  <a href="<?php echo the_permalink();?>"><?php echo the_title();?></a>        
												 </div>
												 <div class="car_features">
														<ul class=" list-inline">
															<li><i class="tomplabs-road"></i> <?php echo get_vehicle_info('vehicle_mileage',$post_id);?></li>
															<li><i class="tomplabs-settings"></i> <?php echo get_vehicle_info('vehicle_year',$post_id);?></li>
															<li><i class="tomplabs-gas-station"></i> <?php echo get_vehicle_info('vehicle_consumption_urban',$post_id);?></li>
														
														</ul>	
												 </div>
											 </div>
											 
											 
																			 
																				
																			
										</div>
												
										<?php endwhile; ?>

									<?php } else {
										bonuin_no_posts();
										wp_reset_postdata();
									}	
									?>	
							</div><!--end  of latest cars container-->
							
						<div class="callout_btn">
							<a href="" class="valmy_button1" >Browse All</a>
						</div>	
			</div>
</div>

	



