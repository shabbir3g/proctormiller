<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proctormiller
 */

?>


<footer id="Bottom" class="site">

		<div id="FooterTop" class="clearfix">
		<div class="footer-content-top type_static-block">
		<div class="inner-wrapper">
		<div id="static-content-2960" class="static-content ">
		
		<section class="vc_section_wrapper has_bg_color">
			<div class="bg-layer " style="background-color:#e7e7e7;" data-inertia="0.1"></div>
			<div class="wpb_row  hidden-phone hidden-ipad row-fluid " padding: 10px 0 25px;margin-bottom: -2px;>
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_raw_code wpb_content_element wpb_raw_html">
								<div class="wpb_wrapper">
									<div style="padding: 0 0 0 0; border-right: 1px solid #ccc;">
										<h5 style="margin-bottom: 0.4em">
										
										<?php $footer_logo =  get_field('footer_logo','options'); 
										if($footer_logo):  ?>
										<img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['title'] ?>" title="<?php echo $footer_logo['title'] ?>" class="alignnone size-full" width="125">
										<?php endif; ?>
										
										
										</h5>
										
										<?php $footer_text =  get_field('footer_text','options'); 
										if($footer_text):  ?>
										<p style="font-size:12px"><?php echo  $footer_text; ?></p>
										<?php endif; ?>
										
										
										<p style="font-size: 20px;">
										
										
											<?php $contact_information =  get_field('contact_information','options'); 
											if($contact_information['phone_number']):  ?>
											<a href="tel:+<?php echo $contact_information['phone_number']; ?>"><i class="fa fa-phone-square"></i><?php echo $contact_information['phone_number']; ?></a>&nbsp;
											<?php endif; ?>
											
											
											
											<?php if($contact_information['facebook_url']):  ?>
											<a href="#"><i class="fa fa-facebook-square"> </i></a>&nbsp;
											<?php endif; ?>
											
											<?php if($contact_information['yelp_url']):  ?>
											<a href="#"><i class="fa fa-yelp"> </i></a>&nbsp;
											<?php endif; ?>
											
											<?php if($contact_information['google_plus_url']):  ?>
											<a href="#"><i class="fa fa-google-plus-square"> </i></a>&nbsp; &nbsp;
											<?php endif; ?>
											
											
											<?php if($contact_information['home_design_url']):  ?>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/badge.png" alt="Remodeling and Home Design" width="175" height="24" border="0" /></a>
											<?php endif; ?>
											
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-8">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
						
						
						<?php
					if(have_posts()): ?>
					
							<div class="wpb_text_column wpb_content_element  no-margin">
								<div class="wpb_wrapper">
									<h5 style="margin-bottom: 0.6em;">Testimonials: What do WCP Clients Have to Say?</h5>

								</div>
							</div>
							<div class="rotator rotator-columns-3" data-transition="slide" data-autoplay="true" data-interval="4000">
							
							<?php 
							
							$testimonial = new WP_Query(array(
								"post_type" => "testimonial",
								"posts_per_page"	=> -1,
							));
							
							
							
							while($testimonial->have_posts()): $testimonial->the_post();  ?>
								<div class="single-item first" data-index="1">
									<h2 class="entry-title"><a href="#" title="Permalink to Architects Depend on WCP"><?php  the_title(); ?></a></h2>
									<div class="entry-content">
										<p><?php echo wp_trim_words(get_the_content(), 19,''); ?></p>
									</div>
								</div>
							<?php endwhile; ?>
								
								
								
							</div>
							
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
		</div>
		</div>
		</div>
		<!-- #FooterTop -->

		<div id="FooterBottom" class="clearfix">
		<div class="footer-content-bottom type_static-block">
		<div class="inner-wrapper">
		<div id="static-content-447" class="static-content ">
		<section class="vc_section_wrapper has_bg_color">
			<div class="bg-layer " style="background-color:#d6d6d6;" data-inertia="0.1"></div>
			<div class="wpb_row  visible-desktop row-fluid " padding: 15px 0 5px;margin-bottom: 0px;>
				<div class="wpb_column vc_column_container vc_col-sm-6">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_raw_code wpb_content_element wpb_raw_html">
								<div class="wpb_wrapper">
									<p style="margin:0; font-size:12px;">
									
									
									
									<?php 

									
									$copy_right_text = get_field('copy_right_text','options');  ?>
									
									<?php echo $copy_right_text; ?>
										
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-6">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_raw_code wpb_content_element wpb_raw_html">
								<div class="wpb_wrapper">
								
									<?php 
												wp_nav_menu([
													'theme_location'	=> 'footer-menu',
													'menu_class'		=> 'footer-menu',
												]);
									 
									 ?>
								
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		</div>
		</div>
		</div>
		</div>
		<!-- #FooterBottom -->
		</footer>
            <!-- #Bottom -->

        </div>
        <!-- #ContentWrapper -->
    </div>
    <!-- #page -->

    <div id="BackToTop"><a href="#ScrollTop"><i class="fa fa-chevron-up"></i></a></div>

   
	<?php wp_footer(); ?>
</body>

</html>