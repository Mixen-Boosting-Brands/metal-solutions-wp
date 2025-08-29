<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<section id="jumbotron">

    <?php
    // Obtenemos todo el grupo de campos 'carrusel'
    $carrusel = get_field("carrusel");

    // Solo mostramos la sección si el grupo de campos tiene contenido
    if ($carrusel): ?>

        <div class="container top-half">
            <div class="row">
                <div class="col-lg-4 order-lg-2">

                    <?php if (!empty($carrusel["texto"])): ?>
                        <p
                            class="mt-4"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            <?php echo wp_kses_post($carrusel["texto"]); ?>
                        </p>
                    <?php endif; ?>

                </div>
                <div class="col-lg-4 offset-lg-2 order-lg-1 my-auto position-relative">

                    <?php if (!empty($carrusel["titulo_superior"])): ?>
                        <h1
                            class="text-black"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            <?php echo esc_html(
                                $carrusel["titulo_superior"],
                            ); ?>
                        </h1>
                    <?php endif; ?>

                    <?php if (!empty($carrusel["titulo_inferior"])): ?>
                        <h1
                            class="text-white"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <?php echo esc_html(
                                $carrusel["titulo_inferior"],
                            ); ?>
                        </h1>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <div class="container-fluid bottom-half">
            <div class="row">
                <div class="col-12">
                    <div class="swiper swiper-jumbotron">
                        <div class="swiper-wrapper">

                            <?php if (!empty($carrusel["imagen_1"])): ?>
                                <div class="swiper-slide">
                                    <div class="overlay"></div>
                                    <div
                                        class="slide"
                                        style="background: url('<?php echo esc_url(
                                            $carrusel["imagen_1"],
                                        ); ?>') no-repeat;"
                                    ></div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($carrusel["imagen_2"])): ?>
                                <div class="swiper-slide">
                                    <div class="overlay"></div>
                                    <div
                                        class="slide"
                                        style="background: url('<?php echo esc_url(
                                            $carrusel["imagen_2"],
                                        ); ?>') no-repeat;"
                                    ></div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($carrusel["imagen_3"])): ?>
                                <div class="swiper-slide">
                                    <div class="overlay"></div>
                                    <div
                                        class="slide"
                                        style="background: url('<?php echo esc_url(
                                            $carrusel["imagen_3"],
                                        ); ?>') no-repeat;"
                                    ></div>
                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif;

// Fin del if ($carrusel)
?>

</section>

<section id="servicios-y-productos">

    <?php
    // Obtenemos el grupo de campos para los botones
    $botones = get_field("botones_de_servicios_y_productos");

    // Nos aseguramos de que el grupo de campos tenga datos antes de mostrar algo
    if ($botones): ?>
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-md-6">

                    <?php
        // Solo mostramos el enlace si la imagen existe
        ?>
                    <?php if (
                        !empty($botones["imagen_de_fondo_de_boton_servicios"])
                    ): ?>
                        <a
                            href="#servicios"
                            id="btn-servicios"
                            class="elemento-general"
                            style="background-image: url('<?php echo esc_url(
                                $botones["imagen_de_fondo_de_boton_servicios"],
                            ); ?>');"
                        >
                            <div
                                class="texto"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            >
                                <h1>Servicios</h1>
                                <p>
                                    Conoce más
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </p>
                            </div>
                        </a>
                    <?php endif; ?>

                </div>
                <div class="col-md-6">

                    <?php
        // Solo mostramos el enlace si la imagen existe
        ?>
                    <?php if (
                        !empty($botones["imagen_de_fondo_de_boton_productos"])
                    ): ?>
                        <a
                            href="#productos"
                            id="btn-productos"
                            class="elemento-general"
                            style="background-image: url('<?php echo esc_url(
                                $botones["imagen_de_fondo_de_boton_productos"],
                            ); ?>');"
                        >
                            <div
                                class="texto"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            >
                                <h1>Productos</h1>
                                <p>
                                    Conoce más
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </p>
                            </div>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    <?php endif;
    ?>

</section>

