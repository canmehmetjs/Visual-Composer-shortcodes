<?php 
add_shortcode( 'bonuin_callout_v2', 'initialize_bonuin_callout_v2' );
function initialize_bonuin_callout_v2( $atts ) {
    extract( shortcode_atts( array(
		'callout_image'      		 => '#',
		'callout_title'     		 => 'Get Bonuin now and start building your website.',
		'callout_title_color'     		 => '#fff',
		'callout_button_type'        => '',
		'callout_button_color'        => '',
		'callout_button_title'		 => '',
		'callout_button_big_title'		 => '',
		'callout_button_small_title'		 => '',
		'callout_button_link'		 => 'Purchase on Themeforest'
		
	 ), $atts ));
	 
	ob_start();
	
	$img_id = '';
	$banner_image_final = '';
	$img_id = preg_replace('/[^\d]/', '', $callout_image);
	$banner_image_final = wp_get_attachment_url($img_id);
	
	
	$button_color_selected = $callout_button_color;
	
	
	if ($callout_button_type == 'btn_creative_circle' || $callout_button_type == 'btn_creative_box'){
		$callout_button_title = '';
	} 
	
	if ($button_color_selected == ''){
		$button_color_selected = 'red';
	}
	
	
  ?> 
  
  <div class="bonuin_callout_v2" style="background-image:url('<?php echo $banner_image_final;?>')" >
  
		<div class="bonuin_callout_v2_content">
			<div class="bonuin_callout_v2_content_item" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150">
				<h2 style="color:<?php echo esc_attr($callout_title_color);?>"><?php echo esc_attr($callout_title);?></h2>
			</div>
			<div class="bonuin_callout_v2_content_item ">
				<div class="callout_btn" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="350">
				
						 <?php 
						switch($callout_button_type){
							case 'btn_circle':
							?>
								<a href="<?php echo $callout_button_link;?>" class="btn btn_circle <?php echo $button_color_selected;?>"><?php echo esc_attr($callout_button_title);?></a>
							<?php 
							break;
							case 'btn_box':
							?>
								 <a href="<?php echo $callout_button_link;?>" class="btn btn_box <?php echo $button_color_selected;?>"><?php echo esc_attr($callout_button_title);?></a>
							<?php 
							break;
							case 'btn_round':
							?>
								 <a href="<?php echo $callout_button_link;?>" class="btn btn_box_round <?php echo $button_color_selected;?>"><?php echo esc_attr($callout_button_title);?></a>
							<?php 
							break;
							
							
							case 'btn_creative_circle':
							?>
								<a class="btn btn_with_icon circle <?php echo $button_color_selected;?>" href="<?php echo $callout_button_link;?>">
									<i class="icon tomplabs-apple-1"></i><span><?php echo esc_attr($callout_button_small_title);?></span> <br><?php echo esc_attr($callout_button_big_title);?><br>
								</a>
							<?php 
							break;
							
							case 'btn_creative_box':
							?>
								<a class="btn btn_with_icon box <?php echo $button_color_selected;?>" href="<?php echo $callout_button_link;?>">
									<i class="icon tomplabs-apple-1"></i><span><?php echo esc_attr($callout_button_small_title);?></span> <br><?php echo esc_attr($callout_button_big_title);?><br>
								</a>
							<?php 
							break;
						}
						?>
				</div>
			</div>	
		</div>
		
	</div>	



<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>
