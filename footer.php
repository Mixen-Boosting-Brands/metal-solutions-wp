        <footer class="py-60">
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-4 my-auto order-md-2 mb-4 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="0"
                    >
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                class="logo img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo@2x.png"
                                alt=""
                            />
                        </a>
                    </div>
                    <div
                        class="col-md-4 order-md-1 my-auto text-center text-md-start"
                    >
                        <nav
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <ul class="list-unstyled mb-4 mb-md-0">
                                <li class="mb-2">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#jumbotron">Conócenos</a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#servicios">Servicios</a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#productos">Productos</a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#galeria-de-fotos">Conócenos</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>#certificaciones"
                                        >Certificaciones</a
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 order-md-3 my-auto text-center text-md-end">
                        <ul
                            class="list-unstyled"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >

                            <?php
                            // Obtenemos el ID de la página de inicio (es bueno tenerlo por si acaso)
                            $homepage_id = get_option("page_on_front");

                            // Obtenemos los datos del primer teléfono USANDO el ID de la homepage
                            $tel_1 = get_field("telefono_1", $homepage_id);

                            // Verificamos que los datos existan
                            if ($tel_1 && !empty($tel_1["numero"])):
                                // Formateamos el número para mostrarlo con espacios
                                $telefono_formateado_1 =
                                    substr($tel_1["numero"], 0, 3) .
                                    " " .
                                    substr($tel_1["numero"], 3, 3) .
                                    " " .
                                    substr($tel_1["numero"], 6, 4); ?>
                                <li class="mb-3">
                                    <a
                                        class="btn btn-primary rounded-pill"
                                        href="tel:+52<?php echo esc_attr(
                                            $tel_1["numero"],
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
                            // Hacemos lo mismo para el segundo teléfono
                            $tel_2 = get_field("telefono_2", $homepage_id);

                            // Verificamos que los datos existan
                            if ($tel_2 && !empty($tel_2["numero"])):
                                // Formateamos el número para mostrarlo con espacios
                                $telefono_formateado_2 =
                                    substr($tel_2["numero"], 0, 3) .
                                    " " .
                                    substr($tel_2["numero"], 3, 3) .
                                    " " .
                                    substr($tel_2["numero"], 6, 4); ?>
                                <li>
                                    <a
                                        class="btn btn-primary rounded-pill"
                                        href="tel:+52<?php echo esc_attr(
                                            $tel_2["numero"],
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
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">
                            Hecho con
                            <i class="fa-solid fa-heart" alt="amor"></i> por
                            <a href="https://mixen.mx/" target="_blank"
                                >Mixen</a
                            >
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modales -->
        <div
            class="modal fade"
            id="contactModal"
            tabindex="-1"
            aria-labelledby="contactModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">
                            Formulario de Contacto
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div id="form-messages"></div>
                        <form
                            action="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/mailer.php"
                            method="POST"
                            id="ajax-contact"
                            class="needs-validation"
                            novalidate
                        >
                            <div class="mb-3">
                                <label for="nombre" class="form-label"
                                    >Nombre*</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nombre"
                                    name="nombre"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Por favor ingresa tu nombre
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label"
                                    >Teléfono*</label
                                >
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="telefono"
                                    name="telefono"
                                    pattern="[0-9]{10}"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Por favor ingresa un número de teléfono
                                    válido (10 dígitos)
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Correo Electrónico*</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Por favor ingresa un correo electrónico
                                    válido
                                </div>
                            </div>

                            <!-- div class="mb-3">
                                <label for="mensaje" class="form-label"
                                    >¿Cómo te podemos ayudar?*</label
                                >
                                <textarea
                                    class="form-control"
                                    id="mensaje"
                                    rows="3"
                                    required
                                ></textarea>
                                <div class="invalid-feedback">
                                    Por favor cuéntanos cómo podemos ayudarte
                                </div>
                            </!div -->

                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary rounded-pill"
                                    data-bs-dismiss="modal"
                                >
                                    Cerrar
                                </button>
                                <button
                                    type="submit"
                                    class="btn btn-primary rounded-pill"
                                >
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal fade"
            id="elementoModal"
            tabindex="-1"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <!-- This will get injected -->
                        <div class="elemento-modal"></div>
                    </div>
                    <div class="modal-footer border-0">
                        <button
                            type="button"
                            class="btn btn-primary rounded-pill"
                            data-bs-dismiss="modal"
                        >
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal fade"
            id="galeriaModal"
            tabindex="-1"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-dark border-0">
                    <div class="modal-body p-0 position-relative">
                        <div class="swiper swiper-modal-galeria">
                            <div class="swiper-wrapper text-center">
                                <!-- Populate these dynamically -->
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <button
                            type="button"
                            class="btn-close position-absolute top-0 end-0 m-3 btn-close-white"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

        <script src="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/js/app.bundle.js"></script>

        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-J0CXD3ETHD"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-J0CXD3ETHD");
        </script>
    </body>
</html>
