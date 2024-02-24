<?php
/**
 * include Custom Navigation Walker
 */

require_once get_template_directory()."/walker.php";


// Funktion zum Hinzufügen von CSS-Dateien
function add_styles(){
 wp_enqueue_style('bootstap_style',get_template_directory_uri().'/assets/css/bootstrap.min.css');
 wp_enqueue_style('fontawesome_style',get_template_directory_uri().'/assets/css/all.min.css');
 wp_enqueue_style('owl_carousel_style',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
 wp_enqueue_style('owl_theme_style',get_template_directory_uri().'/assets/css/owl.theme.default.css');
 wp_enqueue_style('my_style',get_template_directory_uri().'/style.css');
 
}
// Funktion zum Hinzufügen von Skriptdateien
function add_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),array(),false,true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstap_js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('owl_js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),false,true);
    // wp_enqueue_script('fontawesome_js',get_template_directory_uri().'/assets/js/all.min.js',array(),false,true);
    wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/script.js',array(),false,true);
    
   } 
  // Funktion zum Hinzufügen des Menüs
   function register_custom_menus(){
   register_nav_menus(array(
    'primary'=> 'Haupt-Nav',
   'footerNav'=> 'Footer-menu'
   ));
}
// // Funktion zum Hinzufügen des Bootstrap-Menüs
function add_bootstrap_menu(){
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav flex-center-between w-100 mb-2 mb-md-0 %2$s">%3$s</ul>',
        'depth' => 3,
         'walker' => new WP_Bootstrap_walker(),
    ));
 }



// Aktionen hinzufügen
add_action('wp_enqueue_scripts','add_styles');
add_action('wp_enqueue_scripts','add_scripts');
add_action('init','register_custom_menus');


// Theme-Unterstützung hinzufügen
add_theme_support( 'post-thumbnails' );

// Logo-Unterstützung hinzufügen
function revplus_custom_logo_setup() {
	$defaults = array(
		'height'               => 200,
		'width'                => 500,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          =>array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => false, 
        
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'revplus_custom_logo_setup' );


/**
 * Warenkorb-Inhalte anzeigen
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}
/*
** Registrieren Hero Section
*/

function revplus_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'hero_section_panel_id', array(
        'priority'       => 4,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Hero section',
        'description'    => '',
    ) );

    $main_section_id='slider_section';
    $wp_customize->add_section( $main_section_id, array(
        'title'    => esc_html__( 'slider', 'revplus' ),
        'description' => esc_html__( 'slide upload', 'revplus' ),
        'priority' => 2,
        'panel' => 'hero_section_panel_id',
    ) );

   
    $slider_names=[
        'slider1'=>'slider_1',
        'slider2'=>'slider_2',
        'slider3'=>'slider_3',
        'slider4'=>'slider_4'
    ];
    foreach($slider_names as $slide_lable => $slide_name){
        $setting_id = sprintf('revplus %s',$slide_name);
        $wp_customize->add_setting( $setting_id  );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $setting_id , array(
            'label'    => esc_html__( $slide_lable, 'revplus' ),
            'section'  => $main_section_id,
            'settings' => $setting_id,
        ) ) );
    }

    
}
add_action( 'customize_register', 'revplus_customize_register' );

// the section slider-side hinzufügen
function customize_slider_side_register( $wp_customize ) {
    $wp_customize->add_section( 'slider_side_section', array(
        'title'    => __( ' slider-right ', 'revplus' ),
        'priority' => 3,
        'panel' => 'hero_section_panel_id',
    ) );

    $wp_customize->add_setting( 'slider_side_image1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_setting( 'slider_side_image2', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_side_image1', array(
        'label'    => __( ' slider-side', 'revplus' ),
        'section'  => 'slider_side_section',
        'settings' => 'slider_side_image1',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_side_image2', array(
        'label'    => __( ' slider-side2', 'revplus' ),
        'section'  => 'slider_side_section',
        'settings' => 'slider_side_image2',
    ) ) );
}
add_action( 'customize_register', 'customize_slider_side_register' );

// die Bilder vom oben slider side anzeigen
function mytheme_display_slider_side1() {
    $slider_side_image1 = get_theme_mod( 'slider_side_image1' );

    if ( $slider_side_image1 ) {
        echo '<img class ="rabbat-banner slider-side-image" src="' . esc_url( $slider_side_image1) . '" alt="slider_side1">';
    }
}
// die Bilder vom unten slider side anzeigen
function mytheme_display_slider_side2() {
    $slider_side_image2 = get_theme_mod( 'slider_side_image2' );

    if ( $slider_side_image2 ) {
        echo '<img class ="rabbat-banner slider-side-image" src="' . esc_url( $slider_side_image2  ) . '" alt="slider_side2">';
    }
}









