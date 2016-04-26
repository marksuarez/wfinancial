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
				<div class="video-wrapper">

					<video id="video1" class="video-bg" preload="auto" muted autoplay poster="http://marksupernet.com/Recutvid/poster.png">
		            	<source src="http://marksupernet.com/Recutvid/Option2_light.webmsd.webm"/>
		            	<source src="http://marksupernet.com/Recutvid/Option2_light.mp4"/>
		            	<source src="http://marksupernet.com/Recutvid/Option2_light.oggtheora.ogv">
	            	</video>

	            	<video id="video2" class="video-bg" preload="auto" muted autoplay loop poster="http://marksupernet.com/Recutvid/poster.png">
		            	<source src="http://www.meingottdeingott.de/videos/MEGODEGO_HG_loop.webm"/>
		            	<source src="http://www.meingottdeingott.de/videos/MEGODEGO_HG_loop.mp4"/>
	            	</video>	

            	</div>
				<!-- / Fullscreen video -->



				<!-- Everything Else -->

				<div class="hero-elements-wrapper">

					<!-- hero navbar -->

		            <div class="hero-navbar">
			            <!-- logo -->
		            	<div class="hero-logo">
		            		<a href="index.html"><img src="<?php echo get_template_directory_uri() . '/img/logo1.png'?>"/></a>
		            	</div>
		              <!-- /logo -->


		              
	            </div>  
	            <!-- / hero navbar -->

	            <!-- Rotator -->
				<div class="container">
	                <ul id="headlines">
	                  <li class="textItem"><h1>Commercial real estate financing</h1></li>
	                  <li class="textItem"><h1>At the speed of New York.</h1></li>
	                  <li class="textItem"><h1><img src="<?php echo get_template_directory_uri() . '/img/logo2.png'?>"/></h1></li>
	                </ul>
	            </div>
	            <!-- / Rotator -->


        	</div>
            <!-- /// Everything Else -->


			</div>

<!-- nav -->
		              <nav class="hero-nav" role="navigation">
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
		              </nav>
		              <!-- /nav -->
			
		              		              <!-- Responsive Navigation Hamburger Toggle -->
		              <div class="hero-toggle" title="Menu">
		                  <div class="bar1"></div>
		                  <div class="bar2"></div>
		                  <div class="bar3"></div>
		              </div>  
		              <!-- / -->
			

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
			</nav>
			<div class="searchbardiv" id="formsearch">
				<div class="container">
	        	<form class="search" role="search" action="<?php echo home_url(); ?>" method="get" id="searchform"  >
	            	<div class="input-group">
	              		<input type="text" id="searchbox" class="form-control" name="s" id="s">
	              		<div class="input-group-btn">
	                		<button class="btn btn-default"  id="searchsubmit"  type="submit">
	                  		<strong>Search</strong></button>
	              		</div>
	            	</div>
	          	</form>
	          	</div>
			</div>        
		</header>		        
		<!-- /header -->