<?php
/**
 * Template name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proctormiller
 */

get_header(); ?>

	<div id="Middle">
			<div class="main-content">
			<div id="layout_home-page" class="grid-wrapper">
			<section class="grid-section-1">
			<div class="grid-row row-fluid">
			<div class="grid-column-1 span12">
			<div class="content-element-1">
			<div id="primary" class="site-content">
				<div id="content" role="main">

					<div class="page type-page status-publish hentry">
						<div class="row-fluid">

							<div class="entry-content">
							
								<section class="vc_section_wrapper">
									<div class="wpb_row  row-fluid " padding: 0px;margin-bottom: 10px;>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_raw_code wpb_content_element wpb_raw_html">
														<div class="wpb_wrapper">
															<div style="text-align:center;">
															
																<?php $home_first_part =  get_field('home_first_part'); 
																if($home_first_part): echo $home_first_part; ?>
																
																<?php endif; ?>
																
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								
								
								<?php $home_bootom_part =  get_field('home_bootom_part'); 
									if($home_bootom_part): echo $home_bootom_part; ?>
									
									
								<?php endif; ?>
								
								
								
								
								
								
								
								
								
								
								
								
								<?php get_template_part('footer-form'); ?>
								
								
								
								
							</div>
						</div>
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
			
	

<?php get_footer();
