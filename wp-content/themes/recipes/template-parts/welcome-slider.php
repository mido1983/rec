<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/4/2018
 * Time: 7:54 PM
 */

?>

<!-- ****** Welcome Post Area Start ****** -->
<section class="welcome-post-sliders owl-carousel">

    <!-- Single Slide -->
  
  <?php
  $post_tag = 'home_page_slider';
  $the_query = new WP_Query( 'tag='.$post_tag );
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post(); ?>

        <!-- Single Popular Post -->

        <div class="welcome-single-slide">
            <!-- Post Thumb -->
         <?php
         if(get_field('home_page_carousel_image')== TRUE){ ?>
             <img src="<?php echo get_field('home_page_carousel_image')?>" alt="">
             <!-- Overlay Text -->
             <div class="project_title">
                 <div class="post-date-commnents d-flex">
                     <a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_date(); ?></a>
                     <a href="<?php echo get_post_permalink(); ?>">5 Comment</a>
                 </div>
                 <a href="<?php echo get_post_permalink(); ?>">
                     <h5><?php the_field('head_post_title'); ?></h5>
                 </a>
             </div>
         
        <?php } else{
         
         }
         
         
         ?>
        
        </div>
    <?php   }
  } else {
    // no posts found
  }
  /* Restore original Post Data */
  wp_reset_postdata();
  ?>

</section>
<!-- ****** Welcome Area End ****** -->
