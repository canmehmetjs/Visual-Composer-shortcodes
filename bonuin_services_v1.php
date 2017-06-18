<?php 
add_shortcode( 'bonuin_services_v1', 'initialize_bonuin_services_v1' );
function initialize_bonuin_services_v1( $atts , $content =  null ) {
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
  
<section class="valmy_services_v2 section_padding grey">
    
    <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12 col-xs-12">
                <div class="section_title1 bonuin_animate">
                     <h2 class="underline">Why choose Bonuin</h2>
                    <p>Responsive & Retina ready, Kerri looks awesome and elegant on all devices and screen sizes. <br>Creativity unleashed in a stylish PSD theme.</p>
                </div>
            </div>
        </div>
		
        <div class="col-md-4">
            <div class="valmy_services_v2_item bonuin_animate">
                <i class="tomplabs-plus"></i>
                <h2>FINANCING MADE EASY</h2>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="valmy_services_v2_item bonuin_animate">
                <i class="tomplabs-pulse"></i>
                <h2>WIDE RANGE OF BRANDS</h2>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="valmy_services_v2_item bonuin_animate">
                <i class="tomplabs-shopping-cart"></i>
                <h2>TRUSTED BY THOUSANDS</h2>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="valmy_services_v2_item bonuin_animate">
                <i class="tomplabs-settings-1"></i>
                <h2>CREATIVE ELEMENTS</h2>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="valmy_services_v2_item bonuin_animate">
                <i class="tomplabs-shop"></i>
                <h2>HIGHLY CUSTOMIZABLE</h2>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="valmy_services_v2_item bonuin_animate">
                <i class="tomplabs-transport"></i>
                <h2>LOADS OF LAYOUTS</h2>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were.</p>
            </div>
        </div>
        
    </div>

</section>

<?php } ?>