<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogall
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-post-header">
		<div class="post-social-share">
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-google-plus"></a>
			<a href="#" class="fa fa-pinterest"></a>
			<a href="#" class="fa fa-instagram"></a>
			<a href="#" class="fa fa-youtube"></a>
		</div>
		<div class="post-category-time">
			<div class="post-tag">
				<?php echo blogall_post_tag(); ?>
			</div>
			<div class="single-post-date">
				<?php echo blogall_time(); ?>
			</div>
		</div>
		<div class="single-post-title">
			<h2><?php the_title(); ?></h2>
		</div>
	</header><!-- .entry-header -->

	<?php blogall_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blogall' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogall' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php blogall_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
