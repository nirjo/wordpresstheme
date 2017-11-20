<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since nirmalraj 1.0
 */

get_header(); ?>

<div class="page-main">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
			while ( have_posts() ) : the_post();
		?>
		
			<div class="page-main-content">
				<div class="page-section-small">
					<h1 class="section-title"><?php the_title();?></h1>
				</div>
			</div>
			<?php the_content();?>
		<?php
		// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );

			endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
