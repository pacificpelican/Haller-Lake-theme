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

<?php wp_head(); ?>
</head>
