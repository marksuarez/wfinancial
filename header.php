<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!--<link href="//www.google-analytics.com" rel="dns-prefetch">-->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>






		<!-- homepage hero section -->

		<?php if(is_front_page() ) { ?>

		<section id="hero">
			<div class="hero">

				<!-- Fullscreen video -->
				<video class="video-bg" muted autoplay loop poster="img/option-2-poster.png">
	            	<!--<source src="wp-content/themes/wfinancial/video/Option_2/Option2_light.mp4"/>
	            	<source src="wp-content/themes/wfinancial/video/Option_2/Option2_light.ogv/">
	            	<source src="wp-content/themes/wfinancial/video/Option_2/Option2_light.webm"/>-->
            	</video>	
				<!-- / Fullscreen video -->

				<!-- Hero Navbar -->
				<nav id="hero-navbar" class="hero-navbar" role="navigation">
              		
              		<!-- logo -->
		            <div class="hero-logo">
		            	<a href="index.html"><img src="img/logo1.png"/></a>
		            </div>
              		<!-- /logo -->

              		<!-- Responsive Navigation Hamburger Toggle -->
					<div class="hero-toggle" title="Menu">
	                	<div class="bar1"></div>
	                	<div class="bar2"></div>
	                	<div class="bar3"></div>
              		</div>  
              		<!-- / -->

	              	<!-- nav -->
		            <div class="hero-nav">
		                <!-- commenting this out 
		                <ul>
		                	<li><a class="active" href="index.html">Home</a></li>
		                    <li><a href="about.html">About</a></li>
		                    <li><a href="#">Loan Programs</a></li>
		                    <li><a href="doneDeals.html">Done Deals</a></li>
		                    <li><a href="press.html">Press</a></li>
		                    <li><a href="#">Forms</a></li>
		                    <li><a href="#">Search</a></li>
		                    <li><a href="#">Contact</a></li>
		                </ul>
		                -->

		                <?php 
		                	wp_nav_menu();
		                ?>

		            </div>
	              	<!-- /nav -->

            	</nav>  
				<!-- / Hero Navbar -->

			</div>
		</section>

		<?php } ?>

		<!-- / homepage hero section -->





		
		<!-- header -->
		<header>
			<nav id="navbar" class="navbar navbar-default navbar-fluid-top text-uppercase" role="navigation">
					
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="<?php echo home_url(); ?>">
				    	<?php bloginfo('name'); ?>
				        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">-->
				    </a>
				</div>

				<div class="collapse navbar-collapse">
					<?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
			        		'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'nav navbar-nav navbar-right',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
		    	</div>
			</nav>        
		</header>		        
		<!-- /header -->