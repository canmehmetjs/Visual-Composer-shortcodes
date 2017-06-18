<?php
add_shortcode( 'bonuin_buttons', 'initialize_bonuin_buttons' );
function initialize_bonuin_buttons( $atts ) {
    extract( shortcode_atts( array(
		'button_type'        => '',
		'button_alignment'   => 'center',
		'button_color'       => '',
		'button_title'       => 'Click Me',
		'button_small_title' => 'Download for',
		'button_big_title'   => 'Android',
		'button_url'      	 => '#'
		
	 ), $atts ));
	 
	ob_start();
	
	
	
  ?>  
	<?php 
	
	$button_url_selected   = $button_url;
	
	$button_color_selected = $button_color;
	 
	if ($button_color_selected == ''){
		$button_color_selected = 'red';
	}
	 
	
	?>
	
	<div class="bonuin_button_wrapper" style="text-align:<?php echo $button_alignment;?>">
	
		<?php 
		switch($button_type){
			case 'btn_circle':
			?>
				<a href="<?php echo $button_url_selected;?>" class="btn btn_circle <?php echo $button_color_selected;?>"><?php echo esc_attr($button_title);?></a>
			<?php 
			break;
			case 'btn_box':
			?>
				 <a href="<?php echo $button_url_selected;?>" class="btn btn_box <?php echo $button_color_selected;?>"><?php echo esc_attr($button_title);?></a>
			<?php 
			break;
			case 'btn_round':
			?>
				 <a href="<?php echo $button_url_selected;?>" class="btn btn_box_round <?php echo $button_color_selected;?>"><?php echo esc_attr($button_title);?></a>
			<?php 
			break;
			
			
			case 'btn_creative_circle':
			?>
				<a class="btn btn_with_icon circle <?php echo $button_color_selected;?>" href="<?php echo $button_url_selected;?>">
					<i class="icon tomplabs-apple-1"></i><span><?php echo esc_attr($button_small_title);?></span> <br><?php echo esc_attr($button_big_title);?><br>
				</a>
			<?php 
			break;
			
			case 'btn_creative_box':
			?>
				<a class="btn btn_with_icon box <?php echo $button_color_selected;?>" href="<?php echo $button_url_selected;?>">
					<i class="icon tomplabs-apple-1"></i><span><?php echo esc_attr($button_small_title);?></span> <br><?php echo esc_attr($button_big_title);?><br>
				</a>
			<?php 
			break;
		}
		?>
		
	</div>
	<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
	
}
?>