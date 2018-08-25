<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/11/2018
 * Time: 9:31 PM
 * Template Name: terms-and-policies
 */
?>

<?php get_header()?>


<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="row">
          
          <!-- Single Post -->
          <div class="col-12">
            <?php the_field('advertising')?>
          </div>
        
        
        
        
        
        
        
        </div>
      </div>
      
      <!-- ****** Blog Sidebar ****** -->
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="blog-sidebar mt-5 mt-lg-0">
          
          
          
          
          <!-- Single Widget Area -->
          
          <div class="single-widget-area popular-post-widget">
            <div class="widget-title text-center">
              <h6>Populer Post</h6>
            </div>
            <!-- Single Popular Post -->
            <?php
            $post_tag = 'hot';
            $the_query = new WP_Query( 'tag='.$post_tag );
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                
                <!-- Single Popular Post -->
                <div class="single-populer-post d-flex">
                  
                  <?php  echo  get_the_post_thumbnail();?>
                  
                  <div class="post-content">
                    <a href="<?php echo get_post_permalink(); ?>">
                      <h6><?php the_field('head_post_title'); ?></h6>
                    </a>
                    <p><?php echo get_the_date(); ?></p>
                  </div>
                </div>
              <?php   }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
          </div>
          
          <!-- Single Widget Area -->
          
          <div class="single-widget-area popular-post-widget">
            <div class="widget-title text-center">
              <h6>Populer Post</h6>
            </div>
            <!-- Single Popular Post -->
            <?php
            $post_tag = 'hot';
            $the_query = new WP_Query( 'tag='.$post_tag );
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                
                <!-- Single Popular Post -->
                <div class="single-populer-post d-flex">
                  
                  <?php  echo  get_the_post_thumbnail();?>
                  
                  <div class="post-content">
                    <a href="<?php echo get_post_permalink(); ?>">
                      <h6><?php the_field('head_post_title'); ?></h6>
                    </a>
                    <p><?php echo get_the_date(); ?></p>
                  </div>
                </div>
              <?php   }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
          </div>
        
        
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ****** Single Blog Area End ****** -->
<?php get_footer()?>
