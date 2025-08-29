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

                        <?php
                        // Obtenemos los datos del primer teléfono
                        $tel_1 = get_field("telefono_1");

                        // Verificamos que el grupo y el subcampo 'telefono' no estén vacíos
                        if ($tel_1 && !empty($tel_1["telefono"])):
                            // Formateamos el número para mostrarlo con espacios (e.g., 614 173 5378)
                            $telefono_formateado_1 =
                                substr($tel_1["telefono"], 0, 3) .
                                " " .
                                substr($tel_1["telefono"], 3, 3) .
                                " " .
                                substr($tel_1["telefono"], 6, 4); ?>
                            <li class="mb-3">
                                <a
                                    class="btn btn-primary rounded-pill"
                                    href="tel:+52<?php echo esc_attr(
                                        $tel_1["telefono"],
                                    ); ?>"
                                >
                                    <i class="fa-solid fa-phone"></i> <?php echo esc_html(
                                        $tel_1["nombre"],
                                    ); ?>
                                    <?php echo esc_html(
                                        $telefono_formateado_1,
                                    ); ?>
                                </a>
                            </li>
                        <?php
                        endif;
                        ?>


                        <?php
                        // Obtenemos los datos del segundo teléfono
                        $tel_2 = get_field("telefono_2");

                        // Verificamos que el grupo y el subcampo 'telefono' no estén vacíos
                        if ($tel_2 && !empty($tel_2["telefono"])):
                            // Formateamos el número para mostrarlo con espacios
                            $telefono_formateado_2 =
                                substr($tel_2["telefono"], 0, 3) .
                                " " .
                                substr($tel_2["telefono"], 3, 3) .
                                " " .
                                substr($tel_2["telefono"], 6, 4); ?>
                            <li>
                                <a
                                    class="btn btn-primary rounded-pill"
                                    href="tel:+52<?php echo esc_attr(
                                        $tel_2["telefono"],
                                    ); ?>"
                                >
                                    <i class="fa-solid fa-phone"></i> <?php echo esc_html(
                                        $tel_2["nombre"],
                                    ); ?>
                                    <?php echo esc_html(
                                        $telefono_formateado_2,
                                    ); ?>
                                </a>
                            </li>
                        <?php
                        endif;
                        ?>

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
