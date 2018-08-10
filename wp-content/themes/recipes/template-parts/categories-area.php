<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/4/2018
 * Time: 7:58 PM
 *
 */


?>
<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
    <div class="container">
        <div class="row">
            
            <?php
            $item_s_menu_image = get_field('item_s_menu_image', 'options');
            $second_item_image = get_field('second_item_image', 'options');
            $third_item_image = get_field('third_item_image', 'options');
            ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                  <?php
                  if( !empty($item_s_menu_image) ): ?>
                      <img src="<?php echo $item_s_menu_image['url'] ?>" alt="<?php echo $item_s_menu_image['alt'] ?>">
                  <?php endif; ?>
                    <div class="catagory-title">
                        <a href="<?php echo get_field('item_s_menu_link','options')?>">
                            <h5><?php echo get_field('item_s_menu_title','options')?></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                  <?php
                  if( !empty($second_item_image) ): ?>
                      <img src="<?php echo $second_item_image['url'] ?>" alt="<?php echo $second_item_image['alt'] ?>">
                  <?php endif; ?>
                    <div class="catagory-title">
                        <a href="<?php echo get_field('second_item_link','options')?>">
                            <h5><?php echo get_field('second_item_title','options')?></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                  <?php
                  if( !empty($third_item_image) ): ?>

                      <img src="<?php echo $third_item_image['url'] ?>" alt="<?php echo $third_item_image['alt'] ?>">
  
                  <?php endif; ?>
                    <div class="catagory-title">
                        <a href="<?php echo get_field('third_item_link','options')?>">
                            <h5><?php echo get_field('third_item_title','options')?></h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Categories Area End ****** -->
