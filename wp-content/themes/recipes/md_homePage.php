<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/4/2018
 * Time: 8:06 PM
 * Template Name:md home page
 */


get_header();




		while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/welcome', 'slider' );
            get_template_part( 'template-parts/categories', 'area' );
            get_template_part( 'template-parts/blog', 'area' );
            get_template_part( 'template-parts/insta', 'area' );

         //   get_template_part( 'template-parts/blog', 'area' );


            // If comments are open or we have at least one comment, load up the comment template.
       

        endwhile; // End of the loop.
 setPostViews(get_the_ID());
get_footer();
