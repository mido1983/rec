



<div class="col-12 col-md-4 ">
    <div class="single-post wow fadeInUp" data-wow-delay=".4s">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <!-- Post Thumb -->
        <div class="post-thumb">
          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </div>
        <!-- Post Content -->
        <div class="post-content">
        
          <?php recipes_post_thumbnail(); ?>
            <div class="post-meta d-flex">

           
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
        </article><!-- #post-<?php the_ID(); ?> -->

    </div>
</div>



