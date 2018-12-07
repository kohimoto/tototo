<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area grid">
    <div class="grid-sizer"></div>

		<?php
		if ( have_posts() ) : ?>
			<?php
$cnt = 0;
			/* Start the Loop */
			while ( have_posts() ) : the_post();

      //$cntを引き継ぐため
      //get_template_part( 'template-parts/post/content', get_post_format() );
      include locate_template('template-parts/post/content.php');

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
  <div class="entry-content">
    <?php
    wp_link_pages( array(
      'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
      'after'       => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after'  => '</span>',
    ) );
    ?>
  </div><!-- .entry-content -->

</div><!-- .wrap -->

<?php get_footer();
