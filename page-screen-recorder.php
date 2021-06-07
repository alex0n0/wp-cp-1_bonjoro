<?php get_header(); ?>

<body class="screen-recorder">
  <?php get_template_part("template-parts/header/header-nav"); ?>
  <!--  -->
  <section class="px-4 container hero-section">
    <div class="row justify-content-between">
      <div class="col-12 col-md-5 d-flex align-items-center">
        <div>
          <h1 class="b-8">Say hello to Bonjoro Chrome</h1>
          <p>Your fast & unlimited HD webcam and screen recorder.</p>
          <ul class="list-unstyled">
            <li class="b-7">Fast, HD recording</li>
            <li class="b-7">No recording limits</li>
            <li class="b-7">No storage limits</li>
          </ul>
          <a href="#" class="btn btn-primary btn-lg py-2 px-3 b-7"><i class="fab fa-chrome mr-2"></i>Install Free</a>
        </div>
      </div>
      <div class="d-none d-md-block col-md-7">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" width="100%" height="auto">
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-144 d-none d-sm-block container text-center">
    <h2 class="b-8">Communicate more effectively with video</h2>
    <div class="row justify-content-center">
      <div class="col-8">
        <p>Bonjoro’s HD Chrome screen & webcam recorder helps you delight and engage your customers with helpful videos throughout their journey with your business.</p>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-50 d-none d-sm-block container">
    <div class="row">
      <div class="col-6">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" width="100%" height="auto">
      </div>
      <div class="col-6 d-flex flex-column justify-content-center">
        <h2 class="b-8">Explain things more easily</h2>
        <p>Why send multiple messages, when you can record a single video that’s easier to understand. Create demos, explainers, and guides to share with everyone, or record unique videos for a truly personal touch.</p>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-50 d-none d-sm-block container">
    <div class="row">
      <div class="col-6 order-1">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" width="100%" height="auto">
      </div>
      <div class="col-6 d-flex flex-column justify-content-center">
        <h2 class="b-8">Inspire and drive action</h2>
        <p>Add eye-catching CTAs to your videos. Whether it's learning more about your offering, booking a call, or joining your community, video is the perfect medium for driving customers to take the next step.</p>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-50 d-none d-sm-block container">
    <div class="row">
      <div class="col-6">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" width="100%" height="auto">
      </div>
      <div class="col-6 d-flex flex-column justify-content-center">
        <h2 class="b-8">Engage on any channel</h2>
        <p>Share videos with your leads and customers on any channel. Embed a video thumbnail into your emails, or paste a simple link into your website, social channels, SMS or chat messages.</p>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-144 px-4 container feature-section">
    <h2 class="mb-4 text-center b-8 h1">Simple, intuitive features to help you succeed</h2>
    <p class="mb-5 text-center">Bonjoro’s Chrome screen recorder includes all the features you need to scale video across all your customer touch-points.</p>

    <div class="feature-accordion">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" class="feature-image mb-60" />
      <div class="content">
        <div id="accordion">
          <div class="d-flex">
            <div class="mr-3">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png" alt="" width="27px" height="auto" />
            </div>
            <div>
              <h3>
                <button id="headingOne" class="btn m-0 p-0 b-7 h3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Fast HD recording
                </button>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <p class="m-0"></p>
                <p>The fastest way to record and share webcam videos or screen recordings. HD recording as standard.</p>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="mr-3">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png" alt="" width="27px" height="auto" />
            </div>
            <div>
              <h3>
                <button id="headingTwo" class="btn m-0 p-0 b-7 h3" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo">
                  Reusable templates
                </button>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <p>After recording, you can edit and save the design of your video, changing the default text, adding your logo, brand colour, background image and call to action.</p>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="mr-3">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png" alt="" width="27px" height="auto" />
            </div>
            <div>
              <h3>
                <button id="headingThree" class="btn m-0 p-0 b-7 h3" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">
                  Quick sharing
                </button>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <p>Share your videos quickly and easily by embedding a thumbnail into your emails, or sharing a simple link.</p>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="mr-3">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png" alt="" width="27px" height="auto" />
            </div>
            <div>
              <h3>
                <button id="headingFour" class="btn m-0 p-0 b-7 h3" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour">
                  Instant tracking
                </button>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <p>See how people are interacting with your recordings by tracking how many times your video is watched or if your call to action was clicked.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="container others-section">
    <h2 class="mb-4 b-8 h1 text-center">Grow your business with Bonjoro’s other video tools</h2>
    <div class="row justify-content-between">
      <div class="col-12 col-md-5 text-center">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" width="100%" height="auto" class="mb-4">
        <h3 class="b-8 mb-3">Bonjoro web platform</h3>
        <p class="mb-4">Connect Bonjoro with your existing CRM and tools to send personalised videos.</p>
        <a href="/" class="btn btn-primary btn-lg b-7 py-2 px-4">Get started</a>
      </div>
      <div class="col-12 col-md-5 text-center">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png" alt="" width="100%" height="auto" class="mb-4">
        <h3 class="b-8 mb-3">Stay in sync</h3>
        <p class="mb-4">Send your videos on the move with Bonjoro’s iOS and Android apps.</p>
        <div class="d-flex flex-wrap justify-content-center">
          <a href="#" class="mx-3 mb-3 app"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/google_play_image.png" alt="" width="151px" height="auto" /></a>
          <a href="#" class="mx-3 app"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/app_store_image.png" alt="" width="151px" height="auto" /></a>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-160 container">
    <h2 class="text-center b-8 mb-5">Trusted by the best</h2>
    <div class="d-flex align-items-center justify-content-between">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" width="10%" height="auto">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" width="10%" height="auto">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" width="10%" height="auto">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" width="10%" height="auto">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" width="10%" height="auto">
    </div>
  </section>
  <!--  -->
  <section class="mt-200 mb-96 container email-cta-section">
    <div class="row justify-content-between">
      <div class="mb-5 mb-md-0 col-12 col-md-5">
        <h2 class="b-8">Try Bonjoro today</h2>
        <p class="m-0 mb-1">
          See how quickly custom video can change your business. Bonjoro plans
          start at $0 a month.
        </p>
        <a href="/pricing" class="link-1 b-7">See plans</a>

      </div>
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
        <div class="input-group">
          <input type="text" class="form-control border-dark" placeholder="Your work email" />
          <button class="btn btn-dark b-7" style="
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px;
              ">
            Get started
          </button>
        </div>
        <div class="mt-2 d-flex justify-content-center">
          <ul class="m-0 list-unstyled d-flex flex-wrap justify-content-center text-nowrap">
            <li class="mr-4">
              <svg viewBox="0 0 100 100" height="16" width="16">
                <use href="#svg-check-mark" />
              </svg>
              Free 14-day trial
            </li>
            <li class="mr-4">
              <svg viewBox="0 0 100 100" height="16" width="16">
                <use href="#svg-check-mark" />
              </svg>
              No credit card required
            </li>
            <li>
              <svg viewBox="0 0 100 100" height="16" width="16">
                <use href="#svg-check-mark" />
              </svg>
              Cancel anytime
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <?php get_template_part("template-parts/footer/footer-links"); ?>
  <?php get_template_part("template-parts/floating-components/chat"); ?>
  <?php get_footer(); ?>