<?php
/**
 * Template part for displaying services section
 *
 * @package Car Paint Job
 * @subpackage car_paint_job
 */
?>

<?php $car_paint_job_static_image = get_template_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'car_paint_job_paint_job_arrows', true) != '') { ?>
  <section id="featured-car" class="py-5">
    <div class="container">
      <?php if( get_theme_mod('car_paint_job_featured_car_section_tittle') != ''){ ?>
        <h2 class="text-center mb-5"><?php echo esc_html(get_theme_mod('car_paint_job_featured_car_section_tittle','')); ?></h2>
      <?php }?>
      <div class="row">
        <?php
          $car_paint_job_post_category = get_theme_mod('car_paint_job_featured_car_section_category');
          if($car_paint_job_post_category){
            $car_paint_job_page_query = new WP_Query(array( 'category_name' => esc_html( $car_paint_job_post_category ,'car-paint-job')));?>
            <?php while( $car_paint_job_page_query->have_posts() ) : $car_paint_job_page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6">
                <div class="cat-inner-box mb-4">
                  <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php echo (the_post_thumbnail_url('full')); ?>"/>
                  <?php }else {echo ('<img src="'.$car_paint_job_static_image.'">'); } ?>
                  <div class="car-inner-content">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words (get_the_content(),8 );?></p>
                    <a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right me-2"></i><?php esc_html_e('Read More','car-paint-job'); ?></a>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          }
        ?>
      </div>
    </div>
  </section>
<?php } ?>
