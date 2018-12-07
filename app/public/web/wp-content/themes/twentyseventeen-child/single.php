<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php
$image = get_field('detail-top');
if( !empty($image) ) {
?>
<div class="single-featured-image-header">
  <img src="<?php echo $image['sizes']['twentyseventeen-featured-image']?>">
</div>
<?php
}
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content-single', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.

				//the_post_navigation( array(
				//	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
				//	'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				//) );
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php
$next_post = get_next_post(); // 次の投稿を取得
if( $next_post ): // 次の投稿があれば表示
?>
<div class="next-post">
  <div class="inner-next">
    <div class="inner-ttl">
      <p>Next Project<img src="" alt="nexn-arrow"></p>
      <p><?php  echo get_the_title( $prev_post->ID ); ?></p>
    </div>
    <div class="inner-img">
      <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="next-link">
      <?php echo get_the_post_thumbnail( $prev_post->ID, 'full'); ?>
      </a>
    </div>
  </div>
</div>
<?php
endif;
?>



<?php get_footer();
