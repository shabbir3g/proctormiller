<?php
/**
 * Template name: Contact Page
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


				<?php while(have_posts()): the_post(); ?>
					<div id="post-649" class="post-649 page type-page status-publish hentry">
						<div class="row-fluid">

							<div class="entry-content">
			<section class="vc_section_wrapper parallax-section has_bg_img"><div class="bg-layer " style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>) ;background-position: center ;background-repeat: no-repeat ;background-size: cover ;" data-inertia="0.3" ></div><div class="wpb_row  vc_custom_1437694484101 row-fluid "style="background: none !important; background-image: none !important; background-color: inherit !important;padding-top: 12.5% ;padding-right: 0px ;padding-bottom: 20% ;padding-left: 0px ;" ><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h1 class="page-title" style="text-align: right; font-size: 55px; font-weight: normal;"><span style="color: #6090e5;"><?php the_title(); ?></span></h1>

		</div>
	</div>
</div></div></div></div></section>


<?php the_content(); ?>
					
								
								
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					
					
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
