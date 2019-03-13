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
<div class="item-content">
  <div class="archive-date"><?php the_date("Y/m/d"); ?></div>
  <div class="entry-title-content">
    <?php the_title(); ?>
  </div>
  <div class="entry-detail-content">
    <?php the_content();?>
  </div>
</div>
