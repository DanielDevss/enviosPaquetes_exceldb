<!DOCTYPE html>
<html lang="es">
<?php include_once('include/head.php') ?>

<body>

    <!-- LINK - Navbar -->

    <?php include_once('include/navbar.php') ?>

    <!-- LINK banner -->

    <header class="banner position-relative">
        <img class="w-100 d-block banner-fondo" src="assets/img/contacto/fondo.jpg" alt="Imagen del banner">

        <div class="position-absolute w-100 h-100 top-0 start-0">
            <div class="container h-100 p-5">
                <div class="row h-100">
                    <div class="col-lg-4"></div>

                    <article class="col-lg-7 banner__article--contacto">

                        <h2 class="h2 text-white text-shadow text-uppercase fw-bold">Te damos las mejores opciones <span class="f-fashion display-3 fw-normal d-block">Elige una y envía</span></h2>

                        <p class="badge text-bg-success fs-4 ms-auto">¡Centraliza tus envíos <span class="fw-bold">aquí</span>!</p>

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
                    <?php include('include/cardcotizar.php') ?>
                </div>

            </div>
        </div>

    </section>


    <!-- LINK ENLAZA -->

    <article class="container my-5">

        <section class="row justify-content-end">

            <main class="col-lg-8 mt-5">

                <h1 class="f-fashion display-3 text-uppercase">Contáctanos</h1>

                <img class="w-75-custom d-block m-auto mb-5" src="assets/img/contacto/foto_.png" alt="Contacta a esyshipment">

                <div class="py-5">

                    <form class="card border-0 m-auto w-75-custom bg-dark-subtle" action="">
                        <fieldset class="card-body">
                            <div class="p-3">
                                <label for="inpNombre" class="form-label fw-bold">Nombre</label>
                                <input type="text" id="inpNombre" class="form-control" placeholder="Ingrese su nombre *">
                            </div>
                            <div class="p-3">
                                <label for="inpTelefono" class="form-label fw-bold">Télefono</label>
                                <input type="tel" id="inpTelefono" class="form-control" placeholder="Ingrese su télefono">
                            </div>
                            <div class="p-3">
                                <label for="inpCorreo" class="form-label fw-bold">Correo Eléctronico</label>
                                <input type="email" id="inpCorreo" class="form-control" placeholder="Ingrese su correo eléctronico *">
                            </div>
                            <div class="p-3">
                                <label for="inpEmpresa" class="form-label fw-bold">Empresa</label>
                                <input type="text" id="inpEmpresa" class="form-control" placeholder="Ingrese el nombre de la empresa *">
                            </div>
                            <div class="p-3">
                                <label for="textareaAsunto" class="form-label fw-bold">Asunto</label>
                                <textarea name="" id="textareaAsunto" class="form-control" placeholder="Ingrese un asunto o mensaje *"></textarea>
                            </div>

                            <div class="p-4">
                                <button class="btn btn-primary d-block m-auto px-4" id="sendMessage">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                
                <section class="row w-75-custom m-auto llamanos">
                    <h2 class="col-md-6 fw-bold h5 llamanos__titulo">¡Llámanos! <br> Estamos para servirte</h2>
                    <div class="col-md-6 d-flex align-items-center">
                        <img width="50" src="assets/img/contacto/whatsapp.png" alt="Contactanos por whatsapp">
                        <a target="_blank" class="h5 fw-bold ms-2 llamanos__numero">(33) 3745 8508</a>
                    </div>
                </section>

                <ul class="w-75-custom contacto__lista mx-auto">
                    <li class="list-item">
                        <img width="40" src="assets/img/contacto/mail.png" alt="Envia correo a esyshipment">
                        <a target="_blank" href="mailto:contacto@esyshipment.com">contacto@esyshipment.com</a>
                    </li>
                    <li class="list-item">
                        <img width="40" src="assets/img/contacto/location.png" alt="Envia correo a esyshipment">
                        <a target="_blank" href="https://maps.app.goo.gl/n2c2Pg9VgRsuDyeT6">Lomas verde No. 4857, Colonia Bosques, Guadalajara, Jalisco.</a>
                    </li>
                    <li class="list-item">
                        <img width="40" src="assets/img/contacto/reloj.png" alt="Envia correo a esyshipment">
                        <span>Lunes a viernes: 8:00 am - 7:00 pm <br> Sábados: 9:00 am - 2 pm</span>
                    </li>
                </ul>

            </main>

        </section>

    </article>




    <?php include_once("include/footer.php") ?>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="assets/js/index.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>