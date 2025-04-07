<?php

function load_fontawesome() {
  wp_enqueue_style(
    'font-awesome', 
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', 
    array(), 
    '6.0.0'
  );
}
function theme_gsap_script(){
  // The core GSAP library
  wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js', array(), false, true );
  // ScrollTrigger - with gsap.js passed as a dependency
  wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
}
function load_fonts() {
  wp_enqueue_style('noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
  wp_enqueue_style(
    'poppins-font',
    'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap',
    array(),
    null
  );
  wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/assets/css/font.css');
}

add_action('wp_enqueue_scripts', function() {
  load_fonts();
  load_fontawesome();
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/index.css');
  if (is_front_page()) {
    wp_add_inline_style( 'style', '
    ');
  }
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/index.js', array(), null, false);
  wp_localize_script('script', 'params', array(
    'ajax_url' => admin_url('admin-ajax.php')
  ));
  theme_gsap_script();
});
