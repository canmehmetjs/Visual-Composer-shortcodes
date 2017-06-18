<?php
add_shortcode( 'bonuin_pricing_v2', 'initialize_bonuin_pricing_v2' );
function initialize_bonuin_pricing_v2( $atts ) {
    extract( shortcode_atts( array(
		'pricing_items'      => '',
		'columns'      		 => '',
		'display_button'     => '',
		'button_placeholder' => '',
		'button_url'    	 => '',
		

	 ), $atts ));

	ob_start();

	if ($display_button == 'yes'){
		if ($button_placeholder == ''){
			$button_placeholder = 'Add Text';
		}
		if ($button_url == ''){
			$button_url = '#';
		}
	}	

	if ($columns == ''){
		$columns = 3;
	}
	$bootstraped_columns = bonuin_bootsrap_column($columns);
	$currency_position = get_currency_position();
	$currency_sign = get_bonuin_currency_sign();
	$currency_code = ot_get_option('bonuin_currency');
?>

<div class="bonuin_pricing2">
	
	<div class="bonuin_pricing2_container">
	<?php 
		$args= '';		
		$args = array(
			'post_type'      => 'bonuin_membership',
			'post_status'    => 'publish',
			'order_by'		 => 'menu_order',
			'posts_per_page' 	=> $pricing_items
			
		);
		$loop = new WP_Query( $args );
		$animation_delay = 150;				
		while ( $loop->have_posts() ) : $loop->the_post();
			$get_package_id = get_the_ID();
			
			
			$get_package_slug = get_the_slug();
			
			$package_price = get_field('membership_plan_price');
			$package_duration = get_field('membership_plan_duration');
			$package_listing_limit = get_field('membership_listing_limit');
			$package_listing_image_limit = get_field('membership_vehicle_image_upload_limit');
			$enable_feature_listing = get_field('enable_featured_listing');
			$package_feature_listing_limit = get_field('membership_featured_listing_limit');
			

	
			$duration = '';
			switch ($package_duration){
				case 'monthly':
					$duration = __('MO','bonuin_theme');
				break;
				case 'yearly':
					$duration = __('YE','bonuin_theme');
				break;
			}
			
			$package_hide_currency = FALSE;
			$package_hide_duration = FALSE;
			if ($package_price == 0){
				$package_price = __('Free','bonuin_theme');
				$package_hide_currency = TRUE;
				$package_hide_duration = TRUE;
			}
										
										
	?>

	
			<div class="<?php echo $bootstraped_columns;?>" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="<?php echo $animation_delay;?>">
				<div class="pricing_item">
					<div class="pricing_price">
						<div class="pricing_title"><h2><?php the_title();?></h2></div> 
						
						<div class="pricing_price">
							<?php 
						switch ($currency_position){
							case 'left':
							case 'left-with-space':
								?>
								<?php if ($package_price == 0){
									$currency_sign = '';
									
								}
								?>
								<!-- HIDE CURRENCY IF ITS FREE -->
								<?php if ($package_hide_currency != TRUE){?>
									<span class="pricing-currency"><?php echo esc_attr($currency_sign);?></span>
								<?php } ?>
								
								<span class="pricing-value"><?php echo esc_attr($package_price);?></span>
								<!-- HIDE DURATION IF ITS FREE -->
								<?php if ($package_hide_duration != TRUE){?>
									/<span class="pricing-duration"><?php echo esc_attr($duration);?></span>
								<?php } ?>
								
								<?php
							break;
							case 'right':
							case 'right-with-space':
								?>
								<span class="pricing-value"><?php echo esc_attr($package_price);?></span>
								
								<!-- HIDE CURRENCY IF ITS FREE -->
								<?php if ($package_hide_currency != TRUE){?>
									<span class="pricing-currency"><?php echo esc_attr($currency_sign);?> </span>
								<?php } ?>
								
								<!-- HIDE DURATION IF ITS FREE -->
								<?php if ($package_hide_duration != TRUE){?>
									<span class="pricing-duration">/<?php echo esc_attr($duration);?></span>
								<?php } ?>
								
								
								<?php
							break;
							
						}
						?>
							
						</div>
									
									
						
					</div>
					
					
					<hr>
					<div class="pricing_features">
								
						<ul>
							<li><strong><?php echo esc_attr($package_listing_limit);?></strong> <?php _e('Listings','bonuin_theme');?></li>
							<li><strong><?php echo esc_attr($package_listing_image_limit);?></strong> <?php _e('Vehicle Images','bonuin_theme');?></li>
							<?php 
							if ($enable_feature_listing == TRUE){?>
								<li><strong><?php echo esc_attr($package_feature_listing_limit);?></strong> <?php _e('Featured listings','bonuin_theme');?></li>
							<?php }else{?>
								<li><strong>0</strong> <?php _e('Featured listings','bonuin_theme');?></li>
							<?php } ?>
							<li><?php _e('<strong>24/7</strong> Support','bonuin_theme');?></li>
						</ul>
					</div>
					<?php if ($display_button == 'yes') {?>
						<div class="pricing_button">
							<a href="<?php echo esc_attr($button_url);?>" class="btn btn_box_round red_outline"><?php echo esc_attr($button_placeholder);?></a>
						</div>
					<?php } ?>
					
				</div>
				
				
			</div>
	
	
	<?php
	$animation_delay = $animation_delay + 100;
	endwhile; ?>
	
	</div>
	
</div>

<?php

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
?>
