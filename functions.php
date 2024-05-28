<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');
  wp_enqueue_style( 'swiper-style','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array('main') );
  wp_enqueue_style( 'lightbox2-style', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array('main') );
  
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true );
  wp_enqueue_script( 'jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'lightbox2-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array('jquery'), false, true );

  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/activity.php') ) {
    wp_enqueue_style( 'activity-style', get_template_directory_uri() . '/assets/styles/template-styles/activity.css', array('main') );
    wp_enqueue_script( 'activity-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/activity.js', array(), false, true );
  }

  if ( is_page_template('templates/individual-help.php') ) {
    wp_enqueue_style( 'individual-help-style', get_template_directory_uri() . '/assets/styles/template-styles/individual-help.css', array('main') );
    wp_enqueue_script( 'individual-help-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/individual-help.js', array(), false, true );
  }
  
  if ( is_page_template('templates/volunteers.php') ) {
    wp_enqueue_style( 'volunteers-style', get_template_directory_uri() . '/assets/styles/template-styles/volunteers.css', array('main') );
    wp_enqueue_script( 'volunteers-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/volunteers.js', array(), false, true );
  }
  
  if ( is_page_template('templates/benefactors.php') ) {
    wp_enqueue_style( 'benefactors-style', get_template_directory_uri() . '/assets/styles/template-styles/benefactors.css', array('main') );
    wp_enqueue_script( 'benefactors-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/benefactors.js', array(), false, true );
  }

  if ( is_page_template('templates/reports.php') ) {
    wp_enqueue_style( 'reports-style', get_template_directory_uri() . '/assets/styles/template-styles/reports.css', array('main') );
    wp_enqueue_script( 'reports-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/reports.js', array(), false, true );
  }

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  } 
  if ( is_page_template('templates/artist-information.php') ) {
    wp_enqueue_style( 'artist-information-style', get_template_directory_uri() . '/assets/styles/template-styles/artist-information.css', array('main') );
    wp_enqueue_script( 'artist-information-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/artist-information.js', array(), false, true );
  }
  if ( is_page_template('templates/project.php') ) {
    wp_enqueue_style( 'project-style', get_template_directory_uri() . '/assets/styles/template-styles/project.css', array('main') );
    wp_enqueue_script( 'project-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/project.js', array(), false, true );
  }
  if ( is_page_template('templates/acknowledgements.php') ) {
    wp_enqueue_style( 'acknowledgements-style', get_template_directory_uri() . '/assets/styles/template-styles/acknowledgements.css', array('main') );
    wp_enqueue_script( 'acknowledgements-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/acknowledgements.js', array(), false, true );
    wp_enqueue_script( 'fslightbox-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/fslightbox.js', array(), false, true );
    wp_localize_script('acknowledgements-scripts', 'myAjax', array(
      'ajaxUrl' => admin_url('admin-ajax.php'),
      'nonce'   => wp_create_nonce('acknowledgements_nonce'),
    ));
  }
  if ( is_page_template('templates/auctions.php') ) {
    wp_enqueue_style( 'auctions-style', get_template_directory_uri() . '/assets/styles/template-styles/auctions.css', array('main') );
    wp_enqueue_script( 'auctions-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/auctions.js', array(), false, true );
  }  
  if ( is_page_template('templates/wishlist.php') ) {
    wp_enqueue_style( 'wishlist-style', get_template_directory_uri() . '/assets/styles/template-styles/wishlist.css', array('main') );
  } 
  if (is_product()) {
    wp_enqueue_style('theme-product-page-style', get_template_directory_uri() . '/assets/styles/template-styles/single-product.css');
    wp_enqueue_script('theme-product-page-script', get_template_directory_uri() . '/assets/scripts/template-scripts/single-product.js');        
  }
  if ( is_post_type_archive('product') ) {
    wp_enqueue_style( 'archive-product-style', get_template_directory_uri() . '/assets/styles/template-styles/archive-product.css', array('main') );    
  }

  if (is_singular() && locate_template('template-parts/about-fund-section.php')) {
    wp_enqueue_style( 'about-fund-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/about-fund-section.css', array('main') );
    wp_enqueue_script( 'about-fund-section-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/about-fund-section.js', array(), false, true );
  }
  if (is_singular() && locate_template('template-parts/projects-part.php')) {
    wp_enqueue_style( 'projects-part-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/projects-part.css', array('main') );
    wp_enqueue_script( 'projects-part-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/projects-part.js', array(), false, true );
  }
  if (is_singular() && locate_template('template-parts/contact-persons-section.php')) {
    wp_enqueue_style( 'contact-persons-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/contact-persons-section.css', array('main') );
    wp_enqueue_script( 'contact-persons-section-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/contact-persons-section.js', array(), false, true );
  }
  if (is_singular() && locate_template('template-parts/projects-card.php')) {
    wp_enqueue_style( 'projects-card-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/projects-card.css', array('main') );
  }
  if (is_singular() && locate_template('template-parts/pagination.php')) {
    wp_enqueue_style( 'pagination-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/pagination.css', array('main') );
  }
  if (is_singular() && locate_template('template-parts/help-card.php')) {
    wp_enqueue_style( 'help-card-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/help-card.css', array('main') );
  }
  if (is_singular() && locate_template('template-parts/partners-slider.php')) {
    wp_enqueue_style( 'partners-slider-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/partners-slider.css', array('main') );
    wp_enqueue_script( 'partners-slider-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/partners-slider.js', array(), false, true );
  }
  if (is_singular() && locate_template('template-parts/partners-card.php')) {
    wp_enqueue_style( 'partners-card-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/partners-card.css', array('main') );
  }
  if (is_singular() && locate_template('template-parts/projects-slider.php')) {
    wp_enqueue_style( 'projects-slider-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/projects-slider.css', array('main') );
    wp_enqueue_script( 'projects-slider-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/projects-slider.js', array(), false, true );
  }
  if (is_singular() && locate_template('template-parts/one-acknowledgement.php')) {
    wp_enqueue_style('one-acknowledgement', get_template_directory_uri() . '/assets/styles/template-parts-styles/one-acknowledgement.css', array('main'));
  }
  if (is_singular() && locate_template('template-parts/loader.php')) {
    wp_enqueue_style('loader-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/loader.css', array('main'));
  }
  if (is_singular() && locate_template('template-parts/depositing-funds.php')) {
    wp_enqueue_style( 'depositing-funds-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/depositing-funds.css', array('main') );    
  }
  if (is_singular() && locate_template('template-parts/auction-card.php')) {
    wp_enqueue_style( 'auction-card-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/auction-card.css', array('main') );   
  }
  if (is_singular() && locate_template('template-parts/auction-slider.php')) {
    wp_enqueue_style( 'auction-slider-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/auction-slider.css', array('main') );  
    wp_enqueue_script( 'auction-slider-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/auction-slider.js', array(), false, true );  
  }
  if (get_post_type() === 'news' ) {
    wp_enqueue_style('single-news-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-news.css', array('main') );
    wp_enqueue_script('single-news-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-news.js', array(), false, true);
    }
}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap' );
}
 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

