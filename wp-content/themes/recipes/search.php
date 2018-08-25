<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package recipes
 */

get_header();
?>


    <!-- ****** Search Result Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <?php if ( have_posts() ) : ?>
                        <div class="fw" style="min-width: 100%;margin-bottom: 25px;">
                           <header class="page-header">
                               <h1 class="page-title">
                                 <?php
                                 /* translators: %s: search query. */
                                 printf( esc_html__( 'Search Results for: %s', 'recipes' ), '<span>' . get_search_query() . '</span>' );
                                 ?>
                               </h1>
                           </header>
                        </div>
                          <?php
                          /* Start the Loop */
                          while ( have_posts() ) :
                            the_post();
    
                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );
  
                          endwhile;
  
                          the_posts_navigation();

                        else :
  
                          get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>

                          <!-- Single Post -->


                        <div class="tt" style="min-width: 100%;margin-bottom: 25px;">
                            <h2>ldfjgdfkj kdlfgdfjklghdf</h2>
                        </div>



                        <!-- ******* List Blog Area Start ******* -->

                      
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
    <!-- ****** Search Result Area End ****** -->

	

<?php
get_footer();
