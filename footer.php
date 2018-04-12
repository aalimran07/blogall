<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogall
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blogall' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'blogall' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'blogall' ), 'blogall', '<a href="http://theimran.com">Abdullah AL Imran</a>' );
							?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
