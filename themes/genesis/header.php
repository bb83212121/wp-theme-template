<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, viewport-fit=cover">
  <?php 
    if (is_home()) {
      ?>
      <title></title>
      <meta name="description" content="">
      <meta property="og:title" content="">
      <meta property="og:description" content="">
      <?php
    } else {
      $post_id = get_the_ID();
      if ($post_id) {
        $meta_description = get_post_meta($post_id, '_meta_description', true);
        ?>
        <title><?php echo get_the_title($post_id); ?></title>
        <meta name="description" content="<?php echo $meta_description; ?>">
        <meta property="og:title" content="<?php echo get_the_title($post_id); ?>">
        <meta property="og:description" content="<?php echo $meta_description; ?>">
        <?php
      }
    }
  ?>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<script type="text/javascript">
  $(() => {
  })
  $(window).on('load', function () {
  })
</script>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="site-header" class="site-header">
    <div class="header-container">
    </div>
    <div class="fixed-header-container">
    </div>
    <div class="fixed-sp-header-container">
    </div>
    <div class='topscroll-btn'>
      <i class="fa-solid fa-angle-up"></i>
    </div>
  </header>
