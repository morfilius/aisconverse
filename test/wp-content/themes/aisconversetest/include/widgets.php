<?php

class Banner_Widget extends WP_Widget {

	function __construct() {

		parent::__construct(
			'banner_widget',
			'Кастомный поиск',
			array( 'description' => 'Кастомный поиск', )
		);

	}

	function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<form role="search" method="get" id="searchform" class="search_form" action="/">
                <input type="text" name="s" placeholder="Search">
            </form><!--search_form end-->';
		echo $args['after_widget'];
	}

	function form( $instance ) {

	}


	function update( $new_instance, $old_instance ) {
		$instance = array();
		return $instance;
	}
}


function register_banner_widget() {
	register_widget( 'Banner_Widget' );
}
add_action( 'widgets_init', 'register_banner_widget' );