if ( class_exists( 'WooCommerce' ) ) {	
	require get_template_directory() . '/woocommerce/wc-functions.php';	
  require get_template_directory() . '/woocommerce/wc-functions-remove.php';
}

/** AJAX acknowledgements */

// Функція для обробки AJAX запитів на виведення постів і пагінації
add_action('wp_ajax_load_acknowledgements', 'load_acknowledgements');
add_action('wp_ajax_nopriv_load_acknowledgements', 'load_acknowledgements');

function load_acknowledgements() {
  // Перевірка nonce
  if (!isset($_POST["nonce"]) || !wp_verify_nonce($_POST["nonce"], "acknowledgements_nonce")) {
    exit;
  }
  
  // Отримання параметрів з AJAX-запиту
  $paged = $_POST['page'];
  $width = $_POST['width'];
  
  // Визначення кількості постів на сторінку залежно від ширини
  $number = get_acknowledgements_per_page($width);

  // Отримання загальної кількості постів
  $total_posts = wp_count_posts('acknowledgements')->publish;
  
  // Побудова запиту для отримання постів
  $args = array(
    'post_type' => 'acknowledgements',
    'posts_per_page' => $number,
    'order' => 'ASC',
    'paged' => $paged,
    'post_status' => 'publish'
  );

  $custom_posts = new WP_Query($args);
  $total_pages  = $custom_posts->max_num_pages; 
  $current_page = max( 1, $paged );

  // Виведення постів
  ob_start();
    $posts_markup = '';
      if ($custom_posts->have_posts()) :
        while ($custom_posts->have_posts()) :
          $custom_posts->the_post();
        ?>
<?php get_template_part('template-parts/one-acknowledgement'); ?>
<?php
        endwhile;
      $posts_markup = ob_get_clean();
      wp_reset_postdata();
      // Виведення пагінації
      if ( $total_pages > 1 ) {
        $pagination_markup = paginate_links( array(
          'base'    => '?paged=%#%',
          'format'    => '%#%',
          'current' => $paged,
          'total'   => $total_pages,
          'prev_next' => false,
          'show_all'  => $total_pages <= 5,
          'end_size'  => 1,
          'mid_size'  => ($paged === 1) || ($paged == $total_pages) ? 3 : 1,
        ));  
      }  
      wp_send_json(array(
        'posts' => $posts_markup, 
        'pagination' => $pagination_markup,
      ));
    else :
      echo 'No acknowledgements';
    endif;
  wp_die();
}

// Визначення кількості постів на сторінку залежно від ширини
function get_acknowledgements_per_page($width) {
  if ($width > 1440.98) {
    return 8;
  } elseif ($width > 575.98) {
    return 6;
  } else {
    return 3;
  }
}
function enqueue_custom_scripts() {
    wp_enqueue_script('format-date', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/news-card.js' , array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');