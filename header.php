<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Yellowtail" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>
    
