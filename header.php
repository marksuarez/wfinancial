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
		<div id="skrollr-body">
		<div id="wptime-plugin-preloader"></div>
		<div id="top"></div>


	<!-- homepage hero section -->

	<?php if(is_front_page() ) { ?>


		<!-- nav -->
      	<nav class="hero-nav" role="navigation">
          	<?php
		            wp_nav_menu( array(
		                'menu'              => 'fullscreen',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => '',
		        		'container_id'      => '',
		                'menu_class'        => '',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
     	</nav>
      	<!-- /nav -->

      	<!-- Responsive Navigation Hamburger Toggle -->
      	<div class="hero-toggle" title="Menu">
          	<div class="bar1"></div>
          	<div class="bar2"></div>
          	<div class="bar3"></div>
      	</div>  
      	<!-- / -->

		<section id="hero" data-top="opacity:1;" data-1000="opacity:0;">

			<div class="hero">



				<!-- Fullscreen video -->
				<div class="video-wrapper">
					<!-- Vide markup
					<div id="test" class="test-div" style="
					width: 100%; 
					height: 100vh;
					display: block;
					position: fixed;
					z-index: -2;
					"
					data-vide-bg="
					webm: <?php //echo site_url(); ?>/wp-content/uploads/Option3.webm,
					mp4: <?php //echo site_url(); ?>/wp-content/uploads/Option3.mp4,
					ogv: <?php //echo site_url(); ?>/wp-content/uploads/Option3.ogv,
					poster: <?php //echo site_url(); ?>/wp-content/uploads/option-3-poster.png
					" 
					data-vide-options="
					loop: true, 
					muted: true, 
					position: 50% 50%,
					autoplay: true,
					resizing: true,
					bgColor: 'transparent',
					className: ''
					"></div>-->
					<!--
					<video id="video1" class="video-bg" preload="auto" muted autoplay poster="http://marksupernet.com/Recutvid/poster.png">
		            	<source src="http://marksuarez.github.io/video/Option_2/Option2_light.webm"/>
		            	<source src="http://marksuarez.github.io/video/Option_2/Option2_light.mp4"/>
		            	<source src="http://marksuarez.github.io/video/Option_2/Option2_light.ogv/">
	            	</video>
					-->
	            	
	            	<video id="video2" class="video-bg" preload="auto" muted autoplay loop poster="<?php echo get_template_directory_uri(); ?>/video/final/Option3.png">
		            	<source src="<?php echo get_template_directory_uri(); ?>/video/final/Option3.webm"/>
		            	<source src="<?php echo get_template_directory_uri(); ?>/video/final/Option3.mp4"/>
		            	<source src="<?php echo get_template_directory_uri(); ?>/video/final/Option3.ogv"/>
	            	</video>	
					
            	</div>
				<!-- / Fullscreen video -->



				<!-- Everything Else -->

				<div class="hero-elements-wrapper">

					<!-- hero navbar -->

		            <div class="hero-navbar">
			            <!-- logo -->
		            	<div class="hero-logo">
		            		<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo1-white.png'?>"/></a>
		            	</div>
		              	<!-- /logo -->
	            	</div>  
	            	
	            	<!-- / hero navbar -->

		            <!-- Rotator -->
					<div class="container">
		                <ul id="headlines">
		                  <li class="textItem"><h1>Commercial real estate financing</h1></li>
		                  <li class="textItem"><h1>At the speed of New York.</h1></li>
		                  <li class="textItem"><h1><img src="<?php echo get_template_directory_uri() . '/img/logo2-white.png'?>"/></h1></li>
		                </ul>
		            </div>
		            <!-- / Rotator -->

		            <a class="scroll text-center" href="#header" data-scroll><h6>Scroll</h6><i class='fa fa-angle-double-down' id='scroll-icon'></i></a>

        		</div>
            	
            	<!-- /// Everything Else -->

			

			</div>



			
			

		</section>

	<?php } ?>

	<!-- / homepage hero section -->





		
		<!-- header -->
		<header id="header">
			<nav id="navbar" role="navigation" class="navbar navbar-default navbar-fixed-top text-uppercase">
					
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="<?php echo home_url(); ?>">
				    	<!--<?php bloginfo('name'); ?>-->
				        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
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
		    	<div class="searchbardiv" id="formsearch">
				<div class="container">
	        	<form class="search" role="search" action="<?php echo home_url(); ?>" method="get" id="searchform"  >
	            	<div class="input-group">
	              		<input type="text" id="searchbox" class="form-control" name="s" id="s">
	              		<div class="input-group-btn">
	                		<button class="btn btn-primary"  id="searchsubmit"  type="submit">
	                  		<strong>Search</strong></button>
	              		</div>
	            	</div>
	          	</form>
	          	</div>
			</div> 
			</nav>
			       
		</header>		        
		<!-- /header -->