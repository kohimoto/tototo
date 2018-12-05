<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
  <?php
  if ( !is_front_page() && !is_home() ) {
  ?>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->
  <?php
  }
  ?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>

		<div class="post-thumbnail grid-item">
      <div class="item-content">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
    </div>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>
