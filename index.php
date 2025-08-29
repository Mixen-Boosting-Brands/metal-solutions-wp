<?php get_header(); ?>

<section id="jumbotron">
    <div class="container top-half">
        <div class="row">
            <div class="col-lg-4 order-lg-2">
                <p
                    class="mt-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Manufacturamos metales y polímeros para el sector
                    industrial, comercial y público con tecnología de
                    clase mundial.
                </p>
            </div>
            <div
                class="col-lg-4 offset-lg-2 order-lg-1 my-auto position-relative"
            >
                <h1
                    class="text-black"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Soluciones de manufactura
                </h1>
                <h1
                    class="text-white"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    metal-mecánica en Chihuahua
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid bottom-half">
        <div class="row">
            <div class="col-12">
                <!-- Slider main container -->
                <div class="swiper swiper-jumbotron">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="overlay"></div>
                            <div
                                class="slide slide 1"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/jumbotron/1.png&quot;)
                                        no-repeat;
                                "
                            ></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="overlay"></div>
                            <div
                                class="slide"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/jumbotron/2.png&quot;)
                                        no-repeat;
                                "
                            ></div>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="servicios-y-productos">
    <div class="container-fluid">
        <div class="row g-2">
            <div class="col-md-6">
                <a
                    href="#servicios"
                    id="btn-servicios"
                    class="elemento-general"
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
            </div>
            <div class="col-md-6">
                <a
                    href="#productos"
                    id="btn-productos"
                    class="elemento-general"
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
            </div>
        </div>
    </div>
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
                        style="background: url('<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "large",
                        ); ?>') no-repeat;"
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
                        style="background: url('<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "large",
                        ); ?>') no-repeat;"
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
        <div
            class="row"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="0"
        >
            <div class="col-12 text-center">
                <!-- Slider main container -->
                <div class="swiper swiper-galeria">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    class="img-fluid"
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/galeria-de-fotos/1.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    class="img-fluid"
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/galeria-de-fotos/2.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    class="img-fluid"
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/galeria-de-fotos/3.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    class="img-fluid"
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/galeria-de-fotos/4.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    class="img-fluid"
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/galeria-de-fotos/5.png"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
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
