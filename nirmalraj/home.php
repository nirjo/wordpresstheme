<?php /* Template Name: CustomPageT1 */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since nirmalraj 1.0
 */

get_header(); ?>

		<div class="page-main">
		<div class="page-featured">
			<a href="<?php echo get_site_url(); ?>/about/"><img src="<?php echo get_template_directory_uri(); ?>/images/Nirmal.jpg" alt="Nirmalraj Joseph"></a>
			<h2><strong>Web Developer / Software Tester </strong></h2>
			<h3>I am an Experinced web developer, proficient both in frontend and backend Development. I am also Good at writing Test cases.
			</h3>
			<span class="clearfix"></span>
			<div class="btn-wrap">
				<a class="btn-large" href="<?php echo get_site_url(); ?>/my-work/">See My Work <span class="fa-chevron-right"></span></a>
			</div>
		</div>
		<div class="page-main-content">
			<div class="page-section">
				<hr>
				<h2 class="section-title"><a href="<?php echo get_site_url(); ?>/my-work/">Featured Work</a></h2>
				<div class="project-snippet">
					<div class="work-previews">
						<div class="desktop-preview">
							<div class="preview-top">
								<span class="circle-red"></span>
								<span class="circle-yellow"></span>
								<span class="circle-green"></span>
								<p class="preview-url">
									<span class="fa-globe"></span>https://www.47farms.com
								</p>
							</div>
							<div class="preview-img">
								<a href="<?php echo get_site_url(); ?>/my-work/47farms/"><img src="./Seb Kay _ Web Design &amp; Development_files/tbe-desktop-2.jpg" alt="Desktop Screenshot: 47Farms"></a>
							</div>
						</div>
						<div class="mobile-preview">
							<div class="preview-top">
								<p class="preview-url">
									<span class="fa-globe"></span> https://www.47farms.com
								</p>
							</div>
							<div class="preview-img">
								<a href="<?php echo get_site_url(); ?>/my-work/47farms/"><img src="./Seb Kay _ Web Design &amp; Development_files/47farms-mobile.jpg" alt="Mobile Screenshot: 47Farms"></a>
							</div>
						</div>
					</div>
					<div class="project-snippet-info">
						<h3 class="project-title">	<a href="<?php echo get_site_url(); ?>/my-work/47farms/">47Farms</a></h3>
						<p>
							47Farms is a service which helps everyday people connect with local farms in New Jersey. Everybody wants to know where their food is coming from, so this is the perfect way to do just that. Farm to table, enabled.
						</p>
						<a class="btn" href="<?php echo get_site_url(); ?>/my-work/47farms/">View Case Study <span class="fa-chevron-right"></span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="page-main-content">
			<div class="page-section">
				<h2 class="section-title"><a href="<?php echo get_site_url(); ?>/services/">Services</a></h2>
				<div class="cols icon-section">
					<div class="col-3">
						<a href="<?php echo get_site_url(); ?>/services/#web-design"><span class="fa-desktop circle-icon-small"></span></a>
						<h3 class="icon-section-title"><a href="<?php echo get_site_url(); ?>/#web-design">Backend Development</a></h3>
						<p>
							A website should be an investment that gets you more customers, grows your business and works across all devices. There's more to the web than design and code, and that's exactly what I offer.
						</p>
						<a class="btn-ghost" href="<?php echo get_site_url(); ?>/#web-design">More About Web Design <span class="fa-chevron-right"></span></a>
					</div>
					<div class="col-3">
						<a href="<?php echo get_site_url(); ?>/services/#wordpress"><span class="fa-wordpress circle-icon-small"></span></a>
						<h3 class="icon-section-title"><a href="<?php echo get_site_url(); ?>/services/#wordpress">Frontend Development</a>
						</h3>
						<p>
							Most of my web design work is done with WordPress, but I also offer pure development on its own. Anything from theme development to fixing security holes, I'm your man.
						</p>
						<a class="btn-ghost" href="<?php echo get_site_url(); ?>/services/#wordpress">More About WordPress <span class="fa-chevron-right"></span></a>
					</div>
					<div class="col-3">
						<a href="<?php echo get_site_url(); ?>/services/#seo"><span class="fa-search circle-icon-small"></span></a>
						<h3 class="icon-section-title"><a href="<?php echo get_site_url(); ?>/services/#seo">Software Testing</a></h3>
						<p>
							I've spent the last 4+ years studying and analyzing what makes a website perform well in search engines, so I know you'll beat the competition when it comes to organic search traffic.
						</p>
						<a class="btn-ghost" href="<?php echo get_site_url(); ?>/services/#seo">More About Software Testing <span class="fa-chevron-right"></span></a>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<div class="page-main-content page-cta">
		<div class="page-section-small">
			<h2 class="section-title"><a href="<?php echo get_site_url(); ?>contact/">Get in Touch!</a></h2>

			<div class="btn-wrap">
				<a class="btn-large" href="<?php echo get_site_url(); ?>/contact/">Contact Me <span class="fa-chevron-right"></span></a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
