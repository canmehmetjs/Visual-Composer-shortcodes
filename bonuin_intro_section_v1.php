<?php 
add_shortcode( 'bonuin_intro_section_v1', 'initialize_bonuin_intro_section_v1' );
function initialize_bonuin_intro_section_v1( $atts ) {
    extract( shortcode_atts( array(
		'intro_title'     		 => 'Bonuin for Enterprise gives you the clarity, collaboration, and control you need to power your design process—company-wide. And with unlimited projects and unlimited team members, it scales to fit your business needs, no matter how big or small.',
		'intro_image'      		 => ''
		
		
		
	 ), $atts ));
	 
	ob_start();
	
	$img_id = '';
	$banner_image_final = '';
	$img_id = preg_replace('/[^\d]/', '', $intro_image);
	$banner_image_final = wp_get_attachment_url($img_id);
	
	
	
  ?> 
  <div class="intro">
	<h2 data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="150">
		<?php echo esc_attr($intro_title);?>
	</h2>
	<img src="<?php echo $banner_image_final;?>" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="250">
</div>


<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>
