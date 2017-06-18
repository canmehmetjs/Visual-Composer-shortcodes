<?php
add_shortcode( 'bonuin_twitter_v1', 'initialize_bonuin_twitter_v1' );
function initialize_bonuin_twitter_v1( $atts ) {
    
	extract( shortcode_atts( array(
		'icon_type'  			 => 'service_with_icon',
		'twitter_carousel_icon'  => '',
		'tweet_items'      		 => '3'
		
	), $atts ));

	ob_start();
	
	
	if ($twitter_carousel_icon == ''){
		$twitter_carousel_icon = 'tomplabs-twitter-2';
	}
	
	if ($icon_type == ''){
		$icon_type = 'service_with_icon';
	}else if ($icon_type == 'serice_with_image'){
		$profile_image = bonuin_get_twitter_info('profile_image_url');
	}
	
	
	wp_enqueue_style( 'flexslider_css');
	wp_enqueue_script( 'flexslider_js' );
	
	
	


?>

	<?php 
	
	$screen_name = bonuin_get_twitter_info('screen_name');
	$url = bonuin_get_twitter_info('url');
	?>
	<div class="twitter_feeds" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150">

        <div class="twitter_feed text-center">
			<?php 
			if ($icon_type == 'service_with_icon'){?>
				 <i class="<?php echo esc_attr($twitter_carousel_icon);?>"></i>
			<?php }else{ ?>
			     <a href="<?php echo esc_attr($url);?>" target="_blank">
					<img src="<?php echo esc_attr($profile_image);?>">
				 </a>
				 
			<?php } ?>
           
            <p class="company_twitter">
				
				<a href="<?php echo esc_attr($url);?>" target="_blank">@<?php echo esc_attr($screen_name);?></a>
				
			</p>
            <ul id="user_tweets_carousel" class="slides">
                <?php bonuin_get_tweets('vc_shortcode' , $tweet_items ); ?>
            </ul>

        </div>

    </div>

		<?php 
		function print_shortcode_twitter_carousel_script(){
			
			?>
			
			<script type="text/javascript">
				// Can also be used with $(document).ready()
				jQuery(document).ready(function() {
				  jQuery('.twitter_feed').flexslider({
					animation: "fade",
					minItems : 1,
					directionNav:false,
					touch : true
				  });
				});
        </script>
			
		<?php } 
		add_action('init','print_shortcode_twitter_carousel_script');
		add_action('wp_footer','print_shortcode_twitter_carousel_script',10);
		?>
	  	 
		
		


<?php

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
?>
