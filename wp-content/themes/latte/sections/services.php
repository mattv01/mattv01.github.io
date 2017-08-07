<?php
	$latte_services_title = get_theme_mod('latte_services_title',__( 'Services', 'latte' ));
	$latte_services_subtitle = get_theme_mod('latte_services_subtitle',__( 'Things that I work on.', 'latte' ));
?>

		<section class="social portfolio" id="services">
			<div class="container">
				<div class="row">
				<?php if(!empty($latte_services_title) || !empty($latte_services_subtitle) || is_customize_preview() ) : ?>
					<header data-sr="ease-in-out wait 0.25s" class="services-header">
					<?php if(!empty($latte_services_title) || is_customize_preview() ) : ?>
						<h2><?php echo esc_html($latte_services_title); ?></h2>
					<?php endif; ?>
					<?php if(!empty($latte_services_subtitle) || is_customize_preview() ) : ?>
						<h3><?php echo esc_html($latte_services_subtitle); ?></h3>
					<?php endif; ?>
					</header>
				<?php endif; ?>
					<div class="col-md-12">
						<div data-sr="enter left wait 0.25s" class="portfolioImg">
							<a href="http://pick6.mavdeveloper.com/" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/pick6.png"></a>
						</div>
						<div data-sr="enter left wait 0.25s" class="portfolioImg">
							<a href="https://snaplist.mavdeveloper.com/" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/snaplist.png"></a>
						</div>
						<div data-sr="enter left wait 0.25s" class="portfolioImg">
							<a href="https://redditor.mavdeveloper.com/" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/redditor.png"></a>
						</div>
						<div data-sr="enter right wait 0.25s" class="portfolioImg">
							<a href="https://mavdeveloper.com/simplesimon.html" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/simplesimon.png"></a>
						</div>
						<div data-sr="enter right wait 0.25s" class="portfolioImg">
							<a href="https://mavdeveloper.com/calculator.html" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/calculator.png"></a>
						</div>
						<div data-sr="enter right wait 0.25s" class="portfolioImg">
							<a href="https://mavdeveloper.com/konami.html" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/konami.png"></a>
						</div>
						<div data-sr="enter left wait 0.25s" class="portfolioImg">
							<a href="https://mavdeveloper.com/weather_map.html" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/weather_map.png"></a>
						</div>
						<div data-sr="enter left wait 0.25s" class="portfolioImg">
							<a href="https://mavdeveloper.com/unplugged-website/index.html" target="_blank"><img class="project img-responsive" height=400 width=300 src="wp-content/themes/latte/assets/images/unplugged.png"></a>
						</div>

					<?php
						if ( is_active_sidebar( 'services-widgets' ) ) :
							dynamic_sidebar( 'services-widgets' );
						else:
							the_widget( 'latte_services_widget', array(
								'title' => esc_html__('HTML', 'latte'),
								'type' => 0,
								'icon' => 'fa-html5',
								'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
							));
							the_widget( 'latte_services_widget', array(
								'title' => esc_html__('CSS', 'latte'),
								'type' => 0,
								'icon' => 'fa-css3',
								'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
							));
							the_widget( 'latte_services_widget', array(
								'title' => esc_html__('WordPress', 'latte'),
								'type' => 0,
								'icon' => 'fa-wordpress',
								'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
							));
							the_widget( 'latte_services_widget', array(
								'title' => esc_html__('Linux', 'latte'),
								'type' => 0,
								'icon' => 'fa-linux',
								'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
							));
							the_widget( 'latte_services_widget', array(
								'title' => esc_html__('SEO', 'latte'),
								'type' => 0,
								'icon' => 'fa-search',
								'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
							));
							the_widget( 'latte_services_widget', array(
								'title' => esc_html__('Writing', 'latte'),
								'type' => 0,
								'icon' => 'fa-pencil',
								'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
							));
						endif;
					?>
					</div>
					<div data-sr="ease-in-out wait 0.25s" class="text-center">
						<a href="#contact" class="arrow text-center portfolioArrow"><i id="portfolioArrow" class="fa fa-chevron-down"></i></a>
					</div>
				</div>
			</div>
		</section>
