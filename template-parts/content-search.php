<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package modernize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<header class="entry__header">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="entry__thumb">
				<a href="<?php echo get_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div>
		<?php } ?>

		<div class="entry__info">
			<?php the_title( sprintf( '<h2 class="entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php modernize_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
	</header><!-- .entry__header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry__footer">
		<?php modernize_entry_footer(); ?>
	</footer><!-- .entry__footer -->
</article><!-- #post-## -->
