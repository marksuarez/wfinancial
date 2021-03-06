		<!-- footer -->
		<footer class="footer" role="contentinfo">
			

			<?php if( !is_front_page() ) : //Show only if not on the homepage?>
			
			<section>
				<div class="mailing-section">
					<div class="container container-small">
						<div class="row">
							<div class="col-md-7"><h6>Keep up to date with W Financial eNews:</h6></div>
							<div class="col-md-5"><a href="<?php echo site_url(); ?>/join-our-mailing-list" class="btn btn-primary btn-block">Sign Up to our Mailing List</a></div>
						</div>
					</div>
				</div>
			</section>
			
			<?php endif; //End Show only if not on the homepage ?>

			<section>

				<div class="footerGreen">

					<div class="container container-small">

						<div class="text-center footerGreenLogo">
							<a href="#">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/logo1-white.png" href="#"/>
							</a>
						</div>
						<h2 class="text-center">Special situation financing for commercial real estate.</h2>

						<hr/>

						<div class="row">
							<div class="col-md-7">

								<div class="row">
									<div class="col-md-4">
										<h3>About W</h3>
										<?php wp_nav_menu(array(
    										'menu' => 'footer-about'
										)) ?>
									</div>
									<div class="col-md-4">
										<h3>Loans</h3>
										<?php wp_nav_menu(array(
    										'menu' => 'footer-loans'
										)) ?>
									</div>
									<div class="col-md-4">
										<h3>More</h3>
										<?php wp_nav_menu(array(
    										'menu' => 'footer-more'
										)) ?>
									</div>
								</div>

							</div>
							<div class="col-md-5">
								<a href="#" class="btn btn-default btn-outline-white center-block">Investors & Advisors Login</a>
								<a href="#" class="btn btn-default btn-outline-white center-block">New Investor Inquiries</a>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section>
				<div class="footerBlack">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text-center associationLogos">
									<a href="https://www.rebny.com/content/rebny/en.html/"><img src="<?php echo site_url(); ?>/wp-content/uploads/rebny.jpg"/></a>
	                  				<a href="http://www.rela.org/"><img src="<?php echo site_url(); ?>/wp-content/uploads/rela.png"/></a>
								</div>
								<p class="copyright text-center">
									Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
								</p>
							</div>	
						</div>
					</div>
				</div>
			</section>
			<a id="backToTop" class="back-to-top" data-scroll href="#top"><i class="fa fa-angle-double-up"></i></a>
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>
		

	</div> <!-- close scroll-body -->
		<!-- analytics 
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		-->
		
	</body>
</html>
