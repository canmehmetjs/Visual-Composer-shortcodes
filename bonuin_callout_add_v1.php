<?php
add_shortcode( 'bonuin_callout_ad_v1', 'initialize_bonuin_callout_ad_v1' );
function initialize_bonuin_callout_ad_v1( $atts ) {
    extract( shortcode_atts( array(
		'banner_color'      		 => 'green',
		'banner_top_small_title'     => 'BONUIN AD',
		'banner_big_title'       	 => 'Boost your vehicles sales. Upgrade your package and start adding your advert.',
		'banner_description'		 => '',
		'banner_button_title'		 => 'Choose packages',
		'banner_url'		 		 => '#',
		'banner_image'      		 => ''
		
	 ), $atts ));
	 
	ob_start();
	
	$img_id = '';
	$banner_image_final = '';
	$img_id = preg_replace('/[^\d]/', '', $banner_image);
	$banner_image_final = wp_get_attachment_image($img_id, 'full');
	
	if ($banner_color == ''){
		$banner_color = 'green';
	}
  ?>  

	<div class="ad_shortcode_callout_v1 <?php echo $banner_color;?>">
		<div class="content_left">
			<div class="ad_category ">
				<?php echo $banner_top_small_title;?>
			</div>
			<div class="ad_title">
				<h1><?php echo $banner_big_title;?></h1>
			</div>
			<div class="ad_description">
				<p><?php echo $banner_description;?></p>
			</div>
			<div class="ad_button bonuin_animate fadeIn">
				<a href="<?php echo $banner_url;?>" class="btn btn_circle white"><?php echo esc_attr($banner_button_title);?></a>
			</div>
		</div>
		<div class="content_right bonuin_animate fadeInRight">
			<?php echo $banner_image_final;?>
		</div>
	</div>
    


<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>