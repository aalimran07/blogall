<?php

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Blogall_About_Widget extends WP_Widget {

	/**
	 * Constructor
	 *
	 * @return void
	 */
	function __construct() {
		$widget_ops = array( 'classname' => 'Blogall_About_Widget', 'description' => 'Display Your Little Information Using About Widget' );
		parent::__construct( 'blogall_about', esc_html__('About Widget', 'blogall'), $widget_ops );
	}

	/**
	 * Outputs the HTML for this widget.
	 *
	 * @param array  An array of standard parameters for widgets in this theme
	 * @param array  An array of settings for this widget instance
	 * @return void Echoes it's output
	 */
	function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo $args['before_title'];
		echo 'Title'; // Can set this with a widget option, or omit altogether
		echo $args['after_title'];
		?>
		<div class="about-widget">
			<img src="" alt="">
			<div class="description">

			</div>
		</div>
		<?php
		echo $args['after_widget'];
	}

	/**
	 * Deals with the settings when they are saved by the admin. Here is
	 * where any validation should be dealt with.
	 *
	 * @param array  An array of new settings as submitted by the admin
	 * @param array  An array of the previous settings
	 * @return array The validated and (if necessary) amended settings
	 */
	function update( $new_instance, $old_instance ) {

		// update logic goes here
		$updated_instance = $new_instance;
		return $updated_instance;
	}

	/**
	 * Displays the form for this widget on the Widgets page of the WP Admin area.
	 *
	 * @param array  An array of the current settings for this widget
	 * @return void Echoes it's output
	 */
	function form( $instance ) {
		$title = (!empty($instance['title']) ? $instance['title'] : esc_html__('About', 'blogall'));
		$textarea = (!empty($instance['about']) ? $instance['about'] : esc_html__('Type Something About You', 'blogall'));
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title', 'blogall'); ?></label>
			<input type="text" id="<?php echo esc_attr($this->get_field_id('title'));?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title'));?>" value="<?php echo esc_attr($title);?>">
		</p>
		<p>
			<button type="file" id="about_img" class="button button-primary"><?php esc_html_e('Choose Image', 'blogall'); ?></button>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('about'));?>"><?php esc_html_e('About', 'blogall'); ?></label>
			<textarea type="text" id="<?php echo esc_attr($this->get_field_id('about'));?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('about'));?>"> <?php echo esc_attr($textarea);?> </textarea>
		</p>
		<?php

	}
}

function prefix_register_widget() {
	register_widget( 'Blogall_About_Widget' );
}
add_action( 'widgets_init', 'prefix_register_widget' );