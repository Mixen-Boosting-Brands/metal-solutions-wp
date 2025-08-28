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
                                            $carrusel["imagen_1"]["url"],
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
                                            $carrusel["imagen_2"]["url"],
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
                                            $carrusel["imagen_3"]["url"],
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
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-1"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-1.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Corte lasser para 1/2 in.</p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-2"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-2.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">
                        Corte de lamina desde calibre 24 hasta placa
                        3/16 in.
                    </p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-3"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-3.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">
                        Doblez de hoja de metal hasta 3/16 in.
                    </p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-4"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-4.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Soldadura TIG, MIG, aluminio.</p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-5"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-5.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">
                        Termoformado de acrílicos y policarbonatos.
                    </p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-6"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-6.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Electrosoldado para rejas.</p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-7"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-7.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Maquinado de precisión.</p>
                    <p class="mb-0"></p>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-s-8"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-s-8.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">
                        Diseño industrial de máquinas y herramientas.
                    </p>
                    <p class="mb-0"></p>
                </a>
            </div>
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
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-1"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-1.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Poste línea de vida universal</p>
                    <ul class="mb-0">
                        <li>
                            Poste para anclaje de líneas de vida con
                            sujeción a crestas de sistemas de charolas.
                        </li>
                        <li>
                            Tubo 3” ced. 40, Asa “U” de ½”, altura total
                            de 22”. Placa de ½” A36.
                        </li>
                        <li>
                            Acabado zinc electrólitico o pintura
                            electrostática amarillo seguridad.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-2"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-2.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Kit coping</p>
                    <ul class="mb-0">
                        <li>
                            Coping de 3 mts de largo. Se fabrica al
                            ancho del muro.
                        </li>
                        <li>
                            Incluye splice plate o Cap para unión entre
                            copings. Clip A y B para fácil instalación.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-3"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-3.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Accesorios para techos</p>
                    <ul class="mb-0">
                        <li>
                            Cajillo. Para conexión de canalón con la
                            bajante pluvial. Lamina pintro C24
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-4"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-4.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Placas de apoyo</p>
                    <ul class="mb-0">
                        <li>
                            Para usarse en los traslapes transversales
                            para mejor sujeción.
                        </li>
                        <li>Lamina galvanizada C16</li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-5"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-5.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Solera de traslape</p>
                    <ul class="mb-0">
                        <li>
                            Para usarse en los traslapes transversales
                            para mejor sujeción.
                        </li>
                        <li>Acero inoxidable C16</li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-6"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-6.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Accesorios para techos</p>
                    <ul class="mb-0">
                        <li>
                            Cumbreras. Lamina galvanizada C22, longitud
                            10ft, desarrollo según plano.
                        </li>
                        <li>
                            Kit flashing, counterflashing y moldura
                            rigidizante. Lamina C22, longitud 10 ft.
                            Desarrollo según plano.
                        </li>
                        <li>
                            Bajantes pluviales. Lamina pintro C22,
                            longitud 10 ft.
                        </li>
                        <li>
                            Cajillo. Para conexión de canalón con la
                            bajante pluvial. Lámina pintro C24.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-7"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-7.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Roof Curb</p>
                    <ul class="mb-0">
                        <li>
                            Lámina galvanizada según calibre requerido
                            (C22, C20, C18).
                        </li>
                        <li>
                            Fácil armado con pestañas para unión de
                            lados.
                        </li>
                        <li>
                            Acabado electrostático blanco std. al
                            interior.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-8"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-8.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Cajones guarda herramientas</p>
                    <ul class="mb-0">
                        <li>Ligeros con asas y porta candado.</li>
                        <li>
                            1.50 m de largo, 30 cm alto y 60cm
                            profundidad.
                        </li>
                        <li>
                            Lámina galvanizada C18 acabado
                            electrostático color negro.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-9"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-9.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Engargoladoras 180°</p>
                    <ul class="mb-0">
                        <li>
                            Como su nombre lo indica, son ideales para
                            unir dos charolas según al giro deseado.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-10"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-10.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Engargoladoras 90°</p>
                    <ul class="mb-0">
                        <li>
                            Como su nombre lo indica, son ideales para
                            unir dos charolas según al giro deseado.
                        </li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-11"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-11.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">Roof clamp</p>
                    <ul class="mb-0">
                        <li>Giro 360° para líneas de vida.</li>
                        <li>Sujeción a crestas.</li>
                        <li>
                            Se puede sujetar a 1 o 2 charolas según tipo
                            de sistema.
                        </li>
                        <li>
                            Tubo 3”, canal C 3” A36, placa de acero,
                            tornillería galvanizada.
                        </li>
                        <li>
                            Acabado amarillo seguridad en pintura
                            electrostática.
                        </li>
                        <li>Soporta una carga de 3600 lbs.</li>
                    </ul>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a
                    href="#"
                    id="btn-p-12"
                    class="elemento"
                    data-bs-img="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/servicios-y-productos/bg-p-12.png"
                >
                    <div class="overlay"></div>
                    <p class="fw-bold">
                        Dispositivo personal de argolla
                    </p>
                    <ul class="mb-0">
                        <li>
                            Punto fijo de seguridad para anclaje en
                            cresta.
                        </li>
                        <li>Tornillería galvanizada para sujeción.</li>
                        <li>Acero 1018 acabado zinc electrolítico.</li>
                    </ul>
                </a>
            </div>
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
