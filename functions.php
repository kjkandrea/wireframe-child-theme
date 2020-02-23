<?php

/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function wireframe_theme_widgets_init() {
    // register_sidebar 워드프레스 함수를 사용하여 만든 배열에 옵션을 입력한다.
    register_sidebar( array(
        'name'        => __( 'Footer Friend Blog Link', 'wireframe-theme' ),
        'id'            => 'footer-link',
        'description' => __( 'Add widgets here.', 'wireframe-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s powered-by-wordpress">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'wireframe_theme_widgets_init' );


/**
* Enqueue scripts and styles.
*/
function wireframe_theme_scripts() {
    // First de-register the main stylesheet (which is now your child theme style.css)
	wp_dequeue_style( WPEX_THEME_STYLE_HANDLE );
	wp_deregister_style( WPEX_THEME_STYLE_HANDLE );

	// Add the parent style.css with the main style handle
	wp_enqueue_style( WPEX_THEME_STYLE_HANDLE, get_template_directory_uri() . '/style.css', array(), WPEX_THEME_VERSION );

    wp_enqueue_style('spoqa-han-sans', 'https://spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css', array());

    wp_enqueue_style('wireframe-stylesheet', get_stylesheet_directory_uri() . '/assets/css/wireframe.min.css', array( WPEX_THEME_STYLE_HANDLE ), '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'wireframe_theme_scripts' );
