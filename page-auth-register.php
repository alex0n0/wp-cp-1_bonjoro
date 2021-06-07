<?php get_header(); ?>

<body class="auth-register">
  <section class="form-section">
    <div class="h-100 container-fluid">
      <div class="h-100 row justify-content-center align-items-center">
        <div class="content col-12 col-lg-11 col-xl-10">
          <a href="/">
            <img class="logo mb-4" src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" />
          </a>
          <h1 class="m-0 mb-3 b-6">Welcome to Bonjoro</h1>
          <p class="mb-4">
            Create your Bonjoro account and start your free 14 day trial
          </p>
          <div class="mb-3 row">
            <div class="col-6">
              <label for="fname" class="m-0 d-block">
                <input type="text" name="fname" id="fname" class="form-control" placeholder="First name" />
              </label>
            </div>
            <div class="col-6">
              <label for="lname" class="m-0 d-block">
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name" />
              </label>
            </div>
          </div>
          <label for="email" class="d-block">
            <input type="email" name="email" id="email" class="mb-3 form-control" placeholder="Enter work email" />
          </label>
          <label for="password" class="d-block">
            <input type="password" name="password" id="password" class="mb-3 form-control" placeholder="Enter password" />
          </label>
          <div class="mb-3 pw-strength-indicator">
            <div class="fill fill-1"></div>
            <div class="marker marker--25"></div>
            <div class="marker marker--50"></div>
            <div class="marker marker--75"></div>
          </div>
          <p class="mb-3 password-info text-muted">Passwords must be at least 8 characters long and can't be things like password, 123456 or abcdef</p>
          <div class="mb-3 d-flex flex-wrap">
            <label for="remember" class="mr-auto d-flex">
              <input type="checkbox" name="remember" id="remember" class="mr-1 mt-1" />
              <div>By signing up I agree to the Bonjoro <a target="_blank" href="/terms-and-conditions" class="link-1 b-6 text-nowrap">Terms of Service</a> and <a target="_blank" href="/privacy-policy" class="link-1 b-6 text-nowrap">Privacy Policy</a></div>
            </label>
          </div>
          <div>
            <button class="mb-4 btn btn-block btn-warning b-6 btn-lg">Let's go</button>
            <div class="mb-4 position-relative button-divider">
              <hr style="border-color: rgba(0, 0, 0, 0.5)" />
              <p class="b-6">Or</p>
            </div>
            <a href="/auth-register" class="mb-4 btn btn-block btn-secondary btn-lg b-6">Sign up with Google</a>
          </div>
          <p class="text-center text-muted">
            Already have an account?
            <a href="/auth-login" class="link-1 b-6">Log in</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="visual-section" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png')">
  </section>

  <?php get_template_part("template-parts/floating-components/cookies"); ?>

  <?php get_footer(); ?>