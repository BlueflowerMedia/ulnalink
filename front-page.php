<?php get_header(); ?>

<!-- section header -->

<section id="section-header">
  <div class="companylogo flex1">
    <img id="img-logo" src="<?php echo get_template_directory_uri(); ?>/images/ulnalink-logo.JPG" alt="">ULNA LINK
  </div>
</section>

<!-- section description -->
<section id="section-desc">
<div class="flex-row all-list">
  <div class="list-left flex1">
    <h2 id="rcorner">We help hospitals connect with medical professionals.
      <p>We also help recruitment firms, private companies, and more!</p>
    </h2>
  </div>
  <div class="list-right flex1">
    <img id="img1" src="<?php echo get_template_directory_uri(); ?>/images/ulna-animation-final.gif" alt="">
  </div>
</section>

<!-- Blank space between header and banner-->
<section class="blank-space">
  <div class="blank-space">

  </div>
</section>

<!--banner-->
<section class="banner">

  <div class="triangle">

  </div>
  <div class="container flex-row">
    <div class="list-left flex">
      <p id="box">1</p>
    </div>
    <div id="1" class="list-right flex">
      <p id="top" >Search around the world with advanced filters.</p>
      <p id="bottom">This is a uesful tool to work with, it will help assist finding better offers.</p>
    </div>
  </div>

  <div class="container flex-row">

    <div class="list-left flex">
      <p id="box-white"></p>
    </div>
    <div class="list-left flex">
      <p id="box">2</p>
    </div>


    <div id="2" class="list-right flex">
      <p id="top">Auto share careers through social media.<p>
      <p id="bottom">Selected your profrssion? Great, create connection on this niche website.</p>
    </div>
  </div>

  <div class="container flex-row">
    <div class="list-left flex">
      <p id="box-white"></p>
    </div>
    <div class="list-left flex">
      <p id="box-white"></p>
    </div>

    <div class="list-left flex">
      <p id="box">3</p>
    </div>
    <div  id="3" class="list-right flex">
      <p id="top">Free!</p>
      <p id="bottom">This site will offer free service to those who need to find work.</p>
    </div>
  </div>
</section>

<!-- signup section -->
<section id="section-sign-up">
  <h1>Sign Up Today!</h1>
    <div class="container flex-row">
      <div class="employer flex1">
        <img id="pic-employer" src="<?php echo get_template_directory_uri(); ?>/images/ulna-employer.png" alt="">
        <div class="employer-form">
          <h2>Employer</h2>
            <?php echo do_shortcode('[contact-form-7 id="11" title="Sign Up Form"]') ?>
        </div>
      </div>

      <div class="job-seeker flex1">
        <img id="pic-job-seeker" src="<?php echo get_template_directory_uri(); ?>/images/ulna-job-seeker.png" alt="">
      <div class="job-seeker-form">
        <h2>Job Seeker</h2>
          <?php echo do_shortcode('[contact-form-7 id="11" title="Sign Up Form"]') ?>
        </div>
      </div>
    </div>
</section>

<!-- Contact Section -->
<section id="section-contact-us">
  <div class="container flex-row">
    <div class="contact flex1">
      <h2>Contact Us</h2>
      <p>We would love to help you with all of your recruitment/hiring questions. You will hear back us within 24 hours.</p>
      <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="13" title="Contact Us"]') ?>
      </div>
    </div>

    <div class="trees flex1">

    </div>

</section>



<?php get_footer(); ?>
