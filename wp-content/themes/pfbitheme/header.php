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

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
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
     
        <button class="navbar-toggler collapsed ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar"
          aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <div class="close-icon py-1">✖</div>
        </button>
     
          <?php wp_nav_menu(array('menu' => 'nav-menu', 
            'menu_class' => 'navbar-nav', 
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse pfbi-header-menu',
            'container_id'      => 'n_bar',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          )); ?>
       
     
        <div class="login-menu">
          <a data-bs-toggle="modal" data-bs-target="#signupmodal" href="" class="login-btn">Free Sign up /
            Login</a>
        </div>

      </div>
    </nav>
  </header>