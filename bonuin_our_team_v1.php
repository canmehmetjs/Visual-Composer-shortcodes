<?php 
add_shortcode( 'bonuin_our_team_v1', 'initialize_bonuin_our_team_v1' );
function initialize_bonuin_our_team_v1( $atts ) {
    extract( shortcode_atts( array(
		'member_items'      		 => '3',
		'style'      		 => 'with_bg'
		
	 ), $atts ));
	 
	
	if ($style == ''){
		$with_bg = 'with_bg';
	}
	 if ($member_items == ''){
		 $member_items = 3;
	 }
?>
<div class="bonuin_publishers_container">
				
			
			
					<?php 
					
					$args = array( 'post_type' => 'our_team', 'posts_per_page' => 20 );
					
					$our_team_query = new WP_Query( $args );
					if ( $our_team_query->have_posts() ) { ?>
						
						<?php
						$animation_delay = 150;
						while ( $our_team_query->have_posts() ) : $our_team_query->the_post();?>
							<?php 
							$post_id = get_the_ID();
							
							// GET TEAM MEMBER INFOS
							$name_surname = get_post_meta( $post_id, 'bonuin_our_team_member_name', TRUE );							
							$position 	  = get_post_meta( $post_id, 'bonuin_our_team_member_position', TRUE );							
							$bio	 	  = get_post_meta( $post_id, 'bonuin_our_team_member_description', TRUE );							
							$member_email = get_post_meta( $post_id, 'bonuin_our_team_member_email', TRUE );							
							
							
							
							$attachment_id = get_post_thumbnail_id($post_id , 'bonuin_our_team');
							$image = wp_get_attachment_image_url( $attachment_id, 'bonuin_our_team' );
							
							// Social Links
							$check_enabled_socials = get_post_meta( $post_id, 'bonuin_member_settings_enable_socials', TRUE );	 
							if ($check_enabled_socials == 'on'){
								$facebook 	= get_post_meta( $post_id, 'bonuin_our_team_member_facebook', TRUE );		
								$twitter  	= get_post_meta( $post_id, 'bonuin_our_team_member_twitter', TRUE );		
								$pinterest  = get_post_meta( $post_id, 'bonuin_our_team_member_pinterest', TRUE );		
								$google  	= get_post_meta( $post_id, 'bonuin_our_team_member_google', TRUE );		
								$dribbble  	= get_post_meta( $post_id, 'bonuin_our_team_member_dribbble', TRUE );		
								$instagram  = get_post_meta( $post_id, 'bonuin_our_team_member_instagram', TRUE );		
								$linkedin  	= get_post_meta( $post_id, 'bonuin_our_team_member_linkedin', TRUE );		
								$youtube  	= get_post_meta( $post_id, 'bonuin_our_team_member_youtube', TRUE );		
								$viber  	= get_post_meta( $post_id, 'bonuin_our_team_member_viber', TRUE );	
							}
								

							
							?>
							<div class="list_publisher_item our_team_member <?php if ($style == 'with_border'){echo 'our_team_with_borders';}?>" data-aos-easing="ease-in-sine" data-aos="fade-in" data-aos-delay="<?php echo $animation_delay;?>">
								<div class="team_user_image" style="background-image:url('<?php echo $image;?>');">
									
								</div>
								<div class="user_name">
									<h3><?php echo esc_attr($name_surname);?></h3>
									<p><?php echo esc_attr($position);?></p>
								</div>
								
								<?php if ($check_enabled_socials == 'on'){?>
									<div class="user_socials">
										<ul class="user_publishers_social">
											<?php if ($facebook != ''){?>
												<li><a href="<?php echo esc_attr($facebook);?>" target="_blank"><i class="tomplabs-facebook-logo"></i></a></li>
											<?php } ?>
											
											<?php if ($twitter != ''){?>
												<li><a href="<?php echo esc_attr($twitter);?>" target="_blank"><i class="tomplabs-twitter-3"></i></a></li>
											<?php } ?>
											
											<?php if ($linkedin != ''){?>
												<li><a href="<?php echo esc_attr($linkedin);?>" target="_blank"><i class="tomplabs-linkedin-logo"></i></a></li>
											<?php } ?>
											
											<?php if ($instagram != ''){?>
												<li><a href="<?php echo esc_attr($instagram);?>" target="_blank"><i class="tomplabs-instagram-1"></i></a></li>
											<?php } ?>
											
											<?php if ($pinterest != ''){?>
												<li><a href="<?php echo esc_attr($pinterest);?>" target="_blank"><i class="tomplabs-pinterest-2"></i></a></li>
											<?php } ?>
											
											<?php if ($google != ''){?>
												<li><a href="<?php echo esc_attr($google);?>" target="_blank"><i class="tomplabs-google"></i></a></li>
											<?php } ?>
											
											<?php if ($dribbble != ''){?>
												<li><a href="<?php echo esc_attr($dribbble);?>" target="_blank"><i class="tomplabs-dribble-logo"></i></a></li>
											<?php } ?>
											
											<?php if ($youtube != ''){?>
												<li><a href="<?php echo esc_attr($youtube);?>" target="_blank"><i class="tomplabs-youtube-2"></i></a></li>
											<?php } ?>
											
											<?php if ($viber != ''){?>
												<li><a href="<?php echo esc_attr($viber);?>" target="_blank"><i class="tomplabs-viber-1"></i></a></li>
											<?php } ?>
										</ul>
									</div>
								<?php } ?>
								
								
								
								<?php 
								if ($member_email != ''){?>
									<div class="bonuin_seperator_v1"></div>
									<div class="view_profile">
										<a href="mailto:<?php echo esc_attr($member_email);?>"><?php _e('Send Email','bonuin_theme');?></a>
									</div>
								<?php } ?>
								
			
							</div> <!-- end of <div class="list_publisher_item our_team_member"> -->
									  
						<?php 
						$animation_delay = $animation_delay + 100;
						endwhile;
						wp_reset_postdata();
						?>
					
					<?php } else {
						bonuin_no_posts();
						wp_reset_postdata();
					}	
					?>		
			
			
		
								
			
		
</div>
<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	return $content; 
}
?>