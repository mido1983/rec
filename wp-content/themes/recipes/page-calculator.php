<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/20/2018
 * Time: 8:40 PM
 * Template Name:calculator
 */
?>
  
<?php get_header()?>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        
        
        <div class="col-12 col-lg-8">
          <div class="row no-gutters">
            <!-- Single Post Share Info -->
              <div class="single-post-share-info mt-100">
              </div> <!-- end of single-post-share-info mt-100 -->
  
              <div class="col-10 col-sm-11">
                <div class="single-post ">
                  
                
                  <?php

                  $table = get_field( 'table-test' );

                  if ( $table ) {
  
                    echo '<table border="0">';
  
                    if ( $table['header'] ) {
    
                      echo '<thead>';
    
                      echo '<tr>';
    
                      foreach ( $table['header'] as $th ) {
      
                        echo '<th>';
                        echo $th['c'];
                        echo '</th>';
                      }
    
                      echo '</tr>';
    
                      echo '</thead>';
                    }
  
                    echo '<tbody>';
  
                    foreach ( $table['body'] as $tr ) {
    
                      echo '<tr>';
    
                      foreach ( $tr as $td ) {
      
                        echo '<td>';
                        echo $td['c'];
                        echo '</td>';
                      }
    
                      echo '</tr>';
                    }
  
                    echo '</tbody>';
  
                    echo '</table>';
                  }
                  
                  
                  ?>
                  
                  
                  
                  
                  
    
                </div>
              </div>
              
              
    <!-- end of col-2 col-sm-1 -->
          </div> <!-- end of row no-gutters -->
        </div>  <!-- end of div col-12 col-lg-8 -->
        
        
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="blog-sidebar mt-5 mt-lg-0">
            <div class="single-widget-area popular-post-widget">
              <div class="widget-title text-center">
                <h6><?php _e('Populer Post') ?></h6>
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
         
          </div>   <!-- end of div  blog-sidebar mt-5 mt-lg-0 -->
        </div> <!-- end of div  col-12 col-sm-8 col-md-6 col-lg-4 -->
      </div>  <!-- end of div row justify-content-center -->

    </div>
  </section>
  

<?php
get_footer();

