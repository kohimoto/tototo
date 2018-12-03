<?php
/**
 * The template for displaying all single posts.
 *
 * @package alchem
 */

get_header();
//$sidebar                  = esc_attr(alchem_option('blog_single_sidebar','none'));
$page_title_bg_parallax   = esc_attr(alchem_option('page_title_bg_parallax'));
$page_title_align         = esc_attr(alchem_option('page_title_align'));
$single_display_title_bar = esc_attr(alchem_option('single_display_title_bar'));

$sidebar ='none';
$left_sidebar              = esc_attr(alchem_option('left_sidebar_blog_posts'));
$right_sidebar             = esc_attr(alchem_option('right_sidebar_blog_posts'));
if( $left_sidebar !='' )
$sidebar ='left';
if( $right_sidebar !='' )
$sidebar ='right';
if( $left_sidebar !='' && $right_sidebar !='' )
$sidebar ='both';

$title_bar_css_class = '';
if($page_title_bg_parallax=="yes")
$title_bar_css_class = 'parallax-scrolling';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="post-wrap">
            <div class="container">
                <div class="post-inner row <?php echo alchem_get_content_class($sidebar);?>">
                        <div class="col-main">
             <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile;  ?>
                        </div>
                        <?php if( $sidebar == 'left' || $sidebar == 'both'  ): ?>
             <?php endif; ?>
                    </div>
                </div>
            </div>
      </article>
<?php get_footer(); ?>
