<?php

/*
| -------------------------------------------------------------------
| Registering Widget Sections
| -------------------------------------------------------------------
| */
function wpstrapblogger_widgets_init() {

  register_sidebar( array(
    'name' => __('Home Intro', 'wpstrapblogger'),
    'id' => 'wpstrapblogger-home-intro',
	'description'   => __('This widget appears at the top of the home page only - just below the slider. Use to add an introduction to your site or a call to action. It accepts shortcode and I recommend using the Black Studio TinyMCE plugin for better content entry.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
    
  register_sidebar( array(
    'name' =>  __('Page Sidebar', 'wpstrapblogger'),
    'id' => 'wpstrapblogger-sidebar-page',
	'description'   =>  __('This sidebar appears on pages only. Accepts shortcode.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' =>  __('Blog Sidebar', 'wpstrapblogger'),
    'id' => 'wpstrapblogger-sidebar-blog',
	'description'   =>  __('This sidebar appears on blog list page only i.e index.php, home.php or blog.php (if available in theme). Accepts shortcode.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' =>  __('Posts Sidebar', 'wpstrapblogger'),
    'id' => 'wpstrapblogger-sidebar-posts',
	'description'   =>  __('This sidebar appears on single.php - the individual post page. Accepts shortcode.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
   
  register_sidebar(array(
    'name' =>  __('Footer Left - One Third', 'wpstrapblogger'),
    'id'   => 'wpstrapblogger-footer-left',
    'description'   =>  __('Left Footer Widget - part of three widgets that appear in the footer and are sitewide.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name' =>  __('Footer Middle Left - One Third', 'wpstrapblogger'),
    'id'   => 'wpstrapblogger-footer-middlel',
    'description'   =>  __('Middle Footer Widget - part of three widgets that appear in the footer and are sitewide.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name' =>  __('Footer Middle Right - One Third', 'wpstrapblogger'),
    'id'   => 'wpstrapblogger-footer-middler',
    'description'   =>  __('Right Footer Widget - part of three widgets that appear in the footer and are sitewide.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name' =>  __('Footer Right - One Third', 'wpstrapblogger'),
    'id'   => 'wpstrapblogger-footer-right',
    'description'   =>  __('Right Footer Widget - part of three widgets that appear in the footer and are sitewide.', 'wpstrapblogger'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  

}
add_action( 'widgets_init', 'wpstrapblogger_widgets_init' );
add_filter('widget_text', 'do_shortcode');
add_filter('wp_editor', 'do_shortcode');
add_filter('header_content', 'do_shortcode');