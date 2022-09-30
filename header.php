<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#004e9d">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="row">
                <div class="navbar">
                    <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                    <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                    <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                </div>
            </div>
        </div>
    </header>
    <main id="main" class="container">
        <div class="row">
