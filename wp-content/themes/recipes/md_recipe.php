<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/5/2018
 * Time: 9:19 AM
 * Template name: Recipe Post
 * Template post type: post
 */

get_header();

?>

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(<?php echo get_field('background_image'); ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2><?php the_field('head_post_title'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="breadcumb-nav">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-12">-->
    <!--                    <nav aria-label="breadcrumb">-->
    <!--                        <ol class="breadcrumb">-->
    <!--                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>-->
    <!--                            <li class="breadcrumb-item"><a href="#">Archive</a></li>-->
    <!--                            <li class="breadcrumb-item active" aria-current="page">Single Post Blog</li>-->
    <!--                        </ol>-->
    <!--                    </nav>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">
                        <!-- Single Post Share Info -->
                        <div class="col-2 col-sm-1">
                            <div class="single-post-share-info mt-100">
                              <?php
                              if (have_rows('single_post_social_media', 'option')):
                                while (have_rows('single_post_social_media', 'option')) : the_row(); ?>
                                    <a href="<?php echo get_sub_field('single_post_social_media_link', 'option'); ?>"
                                       class="  <?php echo get_sub_field('single_post_social_media_name', 'option'); ?>"><i
                                                class="<?php echo get_sub_field('single_post_social_media_icon', 'option'); ?>"
                                                aria-hidden="true"></i></a>
                                <?php endwhile;
                              else :
                              endif;
                              ?>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
  
  
                              <?php    if(get_field('') == TRUE){?>
                                    <!--  do something-->
                               <?php } ?>
  
                              <?php    if(get_field('heading_image') == TRUE){?>
                                  <div class="post-thumb">
                                      <img src="<?php echo get_field('heading_image')?>" alt="">
                                  </div>
                            <?php  } ?>

                             
                                
                                
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="<?php if (get_field('post_author') == TRUE) {
                                              echo "post-author";
                                            } ?>">
                                                <a href="#"><?php the_field('post_author'); ?></a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="<?php if (get_field('post_date') == TRUE) {
                                              echo "post-date";
                                            } ?>">
                                                <a href="#"><?php the_field('post_date'); ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="post-headline"><?php the_field('post_body_heading_h2'); ?></h2>

                                    <p><?php the_field('post_body_heading_text'); ?> </p>
                                  
                                  <?php if (get_field('post_blockquote')): ?>
                                      <blockquote class="yummy-blockquote mt-30 mb-30">
                                          <h5 class="mb-30">“<?php the_field('single_post_blockquote_content'); ?>”</h5>
                                          <h6 class="text-muted"><?php the_field('single_post_blockquote_author'); ?></h6>
                                      </blockquote>
                                    <?php // do something ?>
                                  <?php endif; ?>
                                    <h4><?php the_field('ingredients_heading'); ?></h4>
                                  <?php
                                  if (get_field('content_before_ingredients_list') == TRUE) {
                                    ?>
                                      <p><?php the_field('content_before_ingredients_list') ?></p>
                                  <?php } ?>
                                  <?php
                                  if (have_rows('ingredients_list')):?>
                                      <ul class="mb-30">
                                    <?php
                                  

                                
                                   while (have_rows('ingredients_list')) : the_row();
                                    ?>
                                    
                                  <li>
             <?php
             $term = get_sub_field('ingredient');
             if( $term ==  TRUE){echo $term->name; } ?>
                <?php    if(get_field('ingredient_quantity') == TRUE){
                    echo ":";
             } ?>
             
             <?php the_sub_field('ingredient_quantity'); ?></li>
             <?php endwhile;    else :   endif; ?>
                                      </ul>
                                  <?php
  
                                  // check if the repeater field has rows of data
                                  if( have_rows('post_single_rec_content_body') ):
    
                                    // loop through the rows of data
                                    while ( have_rows('post_single_rec_content_body') ) : the_row(); ?>
                                      <?php    if(get_sub_field('post_body_heading_h4') == TRUE){?>
                                            <h4><?php echo get_sub_field('post_body_heading_h4') ; ?></h4>
                                      <?php } ?>

                                      
                                      <?php    if(get_sub_field('post_body_rec_text') == TRUE){?>
                                        <?php echo get_sub_field('post_body_rec_text'); ?>
                                      <?php } ?>
  
                                 
                                      <?php    if(get_sub_field('post_body_rec_image') == TRUE){?>
                                            <img class="br-30 mb-30"
                                                 src="<?php the_sub_field('post_body_rec_image'); ?>"
                                                 alt="<?php echo get_sub_field('single_post_image_description');?>">
                                      <?php } ?>

                                    
                                   <?php
                                    endwhile;
                                  else :
                                    // no rows found
                                  endif;
                                  ?>
                                </div>
                            </div>

                            <!-- Tags Area -->
                            <div class="tags-area">
                              <?php the_tags( '', '  ', '' ); ?>
                            </div>



                         
                            
                            
                            
                            
                            
                            <!-- Related Post Area -->
                            <div class="related-post-area section_padding_50">
                                <h4 class="mb-30">Related post</h4>
                                <div class="related-post-slider owl-carousel">
                                    <!-- Single Related Post-->
                                  <?php
                                  $post_tag = 'hot';
                                  $the_query = new WP_Query( 'tag='.$post_tag );
                                  if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                      $the_query->the_post(); ?>
                                        <div class="single-post">
                                            <!-- Post Thumb -->
                                            <div class="post-thumb">
                                              <?php  echo  get_the_post_thumbnail();?>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <div class="post-meta d-flex">
                                                    <div class="post-author-date-area d-flex">
                                                        <!-- Post Author -->
                                                        <div class="post-author">
                                                            <a href="#"><?php the_field('post_author'); ?></a>
                                                        </div>
                                                        <!-- Post Date -->
                                                        <div class="post-date">
                                                            <a href="#"><?php echo get_the_date(); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="<?php echo get_post_permalink(); ?>">
                                                    <h6><?php the_field('head_post_title'); ?></h6>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Single Related Post-->
                                 <?php   }
                                  
                                  } else {
                                    // no posts found
                                  }
                                  /* Restore original Post Data */
                                  wp_reset_postdata();
                                  ?>
                                </div>
                            </div>
                            <!-- Comment Area Start -->
                            <div class="comment_area section_padding_50 clearfix">
                                <h4 class="mb-30">Нам важно Ваше мнение!</h4>
                                <div class="fb-comments" data-href="http://bestfoodtrip.com" data-width="666" data-numposts="25"></div>
                            </div>

                      

                        </div>
                    </div>
                    
                    
                </div>

              <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                      
                        <div class="single-widget-area about-me-widget section_padding_50 clearfix">
                            
                     
                            
                            <ul>
                                <li><h5 class="font-shadow-into-light">Время Приготовления: <?php the_field('cooking_time'); ?></h5></li>
                                <li><h5 class="font-shadow-into-light">Колличество порций: <?php the_field('number_of_servings'); ?></h5></li>
                                <li><h5 class="font-shadow-into-light">Сложность: <?php the_field('complexity'); ?></h5></li>
                                <li><h5 class="font-shadow-into-light"><?php echo get_the_term_list( $post->ID, 'kitchen_taxonomy', 'Кухни: <br>', ' <br> ', '' ); ?>
                                    </h5></li>
                                <li><h5 class="font-shadow-into-light"><?php echo get_the_term_list( $post->ID, 'source', 'Источник: ', '', '' ); ?></h5></li>
                                <li><h5 class="font-shadow-into-light"><?php echo get_the_term_list( $post->ID, 'Occasion', 'Повод: <br>', ' | ', '' ); ?></h5></li>
                                <li><h5 class="font-shadow-into-light"><?php echo get_the_term_list( $post->ID, 'type_of_dish', 'Тип Блюда: <br>', ' | ', '' ); ?></h5></li>
                                <li><h5 class="font-shadow-into-light">Опубликовано <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' назад'; ?></h5></li>
                            </ul>
                            
                            <div><?php if(function_exists('pf_show_link')){echo pf_show_link();} ?></div>
                        </div>

    
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
            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

<?php
get_footer();