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
	<header class="entry-header">
      <?php the_title( '<h2 class="entry-title"><span class="mask is-show">', '</span></h2>' ); ?>
      <h3 class="entry-cate"><span class="mask is-show"><?php the_category(' '); ?></span></h3>
	</header><!-- .entry-header -->
  <div class="entry-detail-content">
    <?php
    the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );
    ?>
  </div>
