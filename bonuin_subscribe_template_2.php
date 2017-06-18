<?php 
add_shortcode( 'bonuin_subscribe_template_2', 'initialize_bonuin_subscribe_template_2' );
function initialize_bonuin_subscribe_template_2( $atts ) {
    extract( shortcode_atts( array(
		'subscribe_title'     		 => 'Subscribe to our latest offers',
		'name_input_text'     		 => 'Your name',
		'email_input_text'        => 'Your Email',
		'button_placeholder'        => 'Subscribe to offers',
		'notification'		 => 'By clicking "Subscribe to offers!" I agree to this site sending me offers.',
		'callout_image'      		 => '#'
		
		
	 ), $atts ));
	 
	ob_start();
	
	$img_id = '';
	$banner_image_final = '';
	$img_id = preg_replace('/[^\d]/', '', $callout_image);
	$banner_image_final = wp_get_attachment_url($img_id);
	
	
	
	
  ?> 
  
<div class="mailchimp_subscribe_template_2" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150">
	<div class="mailchimp_s_t_left_part" >
		<h1><?php echo esc_attr($subscribe_title);?></h1>
		<form class="login_form" method="POST" id="bonuin_mailchimp_subscribe_form" >
			<fieldset>
				<div class="icon">
					<i class="tomplabs-user-2"></i>
				</div>
				<input type="text" class="bonuin_input" name="mailchimp_name" id="mailchimp_name" placeholder="<?php echo esc_attr($name_input_text);?>" required="">
			</fieldset>
			<fieldset>
				<div class="icon">
					<i class="tomplabs-envelope"></i>
				</div>
				<input type="email" class="bonuin_input" name="mailchimp_email" id="mailchimp_email" placeholder="<?php echo esc_attr($email_input_text);?>" required="">
			</fieldset>
			<div class="callout_btn">
				<input type="submit" value="<?php echo esc_attr($button_placeholder);?>" class="btn btn_box green" tabindex="6" id="submit" name="submit">
			</div>
			<p><?php echo esc_attr($notification);?></p>
		</form>
		<div class="mailchimp_response"></div>
	</div>
	<div class="mailchimp_s_t_right_part" style="background-image:url(<?php echo esc_attr($banner_image_final);?>">
		
	</div>
</div>


<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>
