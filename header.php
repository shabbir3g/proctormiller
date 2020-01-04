<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proctormiller
 */

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
 <html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php $favicon_upload =  get_field('favicon_upload','options'); 
		if($favicon_upload):  ?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_upload['url']; ?>" />
		<?php endif; ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class("full-width-left v-masthead-medium overlay-effect-zoom-dark style-skin-1 wpb-js-composer js-comp-ver-5.0.1 vc_responsive"); ?> >


		<?php if(is_front_page()):  ?>


		<?php $banner_image =  get_field('banner_image','options');  ?>
		
		 <section style="background: url(<?php echo $banner_image['url']; ?>);" class="homebanner"  id="TopContent_1" class="top-content-area">
						<div class="top-content-first type_slide-show">

					<?php $center_logo =  get_field('center_logo','options'); 
					if($center_logo):  ?>
					<div class="center-logo"> 
						<img src="<?php echo $center_logo['url']; ?>" alt="" />
					</div>
					<?php endif; ?>
					
					
					
					<?php $page_cta_logo =  get_field('page_cta_logo','options'); 
					if($page_cta_logo):  ?>
					<div class="page-cta-logo"> 
						<img src="<?php echo $page_cta_logo['url']; ?>" alt="" />
					</div>
					<?php endif; ?>
					
					
					<?php $arrow_down =  get_field('arrow_down','options'); 
					if($arrow_down):  ?>
					<div class="page-down-arrow"> 
						<img src="<?php echo $arrow_down['url']; ?>" alt="" />
					</div>
					<?php endif; ?>
		

			 <!-- END REVOLUTION SLIDER -->
			</div>
		</section>
		<?php endif; ?>

    <div id="FadeInContent"></div>

    <div id="page" class="hfeed site">

        <header id="masthead" class="site-header" role="banner">
		
			<?php $menu_background_image =  get_field('menu_background_image','options'); 
					if($menu_background_image):  ?>
            <div class="masthead-vertical-bg" style="background-image: url(<?php echo $menu_background_image['url']; ?>);"></div>
			<?php endif; ?>
			
			
            <div class="masthead-container">
                <div class="top-wrapper">

                    <div class="masthead-row logo-wrapper">
                        <div class="inner-wrapper">
                            <h1 class="site-title">
							<?php $logo_upload =  get_field('logo_upload','options'); 
							if($logo_upload):  ?>
							<a href="<?php echo bloginfo('home'); ?>" title="<?php echo bloginfo('title'); ?>" class="logo logo-image" rel="home">
							<img src="<?php echo $logo_upload['url']; ?>" alt="<?php echo bloginfo('title'); ?>" style="width: 130px">
							</a>
							<?php endif; ?>
						</h1>
                        </div>
                    </div>
                    <!-- .logo-wrapper -->
                </div>
                <!-- .top-wrapper -->

                <div id="MainNav" class="masthead-row hasSearch">
                    <div class="inner-wrapper clearfix">
                        <div id="NavExtras">
                            <div class="navSearch">
                                <a href="index1919.html?s=" id="NavSearchLink"><span class="fa fa-search"></span></a>
                                <form method="get" id="NavSearchForm" action="<?php echo home_url(); ?>">
                                    <div>
                                        <input type="text" name="s" id="NavS" value="" placeholder="">
                                        <button type="submit">Search</button>
                                        <div id="AjaxSearchPane"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- / #NavExtras -->
                        <a class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-theme-default-styles ubermenu-loc-primary" data-ubermenu-target="ubermenu-main-7-primary"><i class="fa fa-bars"></i>Menu</a>
						
						<nav class="main-menu">

						<?php 
									wp_nav_menu([
										'theme_location'	=> 'main-menu',
									]);
						 
						 ?>
							
						</nav>
						
                      
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- / #MainNav -->

                <div class="bottom-wrapper">

                </div>
                <!-- / .bottom-wrapper -->

                <div class="clear"></div>

            </div>
            <!-- .masthead-container -->
        </header>
        <!-- #masthead -->

		<!-- #masthead -->

        <div id="ContentWrapper">
            <div id="Top">
            </div>
            <!-- #Top -->
			
			


			
			
			
			