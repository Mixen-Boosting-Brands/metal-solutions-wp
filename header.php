<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="<?php bloginfo("description"); ?>"
        />
        <title>
            <?php
            wp_title("");
            if (wp_title("", false)) {
                echo " : ";
            }
            bloginfo("name");
            ?>
        </title>

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name",
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />
        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Metal Solutions" />
        <link rel="manifest" href="/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url(),
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo@2x.png"
                        alt=""
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="<?php echo esc_url(
                                home_url(),
                            ); ?>#jumbotron"
                                >Inicio</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="<?php echo esc_url(
                                home_url(),
                            ); ?>#servicios"
                                >Servicios</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="<?php echo esc_url(
                                home_url(),
                            ); ?>#productos"
                                >Productos</a
                            >
                        </li>
                        <li>
                            <a
                                class="anchor"
                                id="btn-nav-4"
                                href="<?php echo esc_url(
                                    home_url(),
                                ); ?>#galeria-de-fotos"
                                >Galería</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#contactModal"
                                >Contáctanos</a
                            >
                        </li>
                    </ul>
                </nav>
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a
                                class="btn btn-primary rounded-pill"
                                href="tel:+526141735378"
                                ><i class="fa-solid fa-phone"></i> Karla Solís
                                614 173 5378</a
                            >
                        </li>
                        <li>
                            <a
                                class="btn btn-primary rounded-pill"
                                href="tel:+526141776547"
                                ><i class="fa-solid fa-phone"></i> Marco Beltrán
                                614 177 6547</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-4 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo@2x.png"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block my-auto text-center">
                        <nav>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#jumbotron">Inicio</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#servicios">Servicios</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#productos">Productos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#galeria-de-fotos">Galería</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-lg-4 my-auto text-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item d-none d-lg-block">
                                <a
                                    class="btn btn-primary rounded-pill"
                                    href="#"
                                    data-bs-toggle="modal"
                                    data-bs-target="#contactModal"
                                >
                                    Contáctanos
                                </a>
                            </li>
                            <li class="list-inline-item d-lg-none">
                                <a id="mburger" href="javascript:void(0)">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
        </header>
