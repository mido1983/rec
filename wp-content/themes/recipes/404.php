<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package recipes
 */
?>
<style>

    .body {
        background: #fafafa;
    }
    .content-area {
        background: url("images/404-Background.png") repeat scroll 130% 70% rgba(0, 0, 0, 0);
    }
    .page-title {
        font-size: 25px;
    }
    .error-wrapper {
        margin: 0 auto;
        max-width: 670px;
    }
    .error-message {
        line-height: 2;
        max-width: 300px;
        padding: 30px;
        text-align: center;
    }
    .error-logo {
        clear: left;
        float: right;
        max-width: 300px;
        margin-bottom:20px;
    }
    .search-form {
        float: right;
        width: 500px;
    }
    .error-links {
        float: left;
        max-width: 600px;
        padding-left :60px;
    }
    .error-links > li {
        float: left;
        list-style: outside none none;
        padding-left: 150px;
        padding-top: 50px;
    }
    .search-form > p {
        font-size: 18px;
        text-align: center;
    }
    
    
</style>




<?php
get_header();







?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <header class="page-header">
                <h1 class="page-title center"><?php _e( 'Kaput! 404 Error' ); ?></h1>
            </header>
            <div class="error-wrapper">
                <div class="error-logo"><img src="<?php echo get_bloginfo('template_url') ?>/images/404 logo.png"/> </div>
                <div class="error-message"><p><?php _e( 'Sorry the page you are looking for is broken. Our team is working
                        on fixing this problem' ); ?></p></div>
            </div>
          <?php echo '<br/>'; ?>
            <div class="search-form">
                <p> You can search below or return to homepage </p>
              <?php get_search_form(); ?> </div>
            <ul class="error-links">
                <li><a href="<?php echo home_url(); ?> ">Home</a> <img src="<?php echo get_bloginfo('template_url') ?>/images/home-icon.png"/> </li>
                <li> <img src="<?php echo get_bloginfo('template_url') ?>/images/archives-icon.png"/><a href=" # ">Popular Pages</a></li>
            </ul>
          <?php echo '<br/>'; ?>
        </div><!-- #content -->
    </div><!-- #primary -->
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
?>