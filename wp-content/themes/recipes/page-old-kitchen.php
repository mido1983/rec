<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/11/2018
 * Time: 3:32 PM
 * Template Name:md Old Kitchen
 */

get_header();
?>
<?php if ( have_posts() ) :
  query_posts('cat=59');
  ?>
<section class="archive-area section_padding_80">
  <div class="container">
    <div class="row">
      
      <?php
      /* Start the Loop */
      
      while ( have_posts() ) :
        the_post(); ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-post wow fadeInUp" data-wow-delay="0.1s">
            
            <!-- ****** Archive Area Start ****** -->
            
            
            <!-- Single Post -->
            
            <!-- Post Thumb -->
            <div class="post-thumb">
              <?php  recipes_post_thumbnail(); ?>
            </div>
            <!-- Post Content -->
            
            <?php
            
            
            if ( 'post' === get_post_type() ) :
            ?>
            <div class="post-content">
              <div class="post-meta d-flex">
                <div class="post-author-date-area d-flex">
                  <!-- Post Author -->
                  <div class="post-author">
                    <a href="#"><?php  recipes_posted_by();?></a>
                  </div>
                  <!-- Post Date -->
                  <div class="post-date">
                    <a href="#"><?php  recipes_posted_on();?></a>
                  </div>
                </div>
                <?php endif; ?>
                <!-- Post Comment & Share Area -->
                <div class="post-comment-share-area d-flex">
                  <!-- Post Favourite -->
                  <div class="post-favourite">
                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                  </div>
                  <!-- Post Comments -->
                  <div class="post-comments">
                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                  </div>
                  <!-- Post Share -->
                  <div class="post-share">
                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
              <a href="#">
                <h4 class="post-headline">Where To Get The Best Sunday Roast In The Cotswolds</h4>
              </a>
            </div>
          </div>
        </div>
        
        
        
        
        
        <!-- ****** Archive Area End ****** -->
      <?php	//	get_template_part( 'template-parts/content', get_post_type() );
      
      endwhile;
      
      //	the_posts_navigation();
      
      else :
        
        //	get_template_part( 'template-parts/content', 'none' );
      
      endif;
      ?>
      
      <!--    <div class="col-12">-->
      <!--        <div class="pagination-area d-sm-flex mt-15">-->
      <!--            <nav aria-label="#">-->
      <!--                <ul class="pagination">-->
      <!--                    <li class="page-item active">-->
      <!--                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>-->
      <!--                    </li>-->
      <!--                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
      <!--                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
      <!--                    <li class="page-item">-->
      <!--                        <a class="page-link" href="#">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
      <!--                    </li>-->
      <!--                </ul>-->
      <!--            </nav>-->
      <!--            <div class="page-status">-->
      <!--                <p>Page 1 of 60 results</p>-->
      <!--            </div>-->
      <!--        </div>-->
      <!--    </div>-->
    </div>
  </div>
</section>
<?php
get_footer();