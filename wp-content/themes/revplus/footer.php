<footer>
  
  <section class="newsletter pt-3 pb-3">
      <div class="container">
        <div class="row">
              <div class=" col col-12 col-md-5 flex-center mb-sm-3">
                
                <i class="fa-regular fa-envelope fa-2xlg"></i>
                <p id="newsletter-msg" class="text-start">Erhalten Sie unsere Neuigkeiten und Sonderangebote</p>
              </div>
              <div class=" col col-12 col-md-7">
                <form class="row" method="post" action="#">
                  <div class="col col-12 col-sm-6 col-9 col-md-8 ">
                    <input class="w-100 ps-2" type="email" name="email" id="email" placeholder="Ihre E-mail-Adresse" required>
                  </div>
                  <div class="col col-12 col-sm-6 col-3 col-md-4">
                    <input class="btn btn-warn w-100" type="submit" name="newspaper_btn" value="Abonnieren" required>
                  </div>
                  <p class="mt-2 mb-0">Sie können Ihr Einverständnis jederzeit widerrufen. Unsere Kontaktinformationen finden Sie u. a. in der Datenschutzerklärung.</p>
                  
                  </form>

              </div>
          </div><!-- row -->
      </div><!-- container-->
  </section>
  <div class="social-box col-lg-4 col-md-12 col-sm-12">
    <ul class="flex-center flex-column">
        
          <a title="Facebook" href="https://fietz-medien.de" target="_blank">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
        
       
          <a title="Twitter" href="https://fietz-medien.de" target="_blank" >
           <i class="fa-brands fa-twitter"></i>
         </a>
        
       
          <a title="RSS" href="https://fietz-medien.de" target="_blank">
          <i class="fa-solid fa-rss"></i>
         </a>
       
          <a id="YouTube" title="YouTube" href="https://fietz-medien.de" target="_blank">
           <i class="fa-brands fa-youtube"></i>
           </a>
      
      
          <a title="Pinterest" href="https://fietz-medien.de" target="_blank">
          <i class="fa-brands fa-pinterest-p"></i>
           </a>
       

          <a title="Vimeo" href="https://fietz-medien.de" target="_blank">
          <i class="fa-brands fa-vimeo-v"></i>
          </a>

             
          <a title="Instagram" href="https://fietz-medien.de" target="_blank">
           <i class="fa-brands fa-instagram"></i>
           </a>
       
             
          <a title="LinkedIn" href="https://fietz-medien.de" target="_blank">
          <i class="fa-brands fa-linkedin-in"></i>
         </a>
       
    </ul>
 

        </div>  <!-- social-box -->
  <div class="footer-oben">
      <div class="container">
          <div class="row">
              <div class=" col col-12 col-md-5">
                <div class="row">
                    <div class="col col-12 col-md-6 "><?php dynamic_sidebar('footer1'); ?></div>
                    <div class="col col-12 col-md-6"><?php dynamic_sidebar('footer2'); ?></div>
                </div>
              
              </div><!-- container col-md-4-->
              <div class="col-md-7">
                  <div class="row">
                      <div class="col col-12col-md-4"><?php dynamic_sidebar('footer3'); ?> </div>
                      <div class="col col-12col-md-4 shop-info"><?php dynamic_sidebar('footer4'); ?> </div>
                      <div class="col col-12 col-md-4"><?php dynamic_sidebar('footer5'); ?> </div>
                  </div>
            
            </div><!-- container col-md-8-->

          </div><!-- row1-->
          <div class="row payments">
          <?php dynamic_sidebar('footer payment section'); ?>
          </div><!-- row2-->
      </div><!-- container-->
  
  </div><!-- footer-oben-->
<div class="footer-unten text-center">
  <p>&copy; <?php echo date('Y'); ?> copyright by <?php bloginfo('name'); ?></p>
</div>
</footer>
<?php  wp_footer(); ?>
<script type="text/javascript">
  (function () { 
    var _tsid = 'XA2A8D35838AF5F63E5EB0E05847B1CB8'; 
    _tsConfig = { 
      'yOffset': '0', /* offset from page bottom */
      'variant': 'reviews', /* default, reviews, custom, custom_reviews */
      'customElementId': '', /* required for variants custom and custom_reviews */
      'trustcardDirection': '', /* for custom variants: topRight, topLeft, bottomRight, bottomLeft */
      'customBadgeWidth': '', /* for custom variants: 40 - 90 (in pixels) */
      'customBadgeHeight': '', /* for custom variants: 40 - 90 (in pixels) */
      'disableResponsive': 'false', /* deactivate responsive behaviour */
      'disableTrustbadge': 'false' /* deactivate trustbadge */
    };
    var _ts = document.createElement('script');
    _ts.type = 'text/javascript'; 
    _ts.charset = 'utf-8'; 
    _ts.async = true; 
    _ts.src = '//widgets.trustedshops.com/js/' + _tsid + '.js'; 
    var __ts = document.getElementsByTagName('script')[0];
    __ts.parentNode.insertBefore(_ts, __ts);
  })();
</script>
</body>
</html>