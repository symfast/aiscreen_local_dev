<?php

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicon.svg" />  
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.12/plyr.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/libs/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
 <link href="<?php echo get_template_directory_uri()?>/libs/jquery.formstyler.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri()?>/libs/jquery.formstyler.theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <!--link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
 
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="main_wrapper">
<?php get_template_part( 'template-parts/header' ); ?>