<header id="header">
  <div class="container px-4">
    <nav class="d-flex align-items-center">
      <a href="/" style="margin-right: 2rem">
        <img class="logo" src="<?php echo get_theme_file_uri("./assets/images/placeholder_logo.png"); ?>" alt="" />
      </a>
      <ul class="m-0 mr-auto d-none d-lg-flex list-unstyled">
        <li>
          <a class="mr-4 navlink" href="/videofunnels">Video Funnels</a>
        </li>
        <li class="mr-4 dropdown">
          <button class="btn p-0 navlink dropdown-toggle" type="button" id="navDropdownProduct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Product
          </button>
          <ul class="dropdown-menu border-0 shadow" aria-labelledby="navDropdownProduct">
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="/features">All features</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="/integrations">Integrations</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="/screen-recorder">Chrome Extension</a>
            </li>
          </ul>
        </li>
        <li class="mr-4 dropdown">
          <button class="btn p-0 navlink dropdown-toggle" type="button" id="navDropdownBonjoroFor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bonjoro for
          </button>
          <ul class="dropdown-menu border-0 shadow" aria-labelledby="navDropdownBonjoroFor">
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="<?php echo get_permalink( 1 ); ?>">SaaS</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="<?php echo get_permalink( 1 ); ?>">Marketing</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="<?php echo get_permalink( 1 ); ?>">Customer Success</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="<?php echo get_permalink( 1 ); ?>">Sales</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="<?php echo get_permalink( 1 ); ?>">eCommerce</a>
            </li>
            <li class="dropdown-item p-0">
              <a class="navlink px-3 py-2 d-block" href="<?php echo get_permalink( 1 ); ?>">Online Education</a>
            </li>
          </ul>
        </li>
        <li class="mr-4"><a class="navlink" href="/blog">Blog</a></li>
        <li><a class="navlink" href="/pricing">Pricing</a></li>
      </ul>
      <a class="ml-auto mr-4 navlink d-none d-lg-block" href="/auth-login">Login</a>
      <a class="cta btn btn-primary d-none d-lg-block b-7 btn-register" href="/auth-register">Start free trial</a>
      <button id="mobile-nav-menu-button" class="btn d-flex d-lg-none ml-auto px-0 align-items-center justify-content-center">
        <span class="m-0 p-0 material-icons-outlined">menu</span>
      </button>
    </nav>
    <!--  -->
    <div id="mobile-nav-menu">
      <ul class="m-0 mr-auto list-unstyled">
        <li>
          <a class="mt-4 navlink" href="<?php echo site_url('/videofunnels'); ?>">Video Funnels</a>
        </li>
        <li class="mt-3">
          <button id="mobile-nav-menu-product-button" class="btn btn-block p-0 navlink d-flex px-3 py-3">
            Product
          </button>
          <ul id="mobile-nav-menu-product-dropdown" class="list-unstyled mobile-nav-menu-dropdown">
            <li class="pb-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo site_url('/features'); ?>">All features</a>
            </li>
            <li class="py-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo site_url('/integrations'); ?>">Integrations</a>
            </li>
            <li class="py-2 pb-3">
              <a class="navlink px-3 p-0 d-block" href="<?php echo site_url('/screen-recorder'); ?>">Chrome Extension</a>
            </li>
          </ul>
        </li>
        <li class="mt-3">
          <button id="mobile-nav-menu-bonjoro-for-button" class="btn btn-block p-0 navlink d-flex px-3 py-3">
            Bonjoro for
          </button>
          <ul id="mobile-nav-menu-bonjoro-for-dropdown" class="list-unstyled mobile-nav-menu-dropdown">
            <li class="pb-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo get_permalink( 1 ); ?>">SaaS</a>
            </li>
            <li class="py-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo get_permalink( 1 ); ?>">Marketing</a>
            </li>
            <li class="py-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo get_permalink( 1 ); ?>">Customer Success</a>
            </li>
            <li class="py-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo get_permalink( 1 ); ?>">Sales</a>
            </li>
            <li class="py-2">
              <a class="navlink px-3 p-0 d-block" href="<?php echo get_permalink( 1 ); ?>">eCommerce</a>
            </li>
            <li class="py-2 pb-3">
              <a class="navlink px-3 p-0 d-block" href="<?php echo get_permalink( 1 ); ?>">Online Education</a>
            </li>
          </ul>
        </li>
        <li class="mt-3">
          <a class="navlink" href="<?php echo site_url('/blog'); ?>">Blog</a>
        </li>
        <li class="mt-3">
          <a class="navlink" href="<?php echo site_url('/pricing'); ?>">Pricing</a>
        </li>
        <li class="mt-3">
          <a class="ml-auto navlink" href="<?php echo site_url('/auth-login'); ?>">Login</a>
        </li>
        <li class="mt-3">
          <a class="cta btn btn-block btn-primary p-0 d-flex px-3 py-3 b-7" href="<?php echo site_url('/auth-register'); ?>">Start free trial</a>
        </li>
      </ul>
    </div>
  </div>
</header>