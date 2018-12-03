<?php
  // section news

   global $allowedposttags,$alchem_home_animation;
   $section_hide    = absint(alchem_option('section_8_hide'));
   $content_model   = absint(alchem_option('section_8_model'));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_8_id')));
   $section_color   = esc_attr(alchem_option('section_8_color'));
   $sub_title       = wp_kses(alchem_option('section_8_sub_title'), $allowedposttags);
   $section_content = wp_kses(alchem_option('section_8_content'), $allowedposttags);
   $category        = esc_attr(alchem_option('section_8_category'));
   $columns         = absint(alchem_option('section_8_columns'));
   $col             = $columns>0?12/$columns:4;
   $posts_num       = absint(alchem_option('section_8_posts_num'));
   $date_format     = alchem_option('date_format');


 ?>
  <div class="container">
  <?php if( $content_model == 0 ):?>
     <?php
     echo $posts_num;
	 query_posts( 'cat='.$category.'&ignore_sticky_posts=1&posts_per_page='.$posts_num );
// The Loop
while ( have_posts() ) : the_post();
  $featured_image = '';
	if( has_post_thumbnail()  ){
    $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "alchem-portfolio-thumb" );
    $featured_image = '<div class="img-box">
                        <a href="'.get_permalink().'">
                          <img src="'.$image_attributes[0].'" alt="" class="feature-img">
                          <div class="img-overlay-content">
                          </div>
                        </a>
                       </div>';
		}

echo $featured_image;
endwhile;
 wp_reset_query();
	  ?>
    <?php else:?>
 <?php endif;?>
  </div>
