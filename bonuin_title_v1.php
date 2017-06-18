<?php 
add_shortcode( 'bonuin_title_v1', 'initialize_bonuin_title_v1' );
function initialize_bonuin_title_v1( $atts ) {
    extract( shortcode_atts( array(
		'title'      					 => '',
		'title_description'      		 => ''
		
		
	 ), $atts ));
	 
	ob_start();
	
	
	
  ?> 
		<div class="section_title1 " data-aos="fade-in" data-aos-delay="200">
			<h2 class="underline"><?php echo $title;?></h2>
			<p><?php echo $title_description;?></p>
		</div>


<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>
