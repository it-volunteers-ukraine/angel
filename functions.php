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

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  }
  if ( is_page_template('templates/projects.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }  
  if ( is_page_template('templates/projects-military.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }
  if ( is_page_template('templates/projects-migrant.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }
  if ( is_page_template('templates/projects-children.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }
  if ( is_page_template('templates/projects-art.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }
  if ( is_page_template('templates/projects-animal.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }
  if ( is_page_template('templates/project.php') ) {
    wp_enqueue_style( 'project-style', get_template_directory_uri() . '/assets/styles/template-styles/project.css', array('main') );
    wp_enqueue_script( 'project-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/project.js', array(), false, true );
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

function get_nav_items_of_parent($menu_location, $parent_id) {
  $menu_obj = get_term_by('name', $menu_location, 'nav_menu');
  $menu_id = $menu_obj->term_id;
  $menu_items = wp_get_nav_menu_items($menu_id);
  return array_filter($menu_items, function($item) use ($parent_id) {
    return (int)$item->menu_item_parent === (int)$parent_id;
  });
}

function render_menu_section($menu_items, $classes = "menu-item", $parent_title) {
  $current_url = esc_url(get_permalink());
  $html = "<div class='sub-menu-wrapper'><span class='parent-title'>" . $parent_title . "</span>";
  $html .= "<ul class='".$classes."'>";
  foreach ($menu_items as $item) {
    $item_cls = 'sub-menu-item';
    if ($current_url === $item->url) {
      $item_cls .= '__current-item';
    }
    $html .= "<li class=" . $item_cls . "><a href='" . esc_url($item->url) . "'>" . esc_html($item->title) . "</a></li>";
  }
  $html .= "</ul></div>";
  return $html;
}