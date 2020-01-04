<?php
/**
 * The template for displaying all pages
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

					<div id="post-649" class="post-649 page type-page status-publish hentry">
						<div class="row-fluid">

							<div class="entry-content">
								
								<?php while(have_posts()): the_post();  ?>
								
								<?php the_content(); ?>
								
								<?php  endwhile; ?>
								
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
