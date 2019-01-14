<?php
/**
 * Register widget areas
 *
 * @package ThorPress
 * @since ThorPress 1.0.0
 */

if ( ! function_exists( 'thorpress_sidebar_widgets' ) ) :
	function thorpress_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'thorpress' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'thorpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'thorpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'thorpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
	}

	add_action( 'widgets_init', 'thorpress_sidebar_widgets' );
endif;
