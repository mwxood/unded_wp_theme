<?php // home page template

defined("ABSPATH") || exit();

get_header();
?>

<main class="page-body container">
      <?php if(!empty(get_field('subtitle')) || !empty(get_field('title')) || !empty(get_field('banner_text'))): ?>
        <div class="container">
          <div class="banner-container">
              <div class="banner-inner d-flex align-items-center">
                  <div>
                      <?php if(!empty(get_field('subtitle'))): ?>
                        <span class="banner-top-title"><?php echo get_field('subtitle'); ?></span>
                      <?php endif; ?>
                      <?php if(!empty(get_field('title'))): ?>
                        <h1><?php echo get_field('title'); ?></h1>
                      <?php endif; ?>

                      <?php if(!empty(get_field('banner_text'))): ?>
                        <p><?php echo get_field('banner_text'); ?></p>
                      <?php endif; ?>
             
                      <a class="banner-button d-flex flex-wrap align-items-center justify-content-center" href="#">
                        <span class="button-bg">
                          <svg width="139" height="128" viewBox="0 0 139 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M49.6699 125.558C14.4645 115.691 -6.07426 79.1451 3.79577 43.9305C8.72745 26.3351 19.8396 14.1001 34.1046 7.48177C48.3825 0.857467 65.862 -0.157561 83.5189 4.79134C101.306 9.77689 116.926 16.0148 126.861 25.3618C131.815 30.0219 135.343 35.445 137.032 41.8699C138.722 48.2975 138.585 55.7821 136.117 64.585C131.177 82.2117 118.343 99.9478 102.311 112.032C86.2717 124.122 67.1645 130.462 49.6699 125.558Z"
                                  stroke="white"
                                  stroke-width="1.5"
                                  fill="none"
                                  class="path-animation"
                              />
                              </svg>
                        </span>
                          <span class="d-flex flex-wrap justify-content-center">
                              <span>Read case study</span>
                              <svg class="arrow" width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M6.24939 0.29541L6.24939 17.2954M6.24939 17.2954L11.7494 11.6468M6.24939 17.2954L0.749391 11.6468" stroke="white"/>
                              </svg>
                          </span>
                      </a>
                  </div>

                  <?php if(!empty(get_field('banner'))): ?>
                    <div class="banner-img">
                      <img src="<?php echo get_field('banner'); ?>" alt="Banner Image">
                    </div>
                  <?php endif; ?>
                 
              </div>
          </div>
        </div>
      <?php endif; ?>

     
        
    <div class="container-md">
        <section class="info-holder">
            <div class="info-content d-flex justify-content-between">
                <div class="way-we-do">
                  <?php if(!empty(get_field('services_subtitle'))): ?>
                    <h2 class="info-title">
                      <span><?php echo get_field('services_subtitle'); ?></span>
                      <?php echo get_field('services_title'); ?>
                    </h2>
                  <?php endif; ?>

                  <?php if(!empty(get_field('services_text'))): ?>
                    <p>
                      <?php echo get_field('services_text'); ?>
                    </p>
                  <?php endif; ?>

                  <?php if(!empty(get_field('services_subtitle')) || !empty(get_field('services_text')) || !empty(get_field('services_text'))): ?>
                    <a class="d-flex align-items-center" href="#">Read case study <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="arrow right"></a>
                  <?php endif; ?>
                </div>

              <?php 
              $args = array(
                'post_type' => 'services',
                'posts_per_page' => 4,
              );
              $the_query = new WP_Query( $args ); ?>

              <div class="info-services">
                <div class="info-content d-flex flex-wrap">

                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="services-col">
                      <?php if(!empty(get_field('services_image'))): ?>
                          <img src="<?php echo get_field('services_image'); ?>" alt="Web UI/UX Design">
                      <?php endif; ?>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                    </div>
                    <?endwhile; ?>
                  <? endif; wp_reset_postdata(); ?>
                </div>
              </div>


                
              
            </div>
        </section>
    </div>

    <?php 
    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page' => 4,
    );
    $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
      <section class="portolio-holder">
        <div class="container">
          <div class="slider-holder">
          <div class="swiper mySwiper">
          <div class="swiper-wrapper">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="swiper-slide">
            <?php if(!empty(get_field('portfolio_img'))): ?>
              <img src="<?php echo get_field('portfolio_img') ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            
            <h4><?php the_title(); ?></h4>
             <span><?php the_content(); ?></span>  
          </div>
          <?php endwhile; ?>
          </div>
          </div>
          </div>
          <div class="swiper-navigation">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>

         

        
      
            
    <?php endif; wp_reset_postdata(); ?>

    <?php if(!empty(get_field('testimonial_name')) || !empty(get_field('testimonial_text')) || !empty(get_field('testimonial_position'))): ?>
            <div class="portfolio-tesimonial">
                <div class="testimonial-text">
                    <h5><?php echo get_field('testimonial_text'); ?></h5>
                    <span class="name">
                       <?php echo get_field('testimonial_name'); ?> - <span><?php echo get_field('testimonial_position'); ?></span>
                    </span>
                </div>
            </div>
          <?php endif; ?>
    </div>               
  </section>

  <section class="partners">
        <div class="container-md">
           <h6>Over 32K+ software businesses growing with</h6>
           <div class="partners-content d-flex justify-content-between align-items-center">
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ixvisla.svg" alt="parner">
                </span>
               <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/artlq.svg" alt="parner">
               </span>
               <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visiovibe.svg" alt="parner">
               </span>
               <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/evo.svg" alt="parner">
               </span>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ink.svg" alt="parner">
                </span>
           </div>
        </div>
   </section>

   <?php
   
    $args = array(
      'post_type' => 'vision',
      'posts_per_page' => 3,

    );

    $the_query = new WP_Query( $args );

    $terms = get_terms( array(
      'taxonomy' => 'vision',
      'hide_empty' => false,
    ) );

   ?>

   <?php if ( $the_query->have_posts() ) : ?>
    <section class="services">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-nav.svg" class="services-img" alt="services">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spiral.svg" class="services-spiral" alt="services">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot.svg" class="services-spot" alt="services">
          
          <ul class="services-menu">
            <?php foreach ( $terms as $term ): ?>
              <li><a href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
          <div class="vision">
              <div class="container-md">
                  <div class="d-flex">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <span class="vision-holder">
                          <?php if(!empty(get_field('vision_image'))): ?>
                          <?php endif; ?>
                            <img src="<?php echo get_field('vision_image'); ?>" alt="vision">
                            <span>Jenny Wilson <em>Creative Design</em></span>
                        </span>
                    <?php endwhile; ?>
                </div>
              </div>
          </div>
    </section>
  <?php endif; wp_reset_postdata(); ?>


  <section class="services-area-holder">
    <div class="container-md">
        <div class="services-area">
            <h2>
                <span>MY Expereince resume</span>
                My services area
            </h2>

            <div class="servicers-row">
                <div class="services-table d-flex align-items-center justify-content-between">
                    <div class="name d-flex align-items-center services-table-col">
                        <img src="assets/img/web-dev.svg" alt="">
                        Web Development
                    </div>
                    <div class="description services-table-col">
                        We are helping client to create UI websites.
                    </div>
                    <div class="tech d-flex align-items-center">
                        <ul>
                            <li>Laravel</li>
                            <li>WordPress</li>
                            <li>PHP</li>
                        </ul>

                        <div class="button-holder">
                            <a href="/services/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right-up.svg" alt="arrow icon">
                            </a>
                       </div>
                    </div>
                </div>  
            </div>

        

            <div class="servicers-row">
                <div class="services-table d-flex align-items-center justify-content-between">
                    <div class="name d-flex align-items-center services-table-col">
                        <img src="assets/img/web-dev.svg" alt="">
                        <span class="colored">Web Development</span>
                    </div>
                    <div class="description services-table-col">
                        We are helping client to create UI websites.
                    </div>
                    <div class="tech d-flex align-items-center">
                        <ul>
                            <li>Ux/ Ui</li>
                            <li>Mobile App</li>
                            <li>Branding</li>
                        </ul>

                        <div class="button-holder">
                            <a href="/services/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right-up.svg" alt="arrow icon">
                            </a>
                       </div>
                    </div>
                </div>  
            </div>

            <div class="servicers-row">
                <div class="services-table d-flex align-items-center justify-content-between">
                    <div class="name d-flex align-items-center services-table-col">
                        <img src="assets/img/web-dev.svg" alt="">
                        Web Development
                    </div>
                    <div class="description services-table-col">
                        We are helping client to create UI websites.
                    </div>
                    <div class="tech d-flex align-items-center">
                        <ul>
                            <li>Ux/ Ui</li>
                            <li>Mobile App</li>
                            <li>Branding</li>
                        </ul>

                       <div class="button-holder">
                            <a href="/services/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right-up.svg" alt="arrow icon">
                            </a>
                       </div>
                    </div>
                </div>  
            </div>

        </div>
    </div>
  </section>

          <?php
            
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            );

            $the_query = new WP_Query( $args );

            ?>

            <?php if ( $the_query->have_posts() ) : ?>
              <section class="articles">
                <div class="container-md">
                <h2>
                  <span>Blog Post</span>
                  My Latest Articles
              </h2>
                <div class="post-row d-flex">
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <article class="post">
                    <span class="date"><?php the_date(); ?></span>
                        <h3><?php the_title(); ?> </h3>
                        <div class="article-short">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="d-flex align-items-center">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" alt=""></a>
                  </article>
                  <?php endwhile; ?>
                  </div>
                </div>
              </section>
            <?php endif; ?>

</div>
          
<?php get_footer(); ?>