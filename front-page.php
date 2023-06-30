<?php


get_header();
?>

<main>
  <section class="hero">
    <div class="container">
      <h1 class="hero__heading">never miss a moment <br> again</h1>
      <div class="hero__photos">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/resources/assets/heading_img.jpg" alt="" />
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/resources/assets/heading_img3.jpg" alt="" />
        </div>
      </div>
      <h2 class="hero__subheading">Full-service studio: Kúkia handles event coverage to brand videos</h2>
    </div>
  </section>

  <div class="marquee">
    <div class="marquee-content">
      <span><i class="fas fa-star fa-lg"></i>
        <p>pro photographers</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>creative photography</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Innovative Impressions</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Creative Composition</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Eternal Moments</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Visionary Frames</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Artistic Perspectives</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Emotion Capture</p>
      </span>
      <span><i class="fas fa-star fa-lg"></i>
        <p>Storytelling Clicks</p>
      </span>
    </div>
  </div>

  <div class="recent_work container">
    <h3>our recent work</h3>
    <div class="recent_work__grid">
      <div class="recent_work__figure">
        <img src="<?php echo get_template_directory_uri() ?>/resources/assets/recent_work_personal1.jpg" alt="" />
        <div>
          <p>personal</p>
          <button><a href="#">view</a></button>
        </div>
      </div>
      <div class="recent_work__figure">
        <img src="<?php echo get_template_directory_uri() ?>/resources/assets/recent_work_travel.jpg" alt="" />
        <div>
          <p>travel</p>
          <button><a href="#">view</a></button>
        </div>
      </div>
      <div class="recent_work__figure">
        <img src="<?php echo get_template_directory_uri() ?>/resources/assets/recent_work_personal2.jpg" alt="" />
        <div>
          <p>personal</p>
          <button><a href="#">view</a></button>
        </div>
      </div>
      <div class="recent_work__figure">
        <img src="<?php echo get_template_directory_uri() ?>/resources/assets/recent_work_wedding1.jpg" alt="" />
        <div>
          <p>wedding</p>
          <button><a href="#">view</a></button>
        </div>
      </div>
      <div class="recent_work__figure">
        <img src="<?php echo get_template_directory_uri() ?>/resources/assets/recent_work_wedding2.jpg" alt="" />
        <div>
          <p>wedding</p>
          <button><a href="#">view</a></button>
        </div>
      </div>
    </div>
  </div>
  <div class="about">
    <div>
      <img src="<?php echo get_template_directory_uri() ?>/resources/assets/about_img.jpg" alt="" class="about__img" />
      <div class="about__txt">
        <h3>About us</h3>
        <div>
          <div>
            <p>Kúkia is a film production company led by Sarah Mota, which tells stories through audiovisual
              language.
              We offer event recording and commercial videos.</p>
            <br>
            <p>The name Kúkia is chosen after research and testing with the public, symbolizing the brightness of unique
              moments.
              We believe that each story is unique and deserves to be told in an authentic and exciting way, using
              audiovisual language to inspire and move our clients.</p>
          </div>
          <button>learn more</button>
        </div>
      </div>
    </div>
  </div>
  <div class="services">
    <h3>service we provide</h3>
    <div class="services__photos">
      <div class="row gy-0">
        <div class="col-md-12">
          <figure>
            <img src="<?php echo get_template_directory_uri() ?>/resources/assets/service_personal.jpg" alt="" />
            <div>personal</div>
          </figure>
        </div>
      </div>
      <div class="row gx-0">
        <div class="col-md-6">
          <figure class="">
            <img src="<?php echo get_template_directory_uri() ?>/resources/assets/service_wedding.jpg" alt="" />
            <div>wedding</div>
          </figure>
        </div>
        <div class="col-md-6">
          <figure>
            <img src="<?php echo get_template_directory_uri() ?>/resources/assets/service_travel.jpg" alt="" />
            <div>travel</div>
          </figure>
        </div>
      </div>
    </div>
  </div>
  <?php
  // while ( have_posts() ) :
  //   the_post();
  
  //   get_template_part( 'template-parts/content', 'page' );
  
  //   // If comments are open or we have at least one comment, load up the comment template.
  //   if ( comments_open() || get_comments_number() ) :
  //     comments_template();
  //   endif;
  
  // endwhile; // End of the loop.
  ?>

</main><!-- #main -->

<?php
get_footer();