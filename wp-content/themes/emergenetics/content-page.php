<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	    <?php the_post_thumbnail(); ?>
        </a>
    <?php endif; ?>

    <div class="entry-content">
	<?php the_content(); ?>
	<?php
	wp_link_pages(array(
	    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentyfifteen') . '</span>',
	    'after' => '</div>',
	    'link_before' => '<span>',
	    'link_after' => '</span>',
	    'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>%',
	    'separator' => '<span class="screen-reader-text">, </span>',
	));
	?>
    </div><!-- .entry-content -->

    <?php edit_post_link(__('Edit', 'twentyfifteen'), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->'); ?>

</article><!-- #post-## -->
