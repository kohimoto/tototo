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
  //topとcategoryページでは記事タイトルは表示しない
  ?>
  	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
<?php
$cnt++;
$cnt_arr = array("2","9","11","12","16","17");
//$cnt_arr = array("2","8","10","11","15","16");
$add_class = "";
if(in_array($cnt, $cnt_arr)) {
  $add_class = "circle_big";
}
  $check_cnt = "circle_no_".$cnt;
?>

		<div class="post-thumbnail grid-item circle-disp <?php echo $add_class;?> <?php echo $check_cnt;?>">
      <div class="item-content">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
    </div>
		</div>
	<?php endif; ?>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>
