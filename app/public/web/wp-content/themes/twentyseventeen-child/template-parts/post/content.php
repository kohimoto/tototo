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
        <p class="detail-date"><?php echo get_the_date('Y/m/d'); ?></p>
        <?php the_title( '<h2 class="entry-title"><span class="mask angle entry-title-list">', '</span></h2>' ); ?>
      </header><!-- .entry-header -->
      <div class="entry-detail-content">
      <?php
      the_content( sprintf(
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
        get_the_title()
        ) );
        ?>
      </div>
