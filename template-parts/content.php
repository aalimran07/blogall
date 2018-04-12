<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogall
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blogall-standard-post'); ?>>

<div class="row">
	<?php if (has_post_thumbnail()): ?>
	<div class="col-md-5">
		<div class="blogall-post-thumbnail">
			<?php blogall_post_thumbnail(); ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="col-md-7">
		<div class="blogall-entry-content">
			<div class="post-date">
				<?php echo blogall_time(); ?>
				<span></span>
			</div>
			<h2><?php the_title(); ?></h2>
			<div class="blogall-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<div class="readmore text-right">
				<a href="<?php the_permalink();?>"><span class="fa fa-angle-right"></span><?php esc_html_e('Read More', 'blogall'); ?></a>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-<?php the_ID(); ?> -->
