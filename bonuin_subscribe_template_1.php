<?php
add_shortcode( 'bonuin_subscribe_template_1', 'initialize_bonuin_subscribe_template_1' );
function initialize_bonuin_subscribe_template_1( $atts ) {
    extract( shortcode_atts( array(
		'subscribe_title'     		 => 'Subscribe to our latest offers',
		'name_input_text'     		 => 'Your name',
		'email_input_text'        => 'Your Email',
		'button_placeholder'        => 'Subscribe to offers',
		'notification'		 => 'By clicking "Subscribe to offers!" I agree to this site sending me offers.',
    'callout_bg_color' => ''


	 ), $atts ));

	ob_start();



  if ($callout_bg_color == ''){
      $callout_bg_color = '#323a45';
  }


  ?>



<div class="subscribption_callout" style="background-color:<?php echo esc_attr($callout_bg_color);?>" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150">
    <div class="subscrition_content">
        <div class="container">
                <h1><?php echo esc_attr($subscribe_title);?></h1>
                <form class="bonuin_form" method="POST" id="bonuin_mailchimp_subscribe_form">
                  <div class="form-inline ">
    							<div class="form-group">
    								<div class="form_input_with_icon add_postfix">
    									<label for="mailchimp_name"><i class="tomplabs-user-2"></i></label>
    									<input type="text" id="mailchimp_name" name="mailchimp_name" class="bonuin_input2 required" placeholder="<?php echo esc_attr($name_input_text);?>"  required aria-required="true">

    								</div>
    							</div>

    							<div class="form-group">
    								<div class="form_input_with_icon add_postfix">
    									<label for="mailchimp_email"><i class="tomplabs-envelope"></i></label>
    									<input type="text" id="mailchimp_email" name="mailchimp_email" class="bonuin_input2 required" placeholder="<?php echo esc_attr($email_input_text);?>" required aria-required="true">

    								</div>
    							</div>
    							<div class="form-group">

    								<input type="submit" value="<?php echo esc_attr($button_placeholder);?>" class="bonuin_button2" tabindex="6" id="submit" name="submit">

    							</div>
                   <p><?php echo esc_attr($notification);?></p>
                </form>
				<div class="mailchimp_response"></div>
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
