<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Home-->
  <title>Newgen - Themes</title>
  <meta name="description"
    content="Spotlight your passion for the profession and grow the UX tribe. Join HFI and become a part of the most Influential UX Design Expert Team." />

  <?php wp_head(); ?>

</head>

<body>

  <header class="header-pfbi theme_header_pfbi">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <div class="container-fluid">
        <a href="https://www.pfbi.institute/home" class="pfbilogo navbar-brand m-0 p-0">
          <?php $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          if (has_custom_logo()) {
            echo '<img width="100" src="' . esc_url($logo[0]) . '" class="img-fluid" alt="' . get_bloginfo('name') . '">';
          } else {
            echo '<span>' . get_bloginfo('name') . '</span>';
          }
          ?>
        </a>
        <!--<div class="search-formobile d-block d-sm-none">
      <div class="search-menu">
          <img src="https://www.pfbi.institute/assets/img/icons/vuesax-linear-search-normal.svg" class="img-fluid" alt="search"
              title="search" />
      </div>
      </div>-->
        <button class="navbar-toggler collapsed ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar"
          aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <div class="close-icon py-1">✖</div>
        </button>
        <div class="collapse navbar-collapse pfbi-header-menu" id="n_bar">
          <?php wp_nav_menu(array('menu' => 'nav-menu', 'menu_class' => 'navbar-nav', 'container' => '', 'li_class' => 'nav-item'
          )); ?>
        </div>



        <!-- <ul class="navbar-nav">
            <li class="nav-item dropdown" id="spotlight">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Spotlight
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu pfbi-dropdown" aria-labelledby="navbarDropdown">
                <div class="drop-inner">
                  <ul>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/spotlight">
                        Overview
                      </a>
                    </li>
                  </ul>
                  <p class="nav-link dropdown-toggle">PFBI Connect <i class="fas fa-user"></i></p>
                  <ul>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/spotlight/pfbi-connect">
                        English
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/spotlight/insights">
                        Telugu
                      </a>
                    </li>
                  </ul>
                  <p class="nav-link dropdown-toggle">Online Webinars &amp; Symposiums
                    <i class="fas fa-user"></i>
                  </p>
                  <ul>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/spotlight/upcoming-sessions">
                        Upcoming Sessions
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/spotlight/past-sessions">
                        Past Sessions
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown" id="knowledgecenter">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Knowledge Centre
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu pfbi-dropdown pfbi-droptwo" aria-labelledby="navbarDropdown">
                <div class="drop-inner">
                  <ul>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/knowledge-centre">
                        Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/knowledge-centre/article">
                        Articles
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/knowledge-centre/authors-directory">
                        Authors Directory
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/knowledge-centre/case-study">
                        PFBI Case Studies
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown" id="familybusiness">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                What is Family Business
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu pfbi-dropdown pfbi-droptwo" aria-labelledby="navbarDropdown">
                <div class="drop-inner">
                  <ul>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/family-business/global-perspective">
                        A Global Perspective
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/family-business/three-circle-model">
                        The 3 Circle Model
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/family-business/complextities-risks">
                        Unique Complexities
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/family-business/family-harmony">
                        Family Harmony
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown" id="pfbi-story">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> The PFBI Story
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu pfbi-dropdown pfbi-droptwo" aria-labelledby="navbarDropdown">
                <div class="drop-inner">
                  <ul>
                    <li>
                      <a class="dropdown-item" href="https://www.pfbi.institute/pfbi-story">
                        Our Story
                      </a>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item" id="contact"><a class="nav-link" href="https://www.pfbi.institute/contact">Get in
                Touch</a>
            </li>
          </ul> -->
        <!--<div class="borderleft"></div>
        <div class="search-menu d-none d-sm-block">
            <img src="https://www.pfbi.institute/assets/img/icons/vuesax-linear-search-normal.svg" class="img-fluid" alt="search"
                title="search" />
        </div>-->
        <div class="login-menu">
          <a data-bs-toggle="modal" data-bs-target="#signupmodal" href="" class="login-btn">Free Sign up /
            Login</a>
        </div>

      </div>
    </nav>
  </header>