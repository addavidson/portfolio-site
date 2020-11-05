<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoFocus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$header_image = photofocus_featured_overall_image();

		if ( 'disable' === $header_image || is_front_page() ) : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title section-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>
	<?php photofocus_single_image(); ?>

	<div class="entry-content">

		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'photofocus' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
