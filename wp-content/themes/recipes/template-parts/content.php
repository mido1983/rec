<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recipes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="archive-area section_padding_80">
            <div class="container">
                <div class="row">
                    <!-- Single Post -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-post wow fadeInUp" data-wow-delay="0.1s">
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
                                              <div class="post-author">
                                                  <a href="#"><?php  recipes_posted_by();?></a>
                                              </div>
                                              <div class="post-date">
                                                  <a href="#"><?php  recipes_posted_on();?></a>
                                              </div>
     
                                      <?php endif; ?>
                                     
                                        
                                        <!-- Post Author -->
                                    
                                        <!-- Post Date -->
                                      
                               
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
                               
                                 </div>
                         
  
  
  
                              <?php   if ( is_singular() ) : ?>

                                  <a href="<?php  echo get_post_permalink(); ?>">
                                      <h4 class="post-headline"><?php the_title( );?></h4>
                                  </a>
                                  
                            <?php  else : ?>
                                  <a href="<?php  echo get_post_permalink(); ?>">
                   <h4 class="post-headline"><?php the_title( );?></h4>
                                  </a>
                              
                         <?php     endif;
                              ?>
                              
                            </div>
                        </div>
                    </div>
              
     
            </div>
        </section>
		




	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'recipes' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
		get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'recipes' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // recipes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
