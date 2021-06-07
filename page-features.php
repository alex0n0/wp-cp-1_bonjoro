<?php get_header(); ?>

<body class="features">
  <?php get_template_part("template-parts/header/header-nav"); ?>
    <!--  -->
    <section class="px-4 pt-96 pb-96 bg-primary hero-section">
      <div class="container">
        <div class="row justify-content-center justify-content-md-between">
          <div
            class="col-12 col-md-7 col-lg-6 d-flex flex-column justify-content-center"
          >
            <div class="w-100">
              <h1 class="b-8">Ready to grow your business with video?</h1>
              <p class="mb-5">
                Bonjoro gives you all the tools you need to master personal
                video, and build powerful, lasting connections with your
                
              </p>
              <a
                href="/auth-register"
                class="btn btn-secondary d-block d-sm-inline b-7 mb-3 mb-sm-0 mr-0 mr-sm-4 btn-lg text-nowrap"
                >Start free trial</a
              >
              <a
                href="/pricing"
                class="btn btn-outline-secondary d-block d-sm-inline b-7 bg-white text-secondary btn-lg text-nowrap"
                >Browse out plans</a
              >
            </div>
          </div>
          <div class="d-none d-sm-block col-12 col-sm-7 col-md-4">
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
              alt=""
              width="100%"
              height="auto"
              class="mb-3"
            />
            <div class="d-flex author align-items-center">
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_profile.jpeg"
                alt=""
                height="60px"
                width="60px"
                class="rounded-circle flex-grow-0 flex-shrink-0 mr-3"
              />
              <span
                >Alex at Design Pickle explains why his whole team loves
                Bonjoro</span
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <div>
      <svg
        height="50px"
        width="100%"
        viewBox="0 0 100 100"
        class="mb-n1"
        preserveAspectRatio="none"
      >
        <use href="#end-section-tlbr-primary" />
      </svg>
    </div>
    <!--  -->
    <section class="mt-5 px-4 pt-4 pb-240 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Create and record anywhere, anytime for anyone
      </h2>

      <div class="feature-accordion">
        <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          class="feature-image mb-60"
        />
        <div class="content">
          <div id="accordion">
            <div class="d-flex">
              <div class="mr-3">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png"
                  alt=""
                  width="27px"
                  height="auto"
                />
              </div>
              <div>
                <h3>
                  <button
                    id="headingOne"
                    class="btn m-0 p-0 b-7 h3"
                    data-toggle="collapse"
                    data-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Desktop recorder
                  </button>
                </h3>
                <div
                  id="collapseOne"
                  class="collapse show"
                  aria-labelledby="headingOne"
                  data-parent="#accordion"
                >
                  <p>
                    No need to hash together multiple tools, or buy fancy
                    recording equipment. Bonjoro lets you send personal videos
                    quickly and easily from right where you’re sat.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="mr-3">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png"
                  alt=""
                  width="27px"
                  height="auto"
                />
              </div>
              <div>
                <h3>
                  <button
                    id="headingTwo"
                    class="btn m-0 p-0 b-7 h3"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-controls="collapseTwo"
                  >
                    Chrome extension
                  </button>
                </h3>
                <div
                  id="collapseTwo"
                  class="collapse"
                  aria-labelledby="headingTwo"
                  data-parent="#accordion"
                >
                  <p>
                    The fastest way to record, share and track webcam videos or
                    screen recordings. HD recording as standard.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="mr-3">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png"
                  alt=""
                  width="27px"
                  height="auto"
                />
              </div>
              <div>
                <h3>
                  <button
                    id="headingThree"
                    class="btn m-0 p-0 b-7 h3"
                    data-toggle="collapse"
                    data-target="#collapseThree"
                    aria-controls="collapseThree"
                  >
                    Mobile app
                  </button>
                </h3>
                <div
                  id="collapseThree"
                  class="collapse"
                  aria-labelledby="headingThree"
                  data-parent="#accordion"
                >
                  <p>
                    Take your Bonjoro app out into the wild, and give 
                    a taste of your real context and personality. Integrates
                    into phone and Gmail contacts.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="mr-3">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png"
                  alt=""
                  width="27px"
                  height="auto"
                />
              </div>
              <div>
                <h3>
                  <button
                    id="headingFour"
                    class="btn m-0 p-0 b-7 h3"
                    data-toggle="collapse"
                    data-target="#collapseFour"
                    aria-controls="collapseFour"
                  >
                    Languages
                  </button>
                </h3>
                <div
                  id="collapseFour"
                  class="collapse"
                  aria-labelledby="headingFour"
                  data-parent="#accordion"
                >
                  <p>
                    Support over 20 other languages into your video emails and
                    landing pages. We can add new languages in less than 24 hrs
                    so if yours isn’t listed just let us know.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  -->
    <div>
      <svg
        height="50px"
        width="100%"
        viewBox="0 0 100 100"
        preserveAspectRatio="none"
      >
        <use href="#start-section-trbl-secondary" />
      </svg>
    </div>
    <section class="pt-48 pb-48 bg-secondary testimonial-section">
      <div class="container px-4">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
              alt=""
              class="d-block mx-auto"
              width="100%"
              height="auto"
            />
          </div>
          <div class="col-12 col-lg-8 d-flex align-items-center text-white">
            <blockquote>
              <q class="d-block b-7"
                >If you can compare email metrics to Bonjoro’s, Bonjoro’s knock
                email out of the park. Open rates around 70%, click through
                rates around 30%, you can’t come close to that with email.</q
              >
              <cite class="b-7">Jason Resnick, Rezzz.com</cite>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <div>
      <svg
        height="50px"
        width="100%"
        viewBox="0 0 100 100"
        class="mb-n1"
        preserveAspectRatio="none"
      >
        <use href="#end-section-tlbr-secondary" />
      </svg>
    </div>
    <!--  -->
    <section class="mb-5 px-4 pt-4 pb-5 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Integrate with your funnels
      </h2>

      <div class="row">
        <div class="d-none d-lg-flex col-12 col-lg-7 col-xl-8 align-items-center">
          <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          width="100%"
          height="auto"
        />
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column justify-content-center">
          <h3>CRM Integrations</h3>
          <p>
            Integrate Bonjoro with your existing sales & marketing tools in a matter
            of minutes, and create simple workflows to pull  into your
            Bonjoro app via CRM trigger events and tags.
          </p>
    
          <h3>CSV data uploads</h3>
          <p>
            Have a list of contacts outside of your CRM, or run on a database that
            we don’t integrate with? No problem. Upload your customer list via CSV
            in just a few clicks.
          </p>
    
          <h3>Zapier connectivity</h3>
          <p>
            Featured on Zapier’s fastest growing apps list for 2 years running,
            Bonjoro integrates seamlessly with over 1500 other web apps.
          </p>
        </div>
      </div>
    </section>
    <!--  -->
    <section class="mb-5 px-4 pt-4 pb-5 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Start conversations & drive customer actions
      </h2>

      <div class="row">
        <div class="order-1 d-none d-lg-flex col-12 col-lg-7 col-xl-8 align-items-center">
          <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          width="100%"
          height="auto"
        />
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column justify-content-center">
          <h3>Conversations</h3>
          <p>
            Recipients can interact and reply inline to your video messages so you
            can turn conversations into . Reply in Bonjoro or forward
            replies to a support or shared inbox.
          </p>
    
          <h3>Message Templates</h3>
          <p>
            Save time sending with templates for your Bonjoro videos. Each template
            links together your email design, video landing page, and
            call-to-action.
          </p>
    
          <h3>Call to actions</h3>
          <p>
            Add eye catching call-to-actions to your Bonjoro videos to drive
            business critical outcomes like demo bookings, landing page views, and
            purchases.
          </p>
        </div>
      </div>
    </section>
    <!--  -->
    <section class="mb-5 px-4 pt-4 pb-5 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Personalise at scale
      </h2>

      <div class="row">
        <div class="d-none d-lg-flex col-12 col-lg-7 col-xl-8 align-items-center">
          <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          width="100%"
          height="auto"
        />
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column justify-content-center">
          <h3>Customer context & insight</h3>
          <p>
            Your customer data is visible as you record, either pulled from your
            CRM, or enriched by us. This allows you to tailor each and every message
            as you record for a genuinely personal experience.
          </p>
    
          <h3>Roll-ups</h3>
          <p>
            A time-saving way to send Bonjoro videos to a small group of recipients.
            Just bulk-select which contacts you want to “roll-up”, then send one
            video to all of those contacts.
          </p>
    
          <h3>Custom branding</h3>
          <p>
            Customise your videos with your own logo, landing page, subject lines,
            footers and team information to ensure all your messaging is perfectly
            on brand for a seamless user experience.
          </p>
        </div>
      </div>
    </section>
    <!--  -->
    <div>
      <svg
        height="50px"
        width="100%"
        viewBox="0 0 100 100"
        preserveAspectRatio="none"
      >
        <use href="#start-section-tlbr-primary" />
      </svg>
    </div>
    <section class="pt-48 pb-48 bg-primary testimonial-section">
      <div class="container px-4">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4 order-lg-1">
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
              alt=""
              class="d-block mx-auto"
              width="100%"
              height="auto"
            />
          </div>
          <div class="col-12 col-lg-8 d-flex align-items-center text-black">
            <blockquote>
              <q class="d-block b-7"
                >It’s easy to get lost in that flood of emails coming to the
                customer, so Bonjoro is a great way to stand out from the crowd, and
                get your business noticed.</q
              >
              <cite class="b-7">Pat Flynn, entrepreneur, blogger and podcaster</cite>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <div>
      <svg
        height="50px"
        width="100%"
        viewBox="0 0 100 100"
        class="mb-n1"
        preserveAspectRatio="none"
      >
        <use href="#end-section-trbl-primary" />
      </svg>
    </div>
    <!--  -->
    <section class="mb-5 px-4 pt-4 pb-5 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Maximise results
      </h2>

      <div class="row">
        <div class="order-1 d-none d-lg-flex col-12 col-lg-7 col-xl-8 align-items-center">
          <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          width="100%"
          height="auto"
        />
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column justify-content-center">
          <h3>Resend workflows</h3>
          <p>
            Give unwatched messages a second chance to get through. Choose how many
            days to wait between re-sends and send as a plain text message to try
            something different.
          </p>
    
          <h3>Deliverability</h3>
          <p>
            Benefit from Bonjoro’s best-in class video deliverability. Send from
            your own business email via verified domains, Gmail or Outlook, and see
            a detailed delivery history of all your videos.
          </p>
    
          <h3>Animated Previews</h3>
          <p>
            Choose to send your Bonjoro messages as plain text or HTML emails, and
            to use a static or animated preview of your video to maximise results
            with your customer base.
          </p>
        </div>
      </div>
    </section>
    <!--  -->
    <section class="mb-5 px-4 pt-4 pb-5 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Clearly see ROI
      </h2>

      <div class="row">
        <div class="d-none d-lg-flex col-12 col-lg-7 col-xl-8 align-items-center">
          <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          width="100%"
          height="auto"
        />
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column justify-content-center">
          <h3>Rich Reporting</h3>
          <p>
            Track what’s working with Bonjoro’s simple results dashboard, and report
            back to internal stakeholders. Filter by team members, interactions and
            dates.
          </p>
    
          <h3>Results Syncing</h3>
          <p>
            Send customer interactions and replies back into your own CRM, to track
            the entire customer journey, measure results against specific goals, and
            trigger other messaging workflows and drip campaigns.
          </p>
    
          <h3>Video Tracking</h3>
          <p>
            Know as soon as someone opens and interacts with your videos, with
            real-time tracking of opens, views, watches, thanks, and replies.
          </p>
        </div>
      </div>
    </section>
    <!--  -->
    <section class="mb-5 px-4 pt-4 pb-5 container feature-section">
      <img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
        alt=""
        width="48px"
        height="auto"
        class="d-block mx-auto mb-3"
      />

      <h2 class="text-center b-8 mb-60">
        Work as a team
      </h2>
      <div class="row">
        <div class="order-1 d-none d-lg-flex col-12 col-lg-7 col-xl-8 align-items-center">
          <img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png"
          alt=""
          width="100%"
          height="auto"
        />
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column justify-content-center">
          <h3>Team Inboxes</h3>
          <p>
            Invite your fellow team members into Bonjoro, set up team inboxes so you
            can manage your Bonjoro campaigns collaboratively.
          </p>
    
          <h3>Assigning</h3>
          <p>
            Automatically assign messages to be recorded by different team members
            depending where in the funnel the customer is.
          </p>
    
          <h3>Admin or filmer accounts</h3>
          <p>
            Enable access to all features of Bonjoro, or restrict team members to
            filmer-only account.
          </p>
        </div>
      </div>
    </section>
    <!--  -->
    <section class="mt-96 mb-96 container email-cta-section">
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
            <input
              type="text"
              class="form-control border-dark"
              placeholder="Your work email"
            />
            <button
              class="btn btn-dark b-7"
              style="
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px;
              "
            >
              Get started
            </button>
          </div>
          <div class="mt-2 d-flex justify-content-center">
            <ul
              class="m-0 list-unstyled d-flex flex-wrap justify-content-center text-nowrap"
            >
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