<?php
/**
 * @package Devons Theme - Node
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><label>', '</label></h1>' ); ?>

		<div class="entry-meta">
			<?php /*devons_theme_posted_on();*/ ?>
		</div><!-- .entry-meta -->
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'devons-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php devons_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
