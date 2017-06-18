<?php
add_shortcode( 'bonuin_callout_v3', 'initialize_bonuin_callout_v3' );
function initialize_bonuin_callout_v3( $atts ) {
    extract( shortcode_atts( array(
		'callout_image'      		 => '#',
		'callout_title'     		 => 'Get Bonuin now and start building your website.',
		'callout_button_type'        => '',
		'callout_button_color'        => '',
		'callout_button_title'		 => '',
		'callout_button_big_title'		 => '',
		'callout_button_small_title'		 => '',
		'callout_button_link'		 => 'Purchase on Themeforest'

	 ), $atts ));

	ob_start();




<style>
    .callout_v3 {
        padding-top: 80px;
        background-color: #1b152b;
        display: table;
        width: 100%;
        min-height: 500px;
        overflow: hidden;
        position: relative;
    }
    .callout_v3.download_app_view{
         min-height: 800px;
    }
    .callout_v3.signup_app_view{
         min-height: 800px;
    }
    .callout_v3.with_background{
       background-size:cover;
       background-image:url('<?php echo get_template_directory_uri() . '/assets/images/covers/cover_01.jpg';?>')
    }
    .callout_v3.with_background::before {
        position: absolute;
        background: rgba(0, 0, 0, 0.47);
        content: "";
        top: 0;
        height: 100%;
        width: 100%;
    }
    .callout_v3 h2,
    .callout_v3 p {
        color: #fff;
    }

    .callout_v3.download_app_view .download_app_buttons {
        text-align: center;
    }
    .callout_v3.download_app_view .image_below_app {
        position: absolute;
        text-align: center;
        width: 100%;
        left: 0;
        right: 0;
        margin-top: 58px;
    }


    .callout_v3.signup_app_view .signup_button {
        display: block;
        text-align: center;
        position: relative;

    }

    .callout_v3.signup_app_view .signup_image_bottom {
       position: absolute;
        text-align: center;
        width: 100%;
        left: 0;
        right: 0;
        margin-top: 58px;
    }



</style>
<div class="callout_v3 with_background download_app_view">
    <div class="container">


        <div class="section_title1 bonuin_animate fadeIn">
            <h2 class="underline">Why choose Bonuin</h2>
            <p>Responsive &amp; Retina ready, Bonuin looks awesome and elegant on all devices and screen sizes.
            <br>Creativity unleashed in a stylish Wordpress theme.</p>
        </div>
        //
        <div class="signup_button">
            <a href="" class="btn btn_circle white">SIGN UP NOW</a>
        </div>
        <div class="signup_image_bottom">
             <img src="<?php echo get_template_directory_uri() . '/assets/images/macbook-image1.png';?>">
        </div>
        //
        <ul class="list-inline download_app_buttons">
            <li>
                <a class="btn btn_with_icon box white_outline bonuin_animate fadeInLeft" href="#">
                    <i class="icon tomplabs-apple-1"></i><span>Download for</span>
                    <br>Apple iOS
                    <br>
                </a>
            </li>
            <li>

                <a class="btn btn_with_icon box white_outline bonuin_animate fadeInRight" href="#">
                    <i class="icon tomplabs-android-logo"></i><span>Download for</span>
                    <br>Android
                    <br>
                </a>
            </li>
        </ul>


        <div class="image_below_app bonuin_animate fadeInUp">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/app2.png';?>">
        </div>

    </div>
</div>





<?php

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
?>
