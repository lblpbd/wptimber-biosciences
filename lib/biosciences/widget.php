<?php namespace Biosciences;
use WP_Widget as WP_Widget;

Class Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
	}

	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

 	public function form( $instance ) {
		// outputs the options form on admin
	}

	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}