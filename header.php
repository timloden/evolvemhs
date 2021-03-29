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
    <?php wp_head(); 
?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="header bg-white">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex flex-column ml-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">Specialties</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">Groups</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">Contact</a>
                                </li>
                            </ul>
                            <p class="mb-0 pl-2">(323) 379-3934 | nicolelevin@evolvemhs.com</p>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div id="content" class="site-content">