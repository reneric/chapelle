<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  
<div class="content gradient-content">
  <div class="divider-shadow"></div>
  <div class="row">
    <div class="large-4 columns">
      <div class="panel buckets">
        <img class="bucket-hero" src="<?php the_field('admissions_bucket_img'); ?>" alt="">
        <section class="hero">
          <h3>Admissions</h3>
          <p><?php the_field('admissions_bucket'); ?></p>
        </section>
        <section class="learn-box">
          <h4 class="learn">
            <a href="<?php echo home_url(); ?>/admissions/">Learn More</a>
          </h4>
        </section>
      </div>
    </div>
    <div class="large-4 columns">
      <div class="panel buckets">
        <img class="bucket-hero" src="<?php the_field('students_bucket_img'); ?>" alt="">
        <section class="hero">
          <h3>Current Students</h3>
          <p><?php the_field('students_bucket'); ?></p>
        </section>
        <section class="learn-box">
          <h4 class="learn">
            <a href="<?php echo home_url(); ?>/current-students/">Learn More</a>
          </h4>
        </section>
      </div>
    </div>
    <div class="large-4 columns">
      <div class="panel buckets">
        <img class="bucket-hero" src="<?php the_field('alumnae_bucket_img'); ?>" alt="">
        <section class="hero">
          <h3>Alumnae</h3>
          <p><?php the_field('alumnae_bucket'); ?></p>
        </section>
        <section class="learn-box">
          <h4 class="learn">
            <a href="<?php echo home_url(); ?>/alumnae-2/">Learn More</a>
          </h4>
        </section>
      </div>
    </div>
  </div>
</div>
<div class="content area">
  <div class="divider-shadow"></div>
  <div class="row">
  <section class="welcome">
    <img src="<?php echo get_template_directory_uri(); ?>/library/img/welcome-to-chapelle.png" alt="">
    <p><?php the_content(); ?></p>
    
  <?php endwhile; ?>
    <aside id="events" class="gradient-events">
      <ul>
      <?php echo do_shortcode('[events_list_grouped mode="monthly" limit="3"]<li>  <div class="eventLeft"> <div class="date">#_EVENTDATES</div></div> <div class="eventRight">#_EVENTLINK <br/> #_EVENTEXCERPT{20} </div></li><br/> [/events_list_grouped]');?>
      </ul>
      <button>
        <p><a href="<?php echo home_url(); ?>/events/">Click For More Events</a></p>
      </button>
    </aside>
  </section>
  <section class="news">
  <?php query_posts('cat=5&posts_per_page=1');
  while (have_posts()) : the_post();
  ?>
  <div class="large-6 columns cat-yellow">
    <div class="panel">
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        if ( has_post_thumbnail() ):
          the_post_thumbnail('full');
        else: ?>
          <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(). '/library/img/thumbnail-default.jpg'?>" alt=""></a>
        <?php endif; ?>
                
        <h5><?php the_excerpt(); ?></h5>
        <img class="shadow-news" src="<?php echo get_template_directory_uri(); ?>/library/img/shadow-news.png" alt="">
      </div>
    </div>
  <?php endwhile;?>
  
  <?php query_posts('cat=6&posts_per_page=1');
  while (have_posts()) : the_post();?>
  <div class="large-6 columns cat-blue">
      <div class="panel">
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        if ( has_post_thumbnail() ):
          the_post_thumbnail('full');
        else: ?>
          <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(). '/library/img/thumbnail-default.jpg'?>" alt=""></a>
        <?php endif;?>
        <h5><?php the_excerpt(); ?></h5>
        <img class="shadow-news" src="<?php echo get_template_directory_uri(); ?>/library/img/shadow-news.png" alt="">
      </div>
    </div>
    <?php endwhile; ?>
    <?php
    query_posts('cat=7&posts_per_page=1');
    while (have_posts()) : the_post();?>
    <div class="large-6 columns cat-orange">
      <div class="panel">
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        if ( has_post_thumbnail()):
          the_post_thumbnail('full');
        else: ?>
          <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(). '/library/img/thumbnail-default.jpg'?>" alt=""></a>
    <?php endif; ?>
        <h5><?php the_excerpt(); ?></h5>
        <img class="shadow-news" src="<?php echo get_template_directory_uri(); ?>/library/img/shadow-news.png" alt="">
      </div>
    </div>
    <?php endwhile; ?>
    
    <?php
    query_posts('cat=8&posts_per_page=1');
    while (have_posts()) : the_post();?>
    <div class="large-6 columns cat-pink">
      <div class="panel">
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if ( has_post_thumbnail()):
         the_post_thumbnail('full');
        else: ?>
      <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/library/img/thumbnail-default.jpg' ?>" /></a>';         
        <?php endif; ?>
        <h5><?php the_excerpt(); ?></h5>
        <img class="shadow-news" src="<?php echo get_template_directory_uri(). '/library/img/shadow-news.png' ?>" />
      </div>
    </div>
    <?php endwhile; ?>
  </section>
</div>
</div>

<?php get_footer(); ?>