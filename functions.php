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
