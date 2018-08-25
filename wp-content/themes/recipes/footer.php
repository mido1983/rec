<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package recipes
 */

?>

	</div><!-- #content -->
<!-- ****** Footer Social Icon Area Start ****** -->
<div class="social_icon_area clearfix">
    <div class="container">
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="footer-social-area d-flex">-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>facebook</span></a>-->
<!--                    </div>-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>-->
<!--                    </div>-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>GOOGLE+</span></a>-->
<!--                    </div>-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i><span>linkedin</span></a>-->
<!--                    </div>-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>-->
<!--                    </div>-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i><span>VIMEO</span></a>-->
<!--                    </div>-->
<!--                    <div class="single-icon">-->
<!--                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>YOUTUBE</span></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<!-- ****** Footer Social Icon Area End ****** -->

<!-- ****** Footer Menu Area Start ****** -->
<footer class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-content">
                    <!-- Logo Area Start -->
                    <div class="footer-logo-area text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="yummy-logo"><?php echo get_field('Header_heading_site_name', 'option'); ?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
    </div>
 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Copywrite Text -->
                <div class="copy_right_text text-center">
                    <p>Copyright @2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ****** Footer Menu Area End ****** -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
