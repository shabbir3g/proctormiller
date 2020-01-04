<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proctormiller
 */

get_header(); ?>

		<div id="Middle">
		<div class="main-content">
		<div id="layout_full-width" class="grid-wrapper">
		<section class="grid-section-1">
		<div class="grid-row row-fluid">
		<div class="grid-column-1 span12">
		<div class="content-element-1">

		<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="row-fluid portfolio-columns-3 posts-grid " style="clear: both;">

				<div class="portfolio-wrapper isotope no-transition">

					
					
					<?php
					if(have_posts()): 
					while(have_posts()): the_post();  ?>

					<article class="portfolio-item isotope-item  post type-post status-publish format-gallery hentry category-work" >

						<header class="post-header">
							<div class="featured-image">
								<a href="<?php the_permalink(); ?>" class="styled-image " title="Permalink to Project: Lakewood Ranch Athletic Center" rel="bookmark" data-lightbox="group-363">
								<?php the_post_thumbnail(); ?>
									<div class="inner-overlay"></div>
								</a>
							</div>

						</header>

						<h2 class="entry-title">	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="entry-summary">

							<div class="entry-content summary">
								<p><?php echo wp_trim_words(get_the_content(), 25, '</p>
							</div>
							
							<footer class="entry-footer entry-meta">
								<p class="readmore"><a href="'.get_the_permalink().'" class="btn small">Read more...</a>'); ?>
								
								
								<div class="post-meta clearfix"><span class="date-meta"><span class="meta-label">Date </span>
									<time class="entry-date" ><?php the_date('F j, Y'); ?></time><span class="meta-sep">&nbsp;</span></span>
								</div>
							</footer>
							<!-- .entry-meta -->
						</div>
						<!-- .entry-summary -->

					</article>
					
					
				<?php  endwhile; ?>

				<?php else: ?>

				<h1 style="text-align: center;">No Posts Found</h1>

				<?php	endif; ?>
						
					
					

				</div>
				<!-- .portfolio-wrapper .isotope -->
			</div>
			<!-- .row-fluid -->
			
			<?php the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( '<span class="next-post"><i class="fa fa-angle-left"></i></span>', 'textdomain' ),
				'next_text' => __( '<span class="next-post"><i class="fa fa-angle-right"></i></span>' ),
			) ); ?>
		
		</div>
		<!-- #content -->
		</div>
		<!-- #primary -->

		</div>
		<!-- / .content-element-1 -->
		</div>
		<!-- / .span12 -->
		</div>
		<!-- / #row-fluid -->
		</section>
		<!-- section - 1 -->
		</div>
		<!-- grid-wrapper -->

		</div>
		<!-- .main-content -->
		</div>
		<!-- #Middle -->


	

<?php get_footer();
