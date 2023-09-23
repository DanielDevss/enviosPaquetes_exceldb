<!DOCTYPE html>
<html lang="es">
<?php include_once('include/head.php') ?>

<body>

    <!-- LINK - Navbar -->

    <?php include_once('include/navbar.php') ?>

    <!-- LINK banner -->

    <header class="banner position-relative">
        <img class="w-100 d-block banner-fondo" src="assets/img/nosotros/fondo_banner.jpg" alt="Imagen del banner">

        <div class="position-absolute w-100 h-100 top-0 start-0">
            <div class="container h-100 p-5">
                <div class="row h-100">
                    <div class="col-lg-4"></div>

                    <article class="col-lg-7 banner__article">

                        <section class="nosotrosheader my-auto mb-auto pt-4 text-white h-75 serviciosbanner_article">
                            <h2 class="text-uppercase fs-1 f-fashion display-5">Todo para tus envíos</h2>
                            <p class="text-bg-warning h1 text-uppercase fw-bold">En un solo lugar</p>
                        </section>

                    </article>

                    <div class="col-lg-1 text-white">
                        <div class="banner__redes h-100">
                            <a class="text-white" target="_blank" href="www.facebook.com">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-white" target="_blank" href="www.instagram.com">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=8112094845">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>

    <!-- LINK CARD-COTIZAR -->

    <a href="cotizar.php" class="d-block d-lg-none buttonCotizarResponse text-uppercase btn">¡Cotizar ya!</a>

    <section class="position-lg-fixed z-3 top-0 start-0 end-0 w-100" style="pointer-events: none;">

        <div class="container my-5 min-100vh">
            <div class="row h-100">

                <div class="h-100 col-lg-4 d-lg-flex align-items-center">
                    <?php include_once('include/cardcotizar.php') ?>
                </div>

            </div>
        </div>

    </section>


    <!-- LINK ENLAZA -->

    <article class="container my-5">

        <section class="row justify-content-end">


            <section class="col-lg-8 mt-5">

                <div class="card bg-dark-subtle border-0 p-3 rounded-3">
                    <div class="card-body border p-4 border-dark-subtle rounded-3">
                        <h2 class="d-flex text-uppercase fw-bold align-items-center justify-content-center">
                            <img width="45" class="me-3" src="assets/img/servicios/box.png" alt="Rastrea tu paquete, esyshipment">
                            Rastrea tu paquete
                        </h2>
                        <div class="w-75 m-auto border-top border-dark-subtle">
                            <p class="py-3 text-center">Selecciona tu paquetería</p>
                        </div>
                        <div class="text-center">
                            <img height="50" class="m-2" src="assets/img/marcas/fedex.png" alt="">
                            <img height="50" class="m-2" src="assets/img/marcas/dhl.png" alt="">
                            <img height="50" class="m-2" src="assets/img/marcas/redpack.png" alt="">
                            <img height="50" class="m-2" src="assets/img/marcas/estafeta.png" alt="">
                            <img height="50" class="m-2" src="assets/img/servicios/sendex.png" alt="">
                        </div>

                        <a href="#" class="btn btn-primary mx-auto my-4 d-block w-fit-content px-4 fw-bold">Rastrear</a>
                    </div>
                </div>

            </section>

        </section>

    </article>


    <article class="secciondescuento">
        <section class="container text-white py-5">

            <section class="row justify-content-end">
                <article class="col-lg-8 mt-5 position-relative">
                    <h2 class="f-fashion text-uppercase display-4 position-absolute">Hasta</h2>
                    <img class="w-100 d-block" src="assets/img/servicios/40.png" alt="Descuentos en guías prepagadas">

                    <p class="text-bg-success fw-bold h4 w-fit-content py-1 px-4 text-center rounded-4 m-auto">De descuento en guías prepagadas</p>

                    <p class="p-4 border border-white rounded-3 mt-5">Aplica resticciones. El precio varía en función del volumen y tipo de servicio. No es acumulable con otras promociones o descuentos. Válido en puntos de venta propios de Esyshipment. Promoción sujeta a cambio sin previo aviso. Vigencia del 1 al 30 de septiembre 2023.</p>
                </article>
            </section>

        </section>
    </article>


    <section class="container my-5">

        <section class="row justify-content-end">

            <section class="col-lg-8 mt-5">

                <main class="servicios">
                    <h1 class="text-uppercase servicios__titulo f-fashion"><span class="blue fw-bold">Nuestros</span> Servicios</h1>
                    <section class="servicios__cards">

                        <!-- Tarjeta 1 -->
                        <div class="card border-0 bg-secondary-subtle servicioscard">
                            <div class="card-body text-center">

                                <img class="servicioscard__image w-75 d-block m-auto pt-3" src="assets/img/servicios/paqueteria.png" alt="Paquetería nacional e internacional">

                                <h2 class="text-uppercase h5 fw-bold servicoscard__titulo">Paquetería <span class="blue">Nacional e internacional</span></h2>

                                <div class="border border-dark-subtle mx-auto my-4 w-50"></div>

                                <p class="servicioscard__texto">
                                    Envíos con servicio de entrega y recolección a domicilio con cobertura a nivel nacional e internacional.
                                </p>
                            </div>
                        </div>

                        <!-- Tarjeta 2 -->
                        <div class="card border-0 bg-secondary-subtle servicioscard">
                            <div class="card-body text-center">

                                <img class="servicioscard__image w-75 d-block m-auto pt-3" src="assets/img/servicios/material.png" alt="Material de empaque">

                                <h2 class="text-uppercase h5 fw-bold servicoscard__titulo">Material <span class="blue">de empaque</span></h2>

                                <div class="border border-dark-subtle mx-auto my-4 w-50"></div>

                                <p class="servicioscard__texto">
                                    Te ofrecemos las mejores soluciones de distribución de tu mercancía con el uso de cajas y la más alta tecnología en rastreo y logísticas.
                                </p>
                            </div>
                        </div>

                        <!-- Tarjeta 3 -->
                        <div class="card border-0 bg-secondary-subtle servicioscard">
                            <div class="card-body text-center">

                                <img class="servicioscard__image servicioscard__image--end w-100 d-block ms-auto pt-3" src="assets/img/servicios/sobres.png" alt="Sobres de empaque">

                                <h2 class="text-uppercase h5 fw-bold servicoscard__titulo">Sobres <span class="blue">de empaque</span></h2>

                                <div class="border border-dark-subtle mx-auto my-4 w-50"></div>

                                <p class="servicioscard__texto">
                                    Envíos con servicio de entrega y recolección a domicilio cobertura a nivel nacional e internacional
                                </p>
                            </div>
                        </div>

                        <!-- Tarjeta 4 -->
                        <div class="card border-0 bg-secondary-subtle servicioscard">
                            <div class="card-body text-center">

                                <img class="servicioscard__image w-75 d-block m-auto pt-3" src="assets/img/servicios/servicios.png" alt="Servicios de empaque profesional">

                                <h2 class="text-uppercase h5 fw-bold servicoscard__titulo">Servicios de <span class="blue">Empaque profesional</span></h2>

                                <div class="border border-dark-subtle mx-auto my-4 w-50"></div>

                                <p class="servicioscard__texto">
                                    Nos encargamos de empacar los paquetes de manera cuidadosa y eficiente. Utilizando materiales de la más alta calidad y técnicas de embalaje especializadas.
                                </p>
                            </div>
                        </div>

                    </section>

                    <section class="preguntas">

                    <h2 class="fw-bold text-uppercase h1 preguntas__titulo">Preguntas <span class="blue">frecuentes</span></h2>

                        <div class="accordion accordion-flush bg-secondary-subtle rounded-3 px-4 py-5" id="accordionExample">
                            <div class="accordion-item bg-secondary-subtle">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-secondary-subtle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="fw-bold">¿Cuáles son los artículos prohibidos?</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Artesanías o artículos de valor extraordinario, Animales, Material pornográfico, Plantas, Juegos de azar, Armas de fuego y de cualquier tipo de armas blancas, Restos humanos, Artículos perecederos y de fácil descomposición, Bebidas alcohólicas, Mercancía falsificada, Medicamentos controlados, Metales, Refacciones con residuos, Líquidos, Vidrio en cualquier presentación, Pieles y cueros de animales, Piedras preciosas, Dinero o monedas.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-secondary-subtle">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-secondary-subtle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="fw-bold">¿Qué debo hacer cuando mi envío no cambia de status?</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Es recomendable esperar a la fecha de entrega máxima en tu envío. En este caso no es necesario que te pongas en contacto con nosotros.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-secondary-subtle">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-secondary-subtle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="fw-bold">¿Qué debo hacer cuando la entrega máxima ya pasó?</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Es necesario levantar solamente un reporte por cualquiera de los siguientes medios de contacto ya sea línea telefónica o en la sección de contacto de Esyshipment.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-secondary-subtle">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-secondary-subtle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="fw-bold">¿Cómo puedo cotizar un envío?</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        La cotización de tu envío depende de muchas variables, como el peso, las dimensiones, el tiempo de entrega y el destino.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-secondary-subtle">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-secondary-subtle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="fw-bold">¿Qué debo saber antes de enviar un paquete?</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <ol>
                                            <li>Identifica que tu producto no se encuentre en nuestra lista de artículos prohibidos.</li>
                                            <li>Verifica cobertura.</li>
                                            <li>Revisa que el embalaje sea el correcto.</li>
                                            <li>¡Cotiza y realiza tu envío!</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </main>


            </section>

        </section>

    </section>


    <?php include_once("include/footer.php") ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="assets/js/index.js"></script>


    <script>
        AOS.init();
    </script>

</body>

</html>