<!doctype html>
<html <?php language_attributes();?>>
<head>
<meta <?php bloginfo("charset");?> >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '/', true, 'right'); bloginfo("name");?> </title>
<link rel="pingback" href="<?php bloginfo("pingback_url");?>">
<?php wp_head(); ?>

</head>
<!-- beginnt Body -->
<body <?php body_class();?>>


  <!-- beginnt der topbar -->
  <div id="topbar">

    <div class="container">
      <div class="row">
        <div class=" col col-4 col-lg-6 d-none d-xl-block align-self-center text-white ">Kontakt</div>
        <div class="col col-12 col-md-8 col-lg-6 text-white text-end ">
          <ul class="ms-auto mb-0">
            <li class="d-inline-block ms-3"><i class="fa-regular fa-user"></i>Anmelden</li>
            <li class="d-inline-block ms-3"><i class="fa-solid fa-dollar-sign"></i>Währung</li>
            <li class="d-inline-block ms-3"><i class="fa-solid fa-earth-europe"></i> Sprache: Deutsch</li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  <!-- beginnt der Header -->
  <header id="main-header" class="pt-lg-3 pt-sm-0">
    <div class="container"> 
      <div class="header-top"> 
        <div class="container pb-3"> 
          <div class="row justify-content-between align-items-center">
            <div class="col-md-4 col-sm-6 mb-sm-3"> 
              <div class="logo"> <?php the_custom_logo(); ?> </div>
              <a class="navbar-brand" href='<?php bloginfo("url")?>'><?php bloginfo("name");?></a>
            </div><!-- col-4 -->

            <ul id="tablet-display" class="col-sm-6 flex-center-between">
            <li class="d-inline-block ms-3"><i class="fa-regular fa-user"></i></li>
            <li class="d-inline-block ms-3">
                <i class="fa-solid fa-cart-shopping fa-xl"></i>
               <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                <?php echo WC()->cart->get_cart_total(); ?></a>
            </li>
            <li  class="d-inline-block ms-3"><i class="fa-solid fa-bars"></i></li>
          </ul>

            <div class=" col col-12 col-lg-8 flex-center-between header-search position-relative mt-sm-3 mt-md-0"> 
              <div id="Datenschutz-Logo"><img src="<?php echo get_template_directory_uri().'/assets/images/datenschutz.png'?>" alt="Datenschutz Logo"></div>
              <div id="katalog-search"><?php aws_get_search_form( true ); ?> <i class="fa-solid fa-magnifying-glass"></i></div>
              <div class="wunsch-liste"> <i class="fa-regular fa-heart fa-xl"></i><span> Wunschliste</span></div>
              <div class="warenkorb d-none d-lg-block"><i class="fa-solid fa-cart-shopping fa-xl"></i>
                <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                <?php echo WC()->cart->get_cart_total(); ?> Warenkorb</a></div>
             
            </div> <!-- col-8 -->
            
          </div><!-- main-Header container row -->

          
        </div> <!-- Header-Top container -->
        <?php get_template_part( 'template-parts/header/navi'); ?>
       
      </div> <!-- Header Top -->
      
    </div> <!-- main-Header container -->
  </header>


  <?php if (is_front_page()){?>
  <section id="hero">
   <div class="container">
    <div class="row flex-center-between">
    <div class="col col-12 col-md-9">
      <div class="slider-container">
      <?php get_template_part( 'template-parts/header/slider'); ?>
    
      </div>
    </div> <!-- col-md-9 -->
      <div class="hero-side col col-12 col-md-3  flex-center-between flex-column">
        <div class="oben "><div ><?php mytheme_display_slider_side1();?></div></div>
        
        <div class="unten"><div><?php mytheme_display_slider_side2();?></div></div>
      </div>
    </div>

    <!-- ############################## 
         ##### Services Section  ###### 
        ##############################-->

    <div class="services">
      <div class="row mt-3">

        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div class="custom-block col col-12 col-md-4">
                <div class="box flex-center-evenly bg-white">
                  <i class="<?php echo esc_attr(get_theme_mod('service_' . $i . '_icon')); ?>"></i>
                
                  <div>
                      <h4><?php echo esc_html(get_theme_mod('service_' . $i . '_title')); ?></h4>
                      <p><?php echo esc_html(get_theme_mod('service_' . $i . '_text')); ?></p>
                  </div>
                </div>
            </div>
            <?php endfor; ?>
      </div>
      
    </div>
    <?php } //end if (is_front_page()) ?>
    <!-- ############################## -->
   </div> <!-- container Hero section -->
  </section>
  <!-- endet der Header --> 