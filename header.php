<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolvemhs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php 
    wp_head();
    $logo = get_field('logo', 'option');
?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="header bg-white">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <?php if ($logo) : ?>
                        <img class="img-fluid logo-image" src="<?php echo esc_url($logo['url']); ?>"></a>
                    <?php endif; ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex flex-column ml-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item mr-3 text-center text-lg-left">
                                    <a class="nav-link font-weight-bold text-dark" href="#specialties">Specialties</a>
                                </li>
                                <li class="nav-item mr-3 text-center text-lg-left">
                                    <a class="nav-link font-weight-bold text-dark" href="#groups">Groups</a>
                                </li>
                                <li class="nav-item mr-3 text-center text-lg-left">
                                    <a class="nav-link font-weight-bold text-dark" href="#about">About</a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link font-weight-bold text-dark" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <p class="mb-0 pl-2 mt-2 text-center text-lg-left" style="font-size: 18px;">
                                <?php if (get_field('phone_number', 'option')) : ?>
                                <?php echo '<a class="text-dark" href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>'; ?>
                                &nbsp; | &nbsp;
                                <?php endif; ?>
                                <?php if (get_field('phone_number', 'option')) : ?>
                                <?php echo '<a class="text-dark" href="mailto:' . get_field('email_address', 'option') . '">' . get_field('email_address', 'option') . '</a>'; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div id="content" class="site-content">