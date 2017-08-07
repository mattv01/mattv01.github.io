<?php
	$latte_about_title = get_theme_mod('latte_about_title',__( 'About Me', 'latte' ));
	$latte_about_subtitle = get_theme_mod('latte_about_subtitle',__( 'Here are some things that you should know about me.', 'latte' ));
	$latte_about_avatar = get_theme_mod('latte_about_avatar', get_template_directory_uri().'/assets/images/383x383.png');
	$latte_about_name = get_theme_mod('latte_about_name',__( 'John Doe', 'latte' ));
	$latte_about_position = get_theme_mod('latte_about_position',__( 'Web Designer', 'latte' ));
	$latte_about_content = get_theme_mod('latte_about_content',__( '<p>I began my coding journey in the late-summer/early-fall of 2016 when I took a few free and paid classes online. A new spark and love for coding consumed me as I looked for every resource to learn all that I could about web development. This new passion lead me to <a href="http://codeup.com/" target="blank">Codeup</a> where I became completely immersed in the world of code. While at Codeup, I quickly learned both the front and back end of web development and became proficient in PHP. The cumulation of my work done at Codeup and other side projects can be seen in my <a href="#services">Portfolio</a>. So please take a look at my work and please feel free to <a href="#contact">contact me</a>.</p>', 'latte' ));
?>

		<section class="about" id="about">
			<div class="container">
				<div class="row">
				<?php if(!empty($latte_about_title) || !empty($latte_about_subtitle) || is_customize_preview()) : ?>
					<header data-sr="ease-in-out wait 0.25s" class="about-header">
					<?php if(!empty($latte_about_title) || is_customize_preview()) : ?>
						<h2><?php echo esc_html($latte_about_title); ?></h2>
					<?php endif; ?>
					<?php if(!empty($latte_about_subtitle) || is_customize_preview()) : ?>
						<h3><?php echo esc_html($latte_about_subtitle); ?></h3>
					<?php endif; ?>
					</header>
				<?php endif; ?>
				<?php if(!empty($latte_about_avatar)) : ?>
					<div data-sr="enter left wait 0.25s" class="col-md-5">
						<img src="<?php echo esc_url($latte_about_avatar); ?>" class="about-image img-responsive"/>
						<a href="https://mavdeveloper.com/mattvaldez_resume.pdf" target="_blank"><img src="https://png.icons8.com/view/dusk/64" title="View" width="64" height="64">View Resume</a>
					</div>
				<?php elseif(empty($latte_about_avatar) && is_customize_preview()) : ?>
					<div data-sr="enter left wait 0.25s" class="col-md-5">
						<img src="<?php echo esc_url($latte_about_avatar); ?>" class="about-image img-responsive customizer-hidden"/>
					</div>
				<?php endif; ?>
				<?php if(!empty($latte_about_avatar)) : ?>
					<div data-sr="enter right wait 0.25s" class="col-md-7">
				<?php else: ?>
					<div data-sr="enter top wait 0.25s" class="col-md-12">
				<?php endif; ?>
					<?php if(!empty($latte_about_name) || is_customize_preview()) : ?>
						<h3 class="name"><?php echo esc_html($latte_about_name); ?></h3>
					<?php endif; ?>
					<?php if(!empty($latte_about_position) || is_customize_preview()) : ?>
						<span class="text-muted"><?php echo esc_html($latte_about_position); ?></span>
					<?php endif; ?>
					<?php if(!empty($latte_about_content) || is_customize_preview()) : ?>
						<div class="lead"><?php echo wp_kses_post($latte_about_content); ?></div>
					<?php endif; ?>
					</div>
				</div>
				<div data-sr="ease-in-out wait 0.25s" class="text-center" style="bottom:0;">
					<a href="#services" class="arrow text-center aboutArrow"><i id="aboutArrow" class="fa fa-chevron-down"></i></a>
				</div>
			</div>
		</section>
