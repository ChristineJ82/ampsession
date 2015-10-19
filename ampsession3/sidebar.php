<?php
/**
 * The Sidebar
 */
?>


<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'blog-widget-area' ) ) : ?>

			<ul class="blog-sidebar">
				<?php dynamic_sidebar( 'blog-widget-area' ); ?>
			</ul>

<?php endif; ?>