// section Text Block hinzufügen
function custom_text_block_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'custom_text_block_section', array(
        'title'    => __( ' Custom Text Block', 'revplus' ),
        'priority' => 5,
    ) );

    $wp_customize->add_setting( 'custom_text_block_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_text_block_image', array(
        'label'    => __( ' Banner Image', 'revplus' ),
        'section'  => 'custom_text_block_section',
        'settings' => 'custom_text_block_image',
    ) ) );

    $wp_customize->add_setting('custom_text_block_title');
    $wp_customize->add_control('custom_text_block_title', array(
        'label' => 'Title',
        'section' => 'custom_text_block_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('custom_text_block_subtitle');
    $wp_customize->add_control('custom_text_block_subtitle', array(
        'label' => 'Subtitle',
        'section' => 'custom_text_block_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('custom_text_block_text');
    $wp_customize->add_control('custom_text_block_text', array(
        'label' => 'Paragraph',
        'section' => 'custom_text_block_section',
        'type' => 'textarea',
    ));


    
}
add_action( 'customize_register', 'custom_text_block_customize_register' );

// die Bilder des Banners anzeigen
function mytheme_display_custom_text_block_banner() {
    $banner_image = get_theme_mod( 'custom_text_block_image' );

    if ( $banner_image ) {
        echo '<img class ="rabbat-banner img-fluid" src="' . esc_url( $banner_image ) . '" alt="banner">';
    }
}
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++





/**
 *  services section hinzufügen
 */


function services_section_customizer_settings($wp_customize) {
    // Section
   
    $wp_customize->add_panel( 'services_panel_id', array(
        'priority'       => 4,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'services',
        'description'    => '',
    ) );
  

    // schleife zum 3 Sections erstellen
    for ($i = 1; $i <= 3; $i++) {
    // Section 
        $wp_customize->add_section('service_'.$i, array(
            'title' => __('service'.$i ,'revplus'),
            'priority' => $i,
            'panel' => 'services_panel_id',
            
        ));
        // Title Setting
        $wp_customize->add_setting('service_' . $i . '_title', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        // Text Setting
        $wp_customize->add_setting('service_' . $i . '_text', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        // Icon Setting
        $wp_customize->add_setting('service_' . $i . '_icon', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        

        // Title Control
        $wp_customize->add_control('service_' . $i . '_title', array(
            'label' => __('Title', 'revplus'),
            'section' => 'service_'.$i,
            'settings' => 'service_' . $i . '_title',
            'type' => 'text',
        ));
        

        // Text Control
        $wp_customize->add_control('service_' . $i . '_text', array(
            'label' => __('Text', 'revplus'),
            'section' => 'service_'.$i,
            'settings' => 'service_' . $i . '_text',
            'type' => 'textarea',
        ));

        // Icon Control
        $wp_customize->add_control('service_' . $i . '_icon', array(
            'label' => __('Icon', 'revplus'),
            'section' => 'service_'.$i,
            'settings' => 'service_' . $i . '_icon',
            'type' => 'select',
            'choices' => array(
                'fa-solid fa-store' => 'store',
                'fa-regular fa-credit-card' => 'credit-card fa-solid',
                'fa-solid fa-truck' => 'truck',
                
            ),
        ));
    }
}
add_action('customize_register', 'services_section_customizer_settings');

add_theme_support( 'widgets' );




// Sidebar registieren
function revplus_sidebar(){

    register_sidebar( array(
        'name'           => 'sidebar',
		'id'             => "sidebar",
		'description'    => 'this is the Sidebar area',
        'before_title'   => '<h5 class="widget-title">',
		'after_title'    => "</h5>\n",
		'before_widget'  => '<aside id="footer1 class="widget %2$s">',
		'after_widget'   => "</aside>\n",
		
		
));
}

	

	add_action( 'widgets_init','revplus_sidebar');


//  Footer Widgets registieren
function footer_widgets(){
    for($i= 1; $i <= 5 ;$i++){
        register_sidebar( array(
            'name'           => 'footer'.$i,
            'id'             => "footer-".$i,
            'description'    => 'Footer'.$i.'area',
            'before_widget'  => '',
            'after_widget'   => "",
            
            
          ));
    }}

	

	add_action( 'widgets_init','footer_widgets');
    

    // Registrieren des Widgets für den Zahlungsbereich im Footer
function payments_widgets(){
    
        register_sidebar( array(
            'name'           => 'footer payment section',
            'id'             => "footer-payment",
            'description'    => 'This ist the Payments Section in Footer',
            'before_widget'  => '',
            'after_widget'   => "",
            
            
          ));
    }

	

	add_action( 'widgets_init','payments_widgets');












    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );




    // Farben 

    function theme_colors_change( $wp_customize ) {
        $wp_customize->add_section( 'theme_colors', array(
            'title'    => __( ' Colors', 'revplus' ),
            'priority' => 7,
        ) );
    
        $wp_customize->add_setting( 'primary_color', array(
            'default'           => '#D8B75A',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ) );
    
        
        $wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'primary_color', array(
            'label'    => __( ' Primary Color', 'revplus' ),
            'section'  => 'theme_colors',
            'settings' => 'primary_color',
        ) ) );
        $wp_customize->add_setting( 'secondary_color', array(
            'default'           => '#363636',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ) );
    
        
        $wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'secondary_color', array(
            'label'    => __( ' Secondary Color', 'revplus' ),
            'section'  => 'theme_colors',
            'settings' => 'secondary_color',
        ) ) );
    
    
    }

        add_action('customize_register', 'theme_colors_change');
        function theme_colors_css(){
            ob_start();
            $primary = get_theme_mod( 'primary_color', '' );
            $secondary = get_theme_mod( 'secondary_color', '' );
            if(!empty($primary) ){?>
            :root{--gold:<?php echo $primary?>;}
            <?php
            } 
            if(!empty($secondary) ){?>
                :root{--dunkelGray:<?php echo $secondary?>;}
                    <?php
            }      
            $css = ob_get_clean();
            return $css;

        }

        function enqueue_new_css(){
            wp_enqueue_style( 'theme_style', get_template_directory_uri() );
            $custom_css = theme_colors_css();
            wp_add_inline_style( 'theme_style',$custom_css );
        }
        add_action( 'wp_enqueue_scripts','enqueue_new_css' );

        function custom_warenkorb_css(){
            if (is_page('warenkorb') && empty(get_post_meta(get_the_ID(), 'wt_coupon_wrapper', true))) {
                echo '<style> @media (max-width:768px){.wt_coupon_wrapper { padding: 0 !important; margin: 0 !important; }</style>}';
            }
           
        }
        function custom_warenkorb_css2(){
           
            if (is_page('warenkorb') && empty(get_post_meta(get_the_ID(), 'navbar.navbar-expand-lg.navbar-light', true))) {
                echo '<style> @media (max-width:768px){.navbar.navbar-expand-lg.navbar-light {  padding: 0 !important; }</style>} ';
            }
            
        }

        add_action( 'wp_head','custom_warenkorb_css' );
        add_action( 'wp_head','custom_warenkorb_css2' );

        
       // Add a notice to the admin dashboard if required plugins are not installed.
function my_required_plugins_notice() {

    // Get a list of required plugins.
    $required_plugins = array(
      'woocommerce',
      'advanced-woo-search',
      'woocommerce-payments',
      'yith-woocommerce-zoom-magnifier',
      'woocommerce-services',
      'wp-svg-images',
      'wordpress-importer',
    );
  
    // Get a list of installed plugins.
    $installed_plugins = get_plugins();
  
    // Check if all required plugins are installed.
    $all_plugins_installed = true;
    foreach ($required_plugins as $plugin) {
      if (!array_key_exists($plugin, $installed_plugins)) {
        $all_plugins_installed = false;
        break;
      }
    }
  
    // If not all required plugins are installed, display a notice with a link to install them.
    if (!$all_plugins_installed) {
      echo '<div class="notice notice-error">';
      echo '<p>Please install the following required plugins:</p>';
      echo '<ul>';
      foreach ($required_plugins as $plugin) {
        echo '<li><a href="' . wp_nonce_url(admin_url('update.php?action=install-plugin&plugin=' . $plugin), 'install-plugin_' . $plugin) . '">Install ' . $plugin . '</a></li>';
      }
      echo '</ul>';
      echo '</div>';
    }
  }
  
  // Add the notice hook.
  add_action('admin_notices', 'my_required_plugins_notice');
        
        
            

?>