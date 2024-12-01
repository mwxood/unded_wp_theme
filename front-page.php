<?php // home page template

defined("ABSPATH") || exit();

get_header();
?>

<main class="page-body container">
      <?php if(is_front_page()): ?>
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
    <?php if (have_posts()):
      the_post(); ?>

    <?php the_title("<h1>", "</h1>"); ?>

    <?php the_content(); ?>

        <a href="<?php the_permalink(); ?>">View more</a>

    <?php
    endif; ?>
</div>

<?php get_footer(); ?>
