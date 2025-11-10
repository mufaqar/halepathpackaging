<?php get_header();
while (have_posts()){ the_post();?>
       
       <!-- breadcrumb area -->
		<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-100">
			<div class="container">
				<div class="basic-breadcrumb text-center">
					<h3 class=""><?php the_title();?></h3>
					<ol class="breadcrumb text-xs">
						 <?php if(function_exists('bcn_display')) { bcn_display();}?>
					</ol>
				</div>
			</div>
		</div>	
		<!-- breadcrumb area -->
       

        <!-- About Us Area Start Here -->
        <div class="service-details-area pt-90">
			<div class="container">
				<div class="service-details-info">
				
					<p>  <?php the_content();?> </p>
				</div>
			</div>
		</div>
        
        
        
     
      <?php } get_footer();?>