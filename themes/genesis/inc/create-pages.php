<?php


function create_about_page() {
  $page_title = '';
  $page_slug = 'about';
  $page_template = 'page-about.php'; // The template file in your theme

  // Query to check if the page already exists
  $query = new WP_Query(array(
    'post_type'  => 'page',
    'name' => $page_slug,
    'posts_per_page' => 1, // Only fetch one page
  ));

  $page_id = null;
  if (!$query->have_posts()) {
    $page_id = wp_insert_post(array(
      'post_title'  => $page_title,
      'post_name' => $page_slug,
      'post_status' => 'publish',
      'post_type'   => 'page',
    ));
  } else {
    $page_id = $query->posts[0]->ID;
  }
  if ($page_id && !is_wp_error($page_id)) {
    update_post_meta($page_id, '_wp_page_template', $page_template);
  }
  wp_reset_postdata();
}

add_action('after_switch_theme', function() {
  create_about_page();
});