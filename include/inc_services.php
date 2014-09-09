<div id="services-wrap">
  <section id="services" class="container">


<h4 class="section-title section-title-offset">
<span><?php echo "Hello World"; ?></span></h4>
  
  <hgroup>
    <div id ="myword">
    Hello, my name is Han. I am a motivated CS student based in beautiful GuangZhou, China.
    </div>
    <h3 class="action"><?php echo 'Welcome to my site'; ?></h3>
  </hgroup>



<h4 id="opt1" class="section-title section-light">
<span>Services</span></h4>

<ul class="services row">

  <?php
  $services_q = new WP_Query('post_type=service');

  if ( $services_q->have_posts() ) : while ( $services_q->have_posts() ) : $services_q->the_post();
  ?>

    <li class="col-md-3 ">
      <?php the_post_thumbnail('full', array('class' => 'scale-with-grid')); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </li>

  <?php
  endwhile;

  endif;
  wp_reset_postdata();
  ?>

</ul><!-- /services.group -->

  </section><!-- /#services -->
</div><!-- /#services-wrap -->
