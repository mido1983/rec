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
                                <div class="post-thumb">
                                    <img src="img/blog-img/10.jpg" alt="">
                                </div>
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


                                        <!-- Post Comment & Share Area -->
                                        <!--                                        <div class="post-comment-share-area d-flex">-->
                                        <!--                                            <!-- Post Favourite -->
                                        <!--                                            <div class="post-favourite">-->
                                        <!--                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>-->
                                        <!--                                            </div>-->
                                        <!--                                            <!-- Post Comments -->
                                        <!--                                            <div class="post-comments">-->
                                        <!--                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>-->
                                        <!--                                            </div>-->
                                        <!--                                            <!-- Post Share -->
                                        <!--                                            <div class="post-share">-->
                                        <!--                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
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
                                    <?php while (have_rows('ingredients_list')) : the_row(); ?>
                                               <li><?php the_sub_field('ingredient'); ?> : <?php the_sub_field('ingredient_quantity'); ?></li>
                                      <?php
                                    endwhile;
                                  else :
                                  
                                  
                                  endif; ?>
                                      </ul>
                   
  
  
                                  <?php
  
                                  // check if the repeater field has rows of data
                                  if( have_rows('post_single_rec_content_body') ):
    
                                    // loop through the rows of data
                                    while ( have_rows('post_single_rec_content_body') ) : the_row(); ?>

                                 
                                            <h4><?php echo get_sub_field('post_body_heading_h4') ; ?></h4>
                               
                                      <?php the_sub_field('post_body_rec_text'); ?>
                                        <img class="br-30 mb-30"
                                             src="<?php the_sub_field('post_body_rec_image'); ?>"
                                             alt="<?php echo get_sub_field('single_post_image_description');?>">
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
                                    <div class="single-post">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <img src="<?php echo get_site_url() . '/wp-content/themes/recipes/img/blog-img/15.jpg' ?>"
                                                 alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <div class="post-meta d-flex">
                                                <div class="post-author-date-area d-flex">
                                                    <!-- Post Author -->
                                                    <div class="post-author">
                                                        <a href="#">By Marian</a>
                                                    </div>
                                                    <!-- Post Date -->
                                                    <div class="post-date">
                                                        <a href="#">May 19, 2017</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h6>The Top Breakfast And Brunch Spots In Hove</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Related Post-->
                                    <div class="single-post">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <img src="<?php echo get_site_url() . '/wp-content/themes/recipes/img/blog-img/5.jpg' ?>"
                                                 alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <div class="post-meta d-flex">
                                                <div class="post-author-date-area d-flex">
                                                    <!-- Post Author -->
                                                    <div class="post-author">
                                                        <a href="#">By Marian</a>
                                                    </div>
                                                    <!-- Post Date -->
                                                    <div class="post-date">
                                                        <a href="#">May 19, 2017</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h6>The Top Breakfast And Brunch Spots In Hove</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Related Post-->
                                    <div class="single-post">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <img src="<?php echo get_site_url() . '/wp-content/themes/recipes/img/blog-img/16.jpg' ?>"
                                                 alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <div class="post-meta d-flex">
                                                <div class="post-author-date-area d-flex">
                                                    <!-- Post Author -->
                                                    <div class="post-author">
                                                        <a href="#">By Marian</a>
                                                    </div>
                                                    <!-- Post Date -->
                                                    <div class="post-date">
                                                        <a href="#">May 19, 2017</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h6>The Top Breakfast And Brunch Spots In Hove</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Related Post-->
                                    <div class="single-post">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <img src="<?php echo get_site_url() . '/wp-content/themes/recipes/img/blog-img/5.jpg' ?>"
                                                 alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <div class="post-meta d-flex">
                                                <div class="post-author-date-area d-flex">
                                                    <!-- Post Author -->
                                                    <div class="post-author">
                                                        <a href="#">By Marian</a>
                                                    </div>
                                                    <!-- Post Date -->
                                                    <div class="post-date">
                                                        <a href="#">May 19, 2017</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h6>The Top Breakfast And Brunch Spots In Hove</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment Area Start -->
                            <div class="comment_area section_padding_50 clearfix">
                                <h4 class="mb-30">2 Comments</h4>

                                <ol>
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="img/blog-img/17.jpg" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <span class="comment-date text-muted">27 Aug 2018</span>
                                                <h5>Brandon Kelley</h5>
                                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi
                                                    tempora.</p>
                                                <a href="#">Like</a>
                                                <a class="active" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="single_comment_area">
                                                <div class="comment-wrapper d-flex">
                                                    <!-- Comment Meta -->
                                                    <div class="comment-author">
                                                        <img src="img/blog-img/18.jpg" alt="">
                                                    </div>
                                                    <!-- Comment Content -->
                                                    <div class="comment-content">
                                                        <span class="comment-date text-muted">27 Aug 2018</span>
                                                        <h5>Brandon Kelley</h5>
                                                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit
                                                            amet, consectetur, adipisci velit, sed quia non numquam eius
                                                            modi tempora.</p>
                                                        <a href="#">Like</a>
                                                        <a class="active" href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="img/blog-img/19.jpg" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <span class="comment-date text-muted">27 Aug 2018</span>
                                                <h5>Brandon Kelley</h5>
                                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi
                                                    tempora.</p>
                                                <a href="#">Like</a>
                                                <a class="active" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>

                            <!-- Leave A Comment -->
                            <div class="leave-comment-area section_padding_50 clearfix">
                                <div class="comment-form">
                                    <h4 class="mb-30">Leave A Comment</h4>

                                    <!-- Comment Form -->
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact-name"
                                                   placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact-email"
                                                   placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact-website"
                                                   placeholder="Website">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" cols="30"
                                                      rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn contact-btn">Post Comment</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area about-me-widget text-center">
                            <div class="widget-title">
                                <h6>About Me</h6>
                            </div>
                            <div class="about-me-widget-thumb">
                                <img src="img/about-img/1.jpg" alt="">
                            </div>
                            <h4 class="font-shadow-into-light">Shopia Bernard</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>


                        <div class="single-widget-area popular-post-widget">
                            <div class="widget-title text-center">
                                <h6>Populer Post</h6>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/1.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>Top Wineries To Visit In England</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/2.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>The 8 Best Gastro Pubs In Bath</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/3.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>Zermatt Unplugged the best festival</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/4.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>Harrogate's Top 10 Independent Eats</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/5.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>Eating Out On A Budget In Oxford</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area add-widget text-center">
                            <div class="add-widget-area">
                                <img src="img/sidebar-img/6.jpg" alt="">
                                <div class="add-text">
                                    <div class="yummy-table">
                                        <div class="yummy-table-cell">
                                            <h2>Cooking Book</h2>
                                            <p>Buy Book Online Now!</p>
                                            <a href="#" class="add-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area newsletter-widget">
                            <div class="widget-title text-center">
                                <h6>Newsletter</h6>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount,
                                etc.</p>
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="newsletter-email" id="email" placeholder="Your email">
                                    <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

    <!-- ****** Instagram Area Start ****** -->
    <div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/1.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/2.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/3.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/4.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/5.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/6.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/1.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="img/instagram-img/2.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ****** Our Creative Portfolio Area End ****** -->

<?php
get_footer();