<?php 
add_shortcode( 'bonuin_contact_form_v1', 'initialize_bonuin_contact_form_v1' );
function initialize_bonuin_contact_form_v1( $atts ) {
    extract( shortcode_atts( array(
		'email_address'      		 => '',
		
		
	 ), $atts ));
	 
	ob_start();
	
	
	
	
  ?> 
  
  
<form class="bonuin_form" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150">
                        <div class="form-inline">
                            <div class="form-group bonuin_form_style_1" >
										
										<div class="form_input_with_icon">
											<label for="listing_title"><i class="tomplabs-user-2"></i></label>
											<input type="text" id="contact_user-name" name="contact_user-name" class="bonuin_input " placeholder="<?php _e('Please type your name','bonuin_theme');?>" value="" required="" aria-required="true">
											
										</div>
							</div>
                           <div class="form-group bonuin_form_style_1" data-aos="fade-in" data-aos-delay="350">
										
										<div class="form_input_with_icon">
											<label for="listing_title"><i class="tomplabs-envelope"></i></label>
											<input type="email" id="contact_user-email" name="contact_user-email" class="bonuin_input " placeholder="<?php _e('Please type your email','bonuin_theme');?>" value="" required="" aria-required="true">
											
										</div>
							</div>
                        </div>
                        <div class="form-inline">
                            <div class="form-group bonuin_form_style_1">
										
										<div class="form_input_with_icon">
											<label for="contact_user-subject"><i class="tomplabs-bolt"></i></label>
											<input type="text" id="contact_user-subject" name="contact_user-subject" class="bonuin_input " placeholder="<?php _e('Please type subject','bonuin_theme');?>" value="" required="" aria-required="true">
											
										</div>
							</div>
                           <div class="form-group bonuin_form_style_1">
										
										<div class="form_input_with_icon">
											<label for="contact_user-phone"><i class="tomplabs-smartphone"></i></label>
											<input type="email" id="contact_user-phone" name="contact_user-phone" class="bonuin_input " placeholder="<?php _e('Please type your phone','bonuin_theme');?>" value="" required="" aria-required="true">
											
										</div>
							</div>
                            
                        </div>
                        <div class="form-group textarea bonuin_form_style_1">
										<label for="contact_user-message"><i class="tomplabs-chat"></i></label>
										<textarea class="bonuin_textarea " name="contact_user-message" id="contact_user-message" required="" placeholder="<?php _e('Your message','bonuin_theme');?>" value="" aria-required="true"></textarea>
							</div>
                       <button type="submit" class="valmy_button1"><?php _e('Send Message','bonuin_theme');?></button>
                </form>


<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>
