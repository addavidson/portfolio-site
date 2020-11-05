<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoFocus
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$header_image = photofocus_featured_overall_image();

		if ( 'disable' === $header_image ) : ?>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title section-title">', '</h1>' ); ?>

		</header><!-- .entry-header -->

	<?php endif; ?>

	<div class="entry-content">
	<div class="project-acf-info">
		<div class="project-acf-roles">
		<?php
		if(function_exists('get_field')) :
			if(get_field('project_roles')): ?>
				<h3>My Role</h3>
				<?php the_field('project_roles'); ?>
			<?php endif;
		endif;
		?>
		</div>

		<div class="project-acf-tech">
		<?php
		if(function_exists('get_field')) :
			if(get_field('project_tech')): ?>
				<h3>Tech Used</h3>
				<?php the_field('project_tech'); ?>
			<?php endif;
		endif;
		?>
		</div>
	</div>

	<div class="project-img">	
		<?php the_post_thumbnail(); ?>
	</div>

	<div class="project-links">
		<?php
		if(function_exists('get_field')) :
			if(get_field('project_github_link')): ?>
				<a class="project-github-btn" href="<?php the_field('project_github_link'); ?>">GitHub</a>
			<?php endif;
		endif;

		if(function_exists('get_field')) :
			if(get_field('project_site_link')): ?>
				<a class="project-site-btn" href="<?php the_field('project_site_link'); ?>">Live Site</a>
			<?php endif;
		endif;
		?>
	</div>

		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'photofocus' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'photofocus' ),
				'after'  => '</span></div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
