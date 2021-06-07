<?php get_header(); ?>

<body class="auth-login">
  <section class="form-section">
    <div class="h-100 container-fluid">
      <div class="h-100 row justify-content-center align-items-center">
        <div class="content col-12 col-lg-11 col-xl-10">
          <a href="/">
            <img class="logo mb-4" src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" />
          </a>
          <h1 class="m-0 mb-3 b-6">Welcome back</h1>
          <p class="mb-4 h2 b-4">
            Sign in to your Bonjoro account and start sending messages that
            your customers will love.
          </p>
          <label for="email" class="d-block">
            Your email address
            <input type="email" name="email" id="email" class="mt-1 mb-3 form-control" placeholder="you@domain.com" />
          </label>
          <label for="password" class="d-block">
            Password
            <input type="password" name="password" id="password" class="mt-1 mb-3 form-control" placeholder="· · · · · ·" />
          </label>
          <div class="mb-3 d-flex flex-wrap">
            <label for="remember" class="m-0 mr-auto">
              <input type="checkbox" name="remember" id="remember" />
              Remember me
            </label>
            <a href="#" class="link-1 b-6">Forget Your Password?</a>
          </div>
          <div>
            <button class="mb-4 btn btn-block btn-warning b-6 btn-lg">Let's go</button>
            <div class="mb-4 position-relative button-divider">
              <hr style="border-color: rgba(0, 0, 0, 0.5)" />
              <p class="b-6">Or</p>
            </div>
            <a href="/auth-login" class="mb-4 btn btn-block btn-secondary btn-lg b-6"><i class="fab fa-google mr-2"></i>Sign in with Google</a>
          </div>
          <p class="text-center text-muted">
            Don't have an account
            <a href="/auth-register" class="link-1 b-6">Sign up now</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="visual-section" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png')">
    <div class="panel rounded p-3 f-14 b-6">
      <h2>What is a Bonjoro?</h2>
      <p>
        Bonjoro is the simplest way to send a personal video message to your
        customers.
      </p>
      <a href="/auth-register" class="link-1">Start your free account</a>
    </div>
  </section>

  <?php get_template_part("template-parts/floating-components/cookies"); ?>
  <?php get_template_part("template-parts/floating-components/chat"); ?>
  <?php get_footer(); ?>