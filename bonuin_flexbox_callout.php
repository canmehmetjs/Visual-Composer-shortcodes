<?php 
add_shortcode( 'bonuin_flexbox_callout_v1', 'initialize_bonuin_flexbox_callout_v1' );
function bonuin_flexbox_callout_v1( $atts ) {
    extract( shortcode_atts( array(
		'text_align'     		    => '',
		'callout_title'      		=> 'Creative Element'
		'callout_description'      	=> 'Mentitum ita vidisse de et dolor iudicem imitarentur, summis fabulas sed graviterque, varias nescius id dolore ipsum, probant an duis vidisse, quae vidisse se eiusmod, pariatur reprehenderit hic senserit non quibusdam quo arbitror. De esse ex illum, iis nisi probant expetendis nam deserunt ipsum proident deserunt, aut de esse noster esse.'
		'callout_button_type'      	=> 'button_type'
		'callout_button_title'      => 'button_title'
		'callout_image'      		=> ''
		
		
	 ), $atts ));
	 
	ob_start();
	
	$img_id = '';
	$banner_image_final = '';
	$img_id = preg_replace('/[^\d]/', '', $intro_image);
	$banner_image_final = wp_get_attachment_url($img_id);
	
	
	
  ?> 
  <div class="intro">
	<h2>
		<?php echo esc_attr($intro_title);?>
	</h2>
	<img src="<?php echo $banner_image_final;?>" >
</div>


<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>
