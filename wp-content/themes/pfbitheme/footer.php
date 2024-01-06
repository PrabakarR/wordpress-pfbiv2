<footer class="theme_footer_pfbi">
  <div class="social-feed-footer">
    <div class="container-fluid">
      <ul class="nav footer_feed spacing-bottom-50">
        <li><a href="https://www.youtube.com/user/PFBIInstitute" target="_blank"><img
              src="https://www.pfbi.institute/assets/img/icons/youtube.svg" class="img-fluid" alt="youtube"
              title="youtube"></a>
        </li>
        <li><a href="https://www.linkedin.com/company/pfbi" target="_blank"><img
              src="https://www.pfbi.institute/assets/img/icons/linkedin.svg" class="img-fluid" alt="linkedin"
              title="linkedin"></a>
        </li>
        <li><a href="https://www.facebook.com/PFBI.Institute/" target="_blank"><img
              src="https://www.pfbi.institute/assets/img/icons/facebook.svg" class="img-fluid" alt="facebook"
              title="facebook"></a>
        </li>
        <li><a href="https://www.instagram.com/pfbi.institute/" target="_blank"><img
              src="https://www.pfbi.institute/assets/img/icons/instagram.svg" class="img-fluid" alt="instagram"
              title="instagram"></a></li>
        <li><a href="https://twitter.com/PFBIInstitute" target="_blank"><img
              src="https://www.pfbi.institute/assets/img/icons/new-twitter.svg" class="img-fluid" alt="twitter"
              title="twitter"></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer-context">
    <div class="container-fluid">
      
      <?php wp_nav_menu(array('menu' => 'footer-menu', 'menu_id' => 'footer-menu', 'menu_class' => 'nav footer_menu spacing-bottom-30 ', 'container_id' => 'footer-menu-container')); ?>

      <div class="row align-items-center justify-content-center">
        <div class="col-auto">
          <p class="text-center poplight fs20 lh30">
            &copy;
            <?php echo date('Y') ?>
            <?php echo bloginfo('description') ?>. All Rights Reserved.
            <a href="https://www.pfbi.institute/privacy-policy" class="text-underline clrblack">Privacy Policy</a>
          </p>
        </div>
        <div class="col-auto">
          <div class="gramax-cyber">
            <p>Secured by <a href="https://gramaxcybersec.com/" target="_blank"><img
                  src="https://www.pfbi.institute/assets/img/icons/Gramax-Cybersec.png" class="img-fluid"
                  alt="GRAMAX Cybersec"></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>