<section id="servicios" class="py-30">
    <div class="container">
        <div class="row mb-3">
            <div class="col text-center">
                <p
                    class="mb-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Conoce todos nuestros
                </p>
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Servicios
                </h1>
            </div>
        </div>
        <div
            class="row"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            <?php
            // 1. Argumentos para la consulta de WordPress
            $args = [
                "post_type" => "servicio", // Tu Custom Post Type
                "posts_per_page" => -1, // -1 para traer todos los servicios
                "orderby" => "menu_order title", // Ordenar por orden de menú o título
                "order" => "ASC", // Orden ascendente
            ];

            // 2. Creamos la nueva consulta
            $servicios_query = new WP_Query($args);

            // 3. El Bucle (The Loop)
            if ($servicios_query->have_posts()):
                while ($servicios_query->have_posts()):
                    $servicios_query->the_post(); ?>
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a
                        href="<?php the_permalink(); ?>"
                        id="btn-s-<?php the_ID(); ?>"
                        class="elemento"
                        data-bs-img="<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "large",
                        ); ?>"
                        style="background-image: url('<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "large",
                        ); ?>');"
                    >
                        <div class="overlay"></div>
                        <p class="fw-bold"><?php the_title(); ?></p>
                        <p class="mb-0"></p>
                    </a>
                </div>
            <?php
                endwhile;
                // 4. Restauramos los datos del post original
                wp_reset_postdata();
                // Opcional: Mensaje si no se encuentran servicios
            else:
                echo '<p class="text-center">No hay servicios disponibles en este momento.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<section id="productos" class="py-30">
    <div class="container">
        <div class="row mb-3">
            <div class="col text-center">
                <p
                    class="mb-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Conoce todos nuestros
                </p>
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Productos
                </h1>
            </div>
        </div>
        <div
            class="row"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            <?php
            // Argumentos para la consulta
            $args = [
                "post_type" => "producto",
                "posts_per_page" => -1,
                "orderby" => "menu_order title",
                "order" => "ASC",
            ];

            // Creamos la nueva consulta
            $productos_query = new WP_Query($args);

            // El Bucle (The Loop)
            if ($productos_query->have_posts()):
                while ($productos_query->have_posts()):
                    $productos_query->the_post(); ?>
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a
                        href="<?php the_permalink(); ?>"
                        id="btn-p-<?php the_ID(); ?>"
                        class="elemento"
                        data-bs-img="<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "large",
                        ); ?>"
                        style="background-image: url('<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "large",
                        ); ?>');"
                    >
                        <div class="overlay"></div>
                        <p class="fw-bold"><?php the_title(); ?></p>

                        <?php the_content(); ?>

                    </a>
                </div>
            <?php
                endwhile;
                // Restauramos los datos del post original
                wp_reset_postdata();
                // Opcional: Mensaje si no se encuentran productos
            else:
                echo '<p class="text-center">No hay productos disponibles en este momento.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<section id="galeria-de-fotos" class="pt-30 pb-60">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Galería de Fotos
                </h1>
            </div>
        </div>

        <?php
        // Obtenemos el grupo de campos de la galería
        $galeria = get_field("galeria_de_fotos");

        // Solo continuamos si el grupo 'galeria' tiene al menos una imagen
        if ($galeria): ?>
            <div
                class="row"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0"
            >
                <div class="col-12 text-center">
                    <div class="swiper swiper-galeria">
                        <div class="swiper-wrapper">

                            <?php // Recorremos cada imagen dentro del grupo 'galeria'
            // Recorremos cada imagen dentro del grupo 'galeria'
            // Recorremos cada imagen dentro del grupo 'galeria'
                            // Recorremos cada imagen dentro del grupo 'galeria'
                            foreach ($galeria as $nombre_campo => $imagen_url):
                                // Solo creamos el slide si la URL de la imagen no está vacía
                                if (!empty($imagen_url)): ?>
                                    <div class="swiper-slide">

                                        <?php
                                    // Hacemos que el enlace apunte a la misma imagen para verla en grande
                                    ?>
                                        <a href="<?php echo esc_url(
                                            $imagen_url,
                                        ); ?>" data-fancybox="gallery">
                                            <img
                                                class="img-fluid"
                                                src="<?php echo esc_url(
                                                    $imagen_url,
                                                ); ?>"
                                                alt="Imagen de la galería"
                                            />
                                        </a>
                                    </div>
                            <?php endif; // Fin del if !empty
                            endforeach;
            // Fin del bucle foreach
            ?>

                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        <?php endif;

// Fin del if ($galeria)
?>
    </div>
</section>

<!-- section id="certificaciones" class="py-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Certificaciones
                </h1>
            </div>
        </div>
        <div class="row">
            <div
                class="col-6 col-md-3 col-lg-2 offset-lg-1 mb-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/certificaciones/1.png"
                    alt="/"
                />
            </div>
            <div
                class="col-6 col-md-3 col-lg-2 mb-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/certificaciones/1.png"
                    alt="/"
                />
            </div>
            <div
                class="col-6 col-md-3 col-lg-2 mb-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/certificaciones/1.png"
                    alt="/"
                />
            </div>
            <div
                class="col-6 col-md-3 col-lg-2 mb-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/certificaciones/1.png"
                    alt="/"
                />
            </div>
            <div
                class="col-6 col-md-3 col-lg-2 mb-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="500"
            >
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/certificaciones/1.png"
                    alt="/"
                />
            </div>
        </div>
    </div>
</!section -->

<?php get_footer(); ?>
