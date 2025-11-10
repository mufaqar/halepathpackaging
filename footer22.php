<!-- footer start -->
		<footer>			
			<div class="footer-top-area theme-bg pt-90 pb-50">
				<div class="container">				
					<div class="row">	
						<div class="col-md-4 mb-40">					   
							<div class="footer-widget">						
								<h4><span> <?php echo get_field('welcome_title','options')?></span></h4>
								<p><?php echo get_field('content','options')?></p>
								<img src="<?php echo get_field('image','options')?>" class="img-responsive" alt="Hela Path Packaging Quality Logo">
												
							</div>					
						</div>					
						<div class="col-md-4 mb-40">
							<div class="footer-widget">							
								<h4><span>PRODUCT BY INDUSTRY</span></h4>							
								<ul class="footer-nav list-unstyled clearfix">
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>CBD Packaging</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Cosmetic Packaging</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Metalized Boxes</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Eco Friendly Boxes</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Food and Beverages</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Display Packaging</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Gift Boxes</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Retail Boxes</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Specilaties</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Pharma Packaging</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Food Box</a></li>
									<li><a href="#."><i class="fa fa-long-arrow-right"></i>Contact Us</a></li>
									
	
     
								</ul>							
							</div>						
						</div>						
					
						<div class="col-md-4 mb-40">
							<div class="footer-widget">
								<h4><span>get in touch</span></h4>	
								<div class="contact-widget clearfix">
									<ul>
										<li>
											<i class="fa fa-home"></i><p><?php echo get_field('address','options')?></p>	
										</li>
										<li>
											<i class="fa fa-mobile"></i><p class="phone-number"><?php echo get_field('phone','options')?></p>	
										</li>
										<li>
											<i class="fa fa-globe"></i><p><a href="<?php echo site_url();?>"><?php echo site_url();?></a></p>	
										</li>
										<li>
											<i class="fa fa-envelope"></i><p><a href="mailto:<?php echo get_field('email','options')?>"><?php echo get_field('email','options')?></a></p>	
										</li>
										
									</ul>
									
								</div>					
								<div class="social-icon text-left">
								<a href="<?php echo get_field('facebook','options')?>" target="_blank"><i class="ion-social-facebook"></i></a>
								<a href="<?php echo get_field('twitter','options')?>" target="_blank"><i class="ion-social-twitter"></i></a>
								<a href="<?php echo get_field('instagram','options')?>" target="_blank"><i class="ion-social-instagram"></i></a>
								<a href="<?php echo get_field('linkedin','options')?>" target="_blank"linkedin><i class="ion-social-linkedin"></i></a>
								<a href="<?php echo get_field('pinterest','options')?>" target="_blank"><i class="ion-social-pinterest"></i></a>
							</div>
							</div>	
						</div>						
					</div>
				</div>			
			</div>		
			<div class="copyright-area theme-bg">
				<div class="container">
					<p class="copyright text-center">Copyright &copy; 2021 Hela Path Packaging. All right reserved.</p>	
				</div>
			</div>	
		</footer>		
		<!-- footer end -->		
		

		
		<!-- All js plugins here -->
        <script src="<?php echo THEME_DIR;?>/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo THEME_DIR;?>/js/bootstrap.min.js"></script>
        <script src="<?php echo THEME_DIR;?>/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo THEME_DIR;?>/js/jquery.meanmenu.js"></script>
        <script src="<?php echo THEME_DIR;?>/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo THEME_DIR;?>/js/plugins.js"></script>
        <script src="<?php echo THEME_DIR;?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
