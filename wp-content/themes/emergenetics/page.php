<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>
<section id="headline_1">
	<div class="container page_header home_header"><?php echo get_the_title(); ?></div>
</section>

<?php get_breadcrumbs(); ?>


<section class="container">
	<?php the_post_thumbnail(); ?>

    <div class="highlight1">This is where the sub-header goes</div>
</section>

<section class="container page-content" >

    <section id="main-content_subpage">

	<article class="eleven columns">

	    <?php
			// Start the loop.
			while (have_posts()) : the_post();

			    // Include the page content template.
			    the_content();

			// End the loop.
			endwhile;
		?>

	    <div class="white-space_20"></div>
		<?php get_sidebar( 'content' ); ?>
	    <hr>

	</article>

    </section><!-- end-main-content -->

    <?php get_sidebar(); ?>

    <div class="white-space"></div>
</section><!-- container -->


<?php get_footer(); ?>
