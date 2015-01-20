<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package haller_lake_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php wp_title( '|', true, 'right' ); ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" media="all" />

    <!-- Custom styles for this template -->

    
       <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri(); ?>/css/navbar-fixed-top.css" type="text/css" media="all" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bs/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>
