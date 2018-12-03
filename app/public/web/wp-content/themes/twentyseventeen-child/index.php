<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
	<div id="primary" class="content-area">
    <?php
    $categories = get_categories('parent=0');
    //print_r($categories);
    if(is_array($categories)) {
    ?>
    <div class="site-cate-list">
      <?php
      foreach ($categories as $cat_k => $cat_v) {
        echo '<div class="cate-block"><h1>'.$cat_v->name.'</h1>';
        $child_cat_num = count(get_term_children($cat_v->cat_ID,'category'));
        if($child_cat_num > 0){
  			echo '<ul>';
  			//子カテゴリの一覧取得条件
  			$category_children_args = array('parent'=>$cat_v->cat_ID);
  			//子カテゴリの一覧取得
  			$category_children = get_categories($category_children_args);
  			//子カテゴリの数だけリスト出力
  			foreach($category_children as $child_val){
  				$cat_link = get_category_link($child_val -> cat_ID);
  				echo '<li><a href="' . $cat_link . '">' . $child_val -> name . '</a>';
  			}
  			echo '</ul>';
  		}
      ?>
      </div>
      <?php
      }
      ?>
      <?php
      ?>

    </div>
    <?php
    }
    ?>
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

        //ページャ
        ?>
        <div class="pagenavi">
        <?php
				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );
        ?>
        </div>
        <?php

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();
