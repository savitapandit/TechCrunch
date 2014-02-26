<?php

function wpstrapblogger_customize_register($wp_customize) {
   
   // General Options
   $wp_customize->add_section( 'wpstrapblogger_general_options' , array(
    'title'      => __('General Options','wpstrapblogger'),
    'priority'   => 30,
   ) );
   // Setting group for selecting header options
   $wp_customize->add_section( 'wpstrapblogger_header_options' , array(
    'title'      => __('Header Options','wpstrapblogger'),
    'priority'   => 35,
   ) );
   
   // Setting group for selecting home page options
   $wp_customize->add_section( 'wpstrapblogger_home_options' , array(
    'title'      => __('Home Page Options','wpstrapblogger'),
    'priority'   => 37,
   ) );
   
   $wp_customize->add_section( 'wpstrapblogger_footer_options' , array(
    'title'      => __('Footer Options','wpstrapblogger'),
    'priority'   => 40,
   ) );

/**
 * Lets begin adding our own settings and controls for this theme
 * Plus organize it in sequence in each setting group with a priority level
 */
	// General Options Selectors
	$wp_customize->add_setting(
    'wpstrapblogger_attachment_commentform_visibility'
    );

    $wp_customize->add_control(
    'wpstrapblogger_attachment_commentform_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Comment Form on the Attachment page', 'wpstrapblogger'),
        'section' => 'wpstrapblogger_general_options',
        )
    );
	
	// =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('wpstrapblogger_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'wpstrapblogger_slide_cat', array(
		'settings' => 'wpstrapblogger_slide_cat',
		'label'   => 'Select Slider Category:',
		'section'  => 'wpstrapblogger_home_options',
		'priority' => '1',
		'type'    => 'select',
		'choices' => $cats,
	));
	
	$wp_customize->add_setting(
       'wpstrapblogger_navbar_visibility'
    );

    $wp_customize->add_control(
    'wpstrapblogger_navbar_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Navbar On Home Page','wpstrapblogger'),
        'section' => 'wpstrapblogger_home_options',
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapblogger_slider_visibility'
    );

    $wp_customize->add_control(
    'wpstrapblogger_slider_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show Home Slider','wpstrapblogger'),
        'section' => 'wpstrapblogger_home_options',
        )
    );
	
	$wp_customize->add_setting( 'wpstrapblogger_slider_transition', array(
		'default' => 'slide',
	) );

	
	$wp_customize->add_control( 'wpstrapblogger_slider_transition', array(
    'label'   => __( 'Slider Transition', 'wpstrapblogger' ),
    'section' => 'wpstrapblogger_home_options',
	'priority' => '2',
    'type'    => 'radio',
        'choices' => array(
            'slide' => __( 'Slide', 'wpstrapblogger' ),
            'slide carousel-fade' => __( 'Fade', 'wpstrapblogger' ),
        ),
    ));
	
	$wp_customize->add_setting(
    'wpstrapblogger_copyright_textbox',
    array(
        'default' => 'Copyright &copy; 2013',
    ));
	
	$wp_customize->add_control(
    'wpstrapblogger_copyright_textbox',
    array(
        'label' => __('Copyright Text','wpstrapblogger'),
        'section' => 'wpstrapblogger_footer_options',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapblogger_credits_visibility'
    );

    $wp_customize->add_control(
    'wpstrapblogger_credits_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Footer Credits - We understand if you must!','wpstrapblogger'),
        'section' => 'wpstrapblogger_footer_options',
        )
    );
	
}
add_action( 'customize_register', 'wpstrapblogger_customize_register' );