<?php

function car_paint_job_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'automobile_hub_mail_text' );
    $wp_customize->remove_control( 'automobile_hub_mail_text' );

    $wp_customize->remove_setting( 'automobile_hub_call_text' );
    $wp_customize->remove_control( 'automobile_hub_call_text' );

    $wp_customize->remove_setting( 'automobile_hub_search_icon' );
    $wp_customize->remove_control( 'automobile_hub_search_icon' );

    $wp_customize->remove_setting( 'automobile_hub_footer_widget_image' );
    $wp_customize->remove_control( 'automobile_hub_footer_widget_image' );

    $wp_customize->remove_setting( 'automobile_hub_tp_footer_bg_color_option' );
    $wp_customize->remove_control( 'automobile_hub_tp_footer_bg_color_option' );

    $wp_customize->remove_setting( 'automobile_hub_cart_icon' );
    $wp_customize->remove_control( 'automobile_hub_cart_icon' );

    $wp_customize->remove_setting( 'automobile_hub_slider_icon' );
    $wp_customize->remove_control( 'automobile_hub_slider_icon' );

    $wp_customize->remove_setting( 'automobile_hub_about_icon' );
    $wp_customize->remove_control( 'automobile_hub_about_icon' );

   	$wp_customize->remove_setting( 'automobile_hub_slider_content_layout' );
    $wp_customize->remove_control( 'automobile_hub_slider_content_layout' );

    $wp_customize->remove_setting( 'automobile_hub_tp_body_layout_settings' );
    $wp_customize->remove_control( 'automobile_hub_tp_body_layout_settings' );

    $wp_customize->remove_setting( 'automobile_hub_tp_color_option_link' );
    $wp_customize->remove_control( 'automobile_hub_tp_color_option_link' );
}
add_action( 'customize_register', 'car_paint_job_remove_customize_register', 11 );

function car_paint_job_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'car_paint_job_paint_job_arrows', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'car_paint_job_paint_job_arrows', array(
		'label'       => esc_html__( 'Show / Hide Car Paint Job Section', 'automobile-hub' ),
		'priority' => 1,
		'section'     => 'car_paint_job_featured_car_section',
		'type'        => 'toggle',
		'settings'    => 'car_paint_job_paint_job_arrows',
	) ) );

	$wp_customize->add_setting('car_paint_job_slider_content_layout',array(
        'default' => 'CENTER-ALIGN',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('car_paint_job_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'car-paint-job'),
        'section' => 'automobile_hub_slider_section',
        'choices' => array(
        	'CENTER-ALIGN' => __('CENTER-ALIGN','car-paint-job'),
            'LEFT-ALIGN' => __('LEFT-ALIGN','car-paint-job'),        	
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','car-paint-job'),
        ),
	) );

	$wp_customize->add_setting('car_paint_job_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('car_paint_job_location',array(
		'label'	=> __('Add Location','car-paint-job'),
		'section'	=> 'automobile_hub_topbar',
		'type'		=> 'text'
	));

	//featured car section
    $wp_customize->add_section( 'car_paint_job_featured_car_section' , array(
    	'title'      => __( 'Car Paint Job Services Settings', 'car-paint-job' ),
		'panel' => 'automobile_hub_panel_id',
		'priority' => 4,
	) );
	$wp_customize->add_setting('car_paint_job_featured_car_section_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('car_paint_job_featured_car_section_tittle',array(
		'label'	=> __('Section Title','car-paint-job'),
		'section'	=> 'car_paint_job_featured_car_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$car_paint_job_offer_cat[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$car_paint_job_offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('car_paint_job_featured_car_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'automobile_hub_sanitize_choices',
	));
	$wp_customize->add_control('car_paint_job_featured_car_section_category',array(
		'type'    => 'select',
		'choices' => $car_paint_job_offer_cat,
		'label' => __('Select Category','car-paint-job'),
		'section' => 'car_paint_job_featured_car_section',
	));
}
add_action( 'customize_register', 'car_paint_job_customize_register' );
