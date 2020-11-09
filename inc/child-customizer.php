<?php
/**
 * This is an extention to add to the customizer for this child theme.
 *
 * @package inland_toner_child
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * For added customizer features.
 *
 * @param  object $wp_customize contains customizer methods.
 */
function inland_toner_child_customize_register( $wp_customize ) {
	/**
	* Theme Copyright Info Section
	*
	* @since  1.0.0
	*/
	$wp_customize->add_section(
		'theme_header_section',
		array(
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'priority'       => 10,
			'title'          => __( 'Theme Header', 'inland_toner_child' ),
			'description'    => __( 'For setting header columns', 'inland_toner_child' ),
			'panel'          => 'wonkasoft_theme_options',
		)
	);

	/**
	* Theme Copyright color Setting
	*
	* @since  1.0.0
	*/
	$wp_customize->add_setting(
		'header_columns',
		array(
			'default'   => 2,
			'transport' => 'refresh',
		)
	);

	// Theme Copyright Setting Control.
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'header_columns_control',
			array(
				'label'       => __( 'Header Columns Option', 'inland_toner_child' ),
				'section'     => 'theme_header_section',
				'settings'    => 'header_columns',
				'type'        => 'number',
				'description' => 'Add how many columns in header up to 3.',
			)
		)
	);

	/**
	* Theme Copyright Info Section
	*
	* @since  1.0.0
	*/
	$wp_customize->add_section(
		'theme_footer_section',
		array(
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'priority'       => 100,
			'title'          => __( 'Theme Footer', 'inland_toner_child' ),
			'description'    => __( 'For setting footer columns', 'inland_toner_child' ),
			'panel'          => 'wonkasoft_theme_options',
		)
	);

	/**
	* Theme Copyright color Setting
	*
	* @since  1.0.0
	*/
	$wp_customize->add_setting(
		'footer_columns',
		array(
			'default'   => 1,
			'transport' => 'refresh',
		)
	);

	// Theme Copyright Setting Control.
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_columns_control',
			array(
				'label'       => __( 'Footer Columns Option', 'inland_toner_child' ),
				'section'     => 'theme_footer_section',
				'settings'    => 'footer_columns',
				'type'        => 'number',
				'description' => 'Add how many columns in footer up to 4.',
			)
		)
	);
}

add_action( 'customize_register', 'inland_toner_child_customize_register' );
