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

get_header();

//今いるカテゴリ取得
$current_cat = get_queried_object();
$current_cat_name = $current_cat->name;
if(strcasecmp($current_cat_name, "news") == 0){
  ?>
  <div class="wrap archive-news">
    <div id="primary" class="content-area">
      <h2 class="entry-title"><span class="mask angle entry-title-list is-show"><?=$current_cat_name?></span></h2>
      <?php
      if ( have_posts() ) : ?>

      <?php if (!is_paged()) : ?>
      <?php $sticky = get_option('sticky_posts');
        if(!empty($sticky)):
          $get_cat = get_the_category();
          $cat = $get_cat[0];
          $args = [
            'posts_per_page' => 1,
            'cat' => $cat->cat_ID,
            'post__in'  => get_option('sticky_posts'),
          ];

          $the_query = new WP_Query( $args );?>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
      <?php endif;?>

        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();
        include locate_template('template-parts/post/content-news.php');

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






    </div>
  </div>
<?php
} else {

 ?>

<div class="wrap">
  <div id="primary" class="content-area grid">
    <div class="grid-sizer"></div>

		<?php
		if ( have_posts() ) : ?>

    <?php if (!is_paged()) : ?>
    <?php $sticky = get_option('sticky_posts');
    	if(!empty($sticky)):
    		$get_cat = get_the_category();
    		$cat = $get_cat[0];
    		$args = [
    			'posts_per_page' => 1,
    			'cat' => $cat->cat_ID,
    			'post__in'  => get_option('sticky_posts'),
    		];

    		$the_query = new WP_Query( $args );
    		if ( $the_query->have_posts() ) :
    			while ( $the_query->have_posts() ) : $the_query->the_post();?>
          <div class="post-thumbnail grid-item circle-disp <?php echo $add_class;?> <?php echo $check_cnt;?>">
            <div class="item-content">
      				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
          </div>
      		</div>
    			<?php endwhile;?>
    		<?php endif;?>
    		<?php wp_reset_postdata(); ?>
    	<?php endif;?>
    <?php endif;?>




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
<?php
}
?>
<?php get_footer();
