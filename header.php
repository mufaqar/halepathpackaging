<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        <?php
	    if (function_exists('is_tag') && is_tag()) {
		    single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
        elseif (is_archive()) {
		    wp_title(''); echo ' Archive  '; }
        elseif (is_search()) {
		    echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
		    wp_title(''); echo '  '; }
        elseif (is_404()) {
		    echo 'Not Found - '; }
	    if (is_home()) {
		    bloginfo('name'); echo ' - '; bloginfo('description'); }
	    else {
		    bloginfo('name'); }
	    if ($paged>1) {
		    echo ' - page '. $paged; }
	    ?>
		</title>
       
	   
		<!-- All css plugins here -->
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/meanmenu.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/global.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/style.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR;?>/css/responsive.css">
        <script src="<?php echo THEME_DIR;?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <meta name="google-site-verification" content="jtaVZTNlE4XBO-76dqa6kBns_2I4rzBGw_UKr8S1ItQ" />
        <?php wp_head();?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <!--For HOme  header start -->
		<header>
		 <?php
	 if ( is_front_page() && is_home() ) { ?>
			<div class="menu-area header-fixed header-transparent">
			 <?php
} else {
?>
<div class="menu-area header-fixed-2nd">
<?php
}
	 ?>
				<div class=" md-full xs-full">
					<div class="">
						<div class="col-md-1 col-xs-6">
							<div class="logo">
								<a href="<?php echo site_url();?>"><img src="<?php echo THEME_DIR;?>/img/logo.png" alt=" Hale Path Packaging?" /></a>
							</div>
						</div>
						<div class="col-md-11 col-xs-6">
						<?php /*?>	<div class="main-menu text-right  hidden-xs hidden-sm"><?php */?>
							<div class="main-menu text-right">
							
							
								<nav>
								
								   <?php wp_nav_menu( array('container_class' => '',
                                    'theme_location' => 'primary',
                                    'menu_class' => 'basic-menu',
                                    'menu_id' => '' ) ); ?>
								
								                       
								
								</nav>
							</div>
							<!-- basic-mobile-menu --> 
							<?php /*?><div class="basic-mobile-menu visible-xs visible-sm">
								<nav id="mobile-nav">
  <?php wp_nav_menu( array('container_class' => '',
                                    'theme_location' => 'primary',
                                    'menu_class' => 'basic-menu',
                                    'menu_id' => '' ) ); ?>
								
								</nav>
							</div>		<?php */?>						
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header end -->