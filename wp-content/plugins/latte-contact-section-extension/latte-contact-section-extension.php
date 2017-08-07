<?php
/*
Plugin Name: Latte Contact Section Extension
Plugin URI: http://www.hardeepasrani.com/portfolio/latte/
Description: Latte Contact Section Extension adds a contact section to your Latte theme for free.
Author: Hardeep Asrani
Author URI:  http://www.hardeepasrani.com/
Version: 0.1
*/

define( 'LATTE_CONTACT_EXTENSION', TRUE );

$theme = wp_get_theme(); // gets the current theme
if ( 'Latte Pro' == $theme->name || 'Latte Pro' == $theme->parent_theme ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	deactivate_plugins( plugin_basename( __FILE__ ) );
}

function latte_contact_extension_js() {
	wp_enqueue_script( 'latte_contact_customizer_js',  plugin_dir_url( __FILE__ ) . 'customizer.js', array( 'jquery', 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'latte_contact_extension_js' );

function latte_contact_extension_css() {
	$latte_contact_display = get_theme_mod('latte_contact_display', 1);
	if( is_page_template( 'template-home.php' ) ) {
		if( isset($latte_contact_display) && $latte_contact_display != 1 ) {
			wp_enqueue_script( 'latte_contact_js',  plugin_dir_url( __FILE__ ) . 'script.js', array( 'jquery' ), '', true );
			wp_enqueue_style( 'latte_contact_css',  plugin_dir_url( __FILE__ ) . 'style.css' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'latte_contact_extension_css', 99 );

function latte_contact_extension($wp_customize) {

	class Latte_Contact_Shortcode_Extension_Area extends WP_Customize_Control {
		public function render_content() {
			echo __('In order to add a Contact form to your front page, you will have to install Contact form 7 plugin to your WordPress, from Plugins > Add New, in your WordPress dashboard.','latte');
			echo '<br/><br/>';
			echo __('After installing the plugin, create a new form and use the following code in it:.','latte');
	   		echo '<br/><br/>';
			echo '<textarea style="width:100%;height:180px;font-size:12px;" readonly="">';
			echo '<div data-sr="enter left wait 0.25s" class="col-sm-4">' . "\n";
			echo __('[text* name id:name class:form-control class:name placeholder "Name"]','latte') . "\n";
			echo '</div>' . "\n\n";
			echo '<div data-sr="enter left wait 0.25s" class="col-sm-4">' . "\n";
			echo __('[email* email- id:email class:form-control class:email placeholder "Email"]','latte') . "\n";
			echo '</div>' . "\n\n";
			echo '<div data-sr="enter left wait 0.25s" class="col-sm-4">' . "\n";
			echo __('[text* subject id:subject class:form-control class:subject placeholder "Subject"]','latte') . "\n";
			echo '</div>' . "\n\n";
			echo '<div data-sr="ease-in-out wait 0.25s" class="col-sm-12">' . "\n";
			echo __('[textarea* message id:message class:form-control class:message placeholder "Hi,"]','latte') . "\n";
			echo '</div>' . "\n\n";
			echo '<div data-sr="ease-in-out wait 0.25s" class="col-sm-12">' . "\n";
			echo __('[submit id:submit class:button "Send"]','latte') . "\n";
			echo '</div>';
			echo '</textarea>';
		}
	}

	$wp_customize->add_panel( 'latte_contact_settings', array(
		'priority'	   => 45,
		'capability'	 => 'edit_theme_options',
		'title'		  => __('Contact Section', 'latte'),
		'description'	=> __('This section allows you to configure Contact section.', 'latte')
	));

	$wp_customize->add_section( 'latte_contact_settings', array(
		'priority' => 5,
		'title' => __('Settings', 'latte'),
		'panel'  => 'latte_contact_settings'
	));

	$wp_customize->add_section( 'latte_contact_content', array(
		'priority' => 10,
		'title' => __('Content', 'latte'),
		'panel'  => 'latte_contact_settings'
	));

	$wp_customize->add_section( 'latte_contact_colors', array(
		'priority' => 15,
		'title' => __('Colors', 'latte'),
		'panel'  => 'latte_contact_settings'
	));

	$wp_customize->add_setting( 'latte_contact_display', array(
		'default' => 1,
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'latte_sanitize_checkbox'
	));

	$wp_customize->add_control( 'latte_contact_display',array(
		'type' => 'checkbox',
		'label' => __('Disable Contact Section','latte'),
		'section' => 'latte_contact_settings',
		'priority' => 5
	));

	$wp_customize->add_setting( 'latte_contact_title', array(
		'default' => esc_html__('Contact', 'latte'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage'
	));

	$wp_customize->add_control( 'latte_contact_title', array(
		'label' => __('Section Title', 'latte'),
		'section' => 'latte_contact_settings',
		'priority' => 15,
		'settings' => 'latte_contact_title'
	));

	$wp_customize->add_setting( 'latte_contact_subtitle', array(
		'default' => esc_html__('Let\'s talk.', 'latte'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage'
	));

	$wp_customize->add_control( 'latte_contact_subtitle', array(
		'label' => __('Section Subtitle', 'latte'),
		'section' => 'latte_contact_settings',
		'priority' => 20,
		'settings' => 'latte_contact_subtitle'
	));

	$wp_customize->add_setting( 'latte_contact_code', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control( 'latte_contact_code', array(
		'label' => __('Shortcode', 'latte'),
		'section' => 'latte_contact_content',
		'priority' => 5,
		'settings' => 'latte_contact_code'
	));

	$wp_customize->add_setting( 'latte_contact_shortcode', array(
		'sanitize_callback' => 'latte_sanitize_text'
	));

	$wp_customize->add_control( new Latte_Contact_Shortcode_Extension_Area( $wp_customize, 'latte_contact_shortcode', array(
		'section' => 'latte_contact_content',
		'priority' => 10
	)));

	$wp_customize->add_setting( 'latte_contact_background_color', array(
		'default' => 'rgba(0, 0, 0, 0.7)',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage'
	));

	$wp_customize->add_control(new Latte_Customize_Alpha_Color_Control($wp_customize, 'latte_contact_background_color', array(
		'label' => __('Background Color', 'latte'),
		'section' => 'latte_contact_colors',
		'default' => 'rgba(0, 0, 0, 0.7)',
		'priority' => 5,
		'settings' => 'latte_contact_background_color'
	)));

}
add_action( 'customize_register', 'latte_contact_extension', 99 );

function latte_contact_extension_trigger() {
	$latte_contact_display = get_theme_mod('latte_contact_display', 1);
	$latte_contact_title = get_theme_mod('latte_contact_title',__( 'Contact', 'latte' ));
	$latte_contact_subtitle = get_theme_mod('latte_contact_subtitle',__( 'Let\'s talk.', 'latte' ));
	$latte_contact_code = get_theme_mod('latte_contact_code');
	if( isset($latte_contact_display) && $latte_contact_display != 1 ) {
?>
		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
				<?php if(!empty($latte_contact_title) || !empty($latte_contact_subtitle) || is_customize_preview()) : ?>
					<header data-sr="ease-in-out wait 0.25s" class="contact-header">
					<?php if(!empty($latte_contact_title) || is_customize_preview()) : ?>
						<h2><?php echo esc_html($latte_contact_title); ?></h2>
					<?php endif; ?>
					<?php if(!empty($latte_contact_subtitle) || is_customize_preview()) : ?>
						<h3><?php echo esc_html($latte_contact_subtitle); ?></h3>
					<?php endif; ?>
					</header>
				<?php endif; ?>
					<div class="col-md-12">
					<?php if(!empty($latte_contact_code)) : echo do_shortcode(''.wp_kses_post($latte_contact_code).''); endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php
	}
}
add_action( 'latte_blogposts_after', 'latte_contact_extension_trigger' );
?>