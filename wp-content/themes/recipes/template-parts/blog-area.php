<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/4/2018
 * Time: 7:59 PM
 */?>




<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row">

                    <!-- Single Post -->
                    <div class="col-12">
                        <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                            <!-- Post Thumb -->
  
                          <?php
  
                          $post_object = get_field('hp_post_big', 'options');
  
                          if( $post_object ):
    
                            // override $post
                            $post = $post_object;
                            setup_postdata( $post );
                            ?>
                              <!-- Single Popular Post -->
                              <div class="post-thumb ">
                               <?php   echo   get_the_post_thumbnail();?>
                              </div>
                              <!-- Post Content -->
                              <div class="post-content">
                                  <div class="post-meta d-flex">
                                      <div class="post-author-date-area d-flex">
                                          <!-- Post Author -->
<!--                                          <div class="post-author">-->
<!--                                              <a href="#">--><?php // echo    get_field('post_author',  $post->ID); ?><!--</a>-->
<!--                                          </div>-->
                                          <!-- Post Date -->
<!--                                          <div class="post-date">-->
<!--                                              <a href="#">--><?php //echo get_the_date(); ?><!--</a>-->
<!--                                          </div>-->
                                      </div>
                                      <!-- Post Comment & Share Area -->
                                      <div class="post-comment-share-area d-flex">
                                          <!-- Post Favourite -->
                                          <div class="post-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>  <?php echo getPostViews(get_the_ID()); ?></a>
                                          </div>
                                          <!-- Post Comments -->
                                          <div class="post-comments">
                                              <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <span class="fb-comments-count" data-href="<?php get_the_permalink($post->ID)?>"></span></a>
                                          </div>
                                          <!-- Post Share -->
                                          <div class="post-share">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                          </div>
                                      </div>
                                  </div>
                                  <a href="<?php echo get_post_permalink(); ?>">
                                      <h2 class="post-headline"><?php the_field('head_post_title'); ?></h2>
                                  </a>
                                  <p><?php
                                    if (get_field('recipe_long_excerpt',  $post->ID) == FALSE){
                                      $my_excerpt = get_the_excerpt();
                                      if ( $my_excerpt ){
                                        echo wpautop( $my_excerpt );
                                      }
                                      else {}
                                    }
                                    else{
                                      echo    get_field('recipe_long_excerpt',  $post->ID);
                                    }
                                    ?></p>
                                  <a href="<?php echo get_post_permalink(); ?>" class="read-more"><?php _e('Читать дальше...')?></a>
                              </div>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                          <?php endif; ?>
                        </div>
                    </div>

                    <!-- Single Post -->

                    <!-- Random posts -->
  
                  <?php $posts = get_posts('orderby=rand&numberposts=5');
                  foreach($posts as $post) { ?>


                      <!-- Single Post -->
                      <div class="col-12 col-md-6 ">
                          <div class="single-post wow fadeInUp" data-wow-delay=".4s">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                <?php   echo  get_the_post_thumbnail($post->ID,  'large');?>
                              </div>
                              <!-- Post Content -->
                              <div class="post-content">
                                  <a href="<?php the_permalink();  ?>" title="<?php the_title(); ?>">
                                      <h4 class="post-headline hp_post_heading"><?php the_title(); ?></h4>
                                  </a>
                                  <div class="post-meta d-flex">
                                     
                                      <div class="post-author-date-area d-flex">
                                          
                                          <!-- Post Author -->
<!--                                          <div class="post-author">-->
<!--                                              <a href="#">--><?php // echo    get_field('post_author',  $post->ID); ?><!--</a>-->
<!--                                          </div>-->
                                          <!-- Post Date -->
<!--                                          <div class="post-date">-->
<!--                                              <a href="#">May 19, 2017</a>-->
<!--                                          </div>-->
                                      </div>
                                      <!-- Post Comment & Share Area -->
                                      <div class="post-comment-share-area d-flex">
                                          <!-- Post Favourite -->
                                          <div class="post-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>  <?php echo getPostViews(get_the_ID()); ?></a>
                                          </div>
                                          <!-- Post Comments -->
                                          <div class="post-comments">
                                              <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="fb-comments-count" data-href="<?php get_the_permalink($post->ID)?>"></span></a>
                                          </div>
                                          <!-- Post Share -->
                                          <div class="post-share">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                          </div>
                                      </div>
                                  </div>
                                
                              </div>
                          </div>
                      </div>
                  <?php } ?>






                    <!-- ******* List Blog Area Start ******* -->

                    <!-- Single Post -->

<!--                    <div class="second_post_blog_hp wow">-->
<!--                        <h3>second block</h3>-->
<!--                    </div>-->
                    <!-- Random posts 2 -->
  
                  <?php $posts = get_posts('orderby=rand&numberposts=5');
                  foreach($posts as $post) { ?>
                      <!-- ******* List Blog Area Start ******* -->

                      <!-- Single Post -->
                      <div class="col-12">
                          <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".2s">
                              <!-- Post Thumb -->
                         
                              <div class="post-thumb">
                                <?php   echo  get_the_post_thumbnail();?>
                              </div>
                              <!-- Post Content -->
                              <div class="post-content">
                                  <a href="#">
                                      <h4 class="post-headline"><?php the_title(); ?></h4>
                                  </a>
                                  <div class="post-meta d-flex">
                               
                                      <div class="post-author-date-area d-flex">
                                          <!-- Post Author -->
<!--                                          <div class="post-author">-->
<!--                                              <a href="#">--><?php // echo    get_field('post_author',  $post->ID); ?><!--</a>-->
<!--                                          </div>-->
                                          <!-- Post Date -->
<!--                                          <div class="post-date">-->
<!--                                              <a href="#">May 19, 2017</a>-->
<!--                                          </div>-->
                                      </div>
                                      <!-- Post Comment & Share Area -->
                                      <div class="post-comment-share-area d-flex _hp_post_second_area">
                                          <!-- Post Favourite -->
                                          <div class="post-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>  <?php echo getPostViews(get_the_ID()); ?></a>
                                          </div>
                                          <!-- Post Comments -->
                                          <div class="post-comments">
                                              <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <span class="fb-comments-count" data-href="<?php get_the_permalink($post->ID)?>"></span></a>
                                          </div>
                                          <!-- Post Share -->
                                          <div class="post-share">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              
                                  <p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                  <a href="#" class="read-more">Continue Reading..</a>
                              </div>
                          </div>
                      </div>
  
                  <?php } ?>





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
                            <h6>Populer erer  Post</h6>
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


<!-- ****** Blog Area End ****** -->
