<?php
/**
 * @package Devons Theme - Node
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
			the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); 


		?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php /*devons_theme_posted_on();*/ ?>
		</div><!-- .entry-meta -->
		<?php endif; 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 

		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'devons-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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