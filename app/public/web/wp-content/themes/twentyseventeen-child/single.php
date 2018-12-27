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
$next_post = get_previous_post(); // 次の投稿を取得
if( $next_post ): // 次の投稿があれば表示
  if($next_post->post_title !== "fix content"):
?>
<div class="next-post">
  <div class="inner-next">
    <div class="inner-ttl mask">
      <div class="inner-ttl-txt">
        <p>Next Project
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="6.6" viewBox="0 0 50 6.6" class="injected-svg" data-src="/static/img/icon-next.svg"><path d="M50 6.3v-1H0v1h42zm-1.35.4l.7-.8-6-6-.7.8z"></path></svg></p>
        <p><?php  echo get_the_title( $next_post->ID ); ?></p>
      </div>
    </div>
    <div class="inner-img">
      <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-link">
      <?php echo get_the_post_thumbnail( $next_post->ID, 'full'); ?>
      </a>
    </div>
  </div>
</div>
<?php
  endif;
endif;
?>



<?php get_footer();
