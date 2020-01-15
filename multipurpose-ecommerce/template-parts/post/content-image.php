<?php
/**
 * Template part for displaying posts
 */

?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <div class="category">
      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
    </div>
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if( get_theme_mod( 'multipurpose_ecommerce_date_hide',true) != '' || get_theme_mod( 'multipurpose_ecommerce_comment_hide',true) != '' || get_theme_mod( 'multipurpose_ecommerce_author_hide',true) != '') { ?>
      <div class="post-info">
        <?php if( get_theme_mod( 'multipurpose_ecommerce_date_hide',true) != '') { ?>
          <i class="fa fa-calendar"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
        <?php } ?>

        <?php if( get_theme_mod( 'multipurpose_ecommerce_author_hide',true) != '') { ?>
          <i class="fa fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
        <?php } ?>

        <?php if( get_theme_mod( 'multipurpose_ecommerce_comment_hide',true) != '') { ?>
          <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','multipurpose-ecommerce'), __('0 Comments','multipurpose-ecommerce'), __('% Comments','multipurpose-ecommerce') ); ?></span>
        <?php } ?>
      </div>
    <?php }?>
    <div class="post-image">
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>
    </div>
    <div class="text">
      <div class="entry-content"><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_ecommerce_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_ecommerce_excerpt_number','20')))); ?></div>
    </div>
    <a class="post-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php esc_html_e( 'Continue Reading....','multipurpose-ecommerce' );?></span></a>
  </div>
</article>