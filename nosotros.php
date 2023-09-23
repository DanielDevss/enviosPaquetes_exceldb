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

                        <section class="nosotrosheader my-auto mb-auto pt-4 text-white h-75 w-75">
                            <h2 class="text-uppercase fw-bold fs-1"><span class="f-fashion fw-normal d-block">Nuestra</span> Empresa</h2>
                            <p class="text-justify">Nuestra innovadora plataforma, está diseñada para optimizar tus operaciones de envío. Al consolidar todos tus envios en un solo lugar, <span class="fw-bold">te ofrecemos la ventaja de reducir tiempos y costos,</span> lo que se traduce en un servicio al cliente de primera clase.</p>
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

            
            <main class="col-lg-8 mt-5">


                <h1 class="text-uppercase f-fashion display-3">¿Qué buscamos?</h1>
                <p class="text-justify">En <span class="fw-bold text-uppercase">Esyshipment</span>, entendemos que la rapidez y la eficacia son esenciales en el mundo de los envíos. Por eso, nos esforzamos constantemente por <span class="fw-bold">proporcionar a nuestros clientes un acceso sin complicaciones a las mejores tarifas,</span> al mismo tiempo que ofrecemos una experiencia de envío sin igual, respaldada por la última tecnología y la experiencia de nuestro equipo de logística.</p>

                <section class="position-relative">
                    <img src="assets/img/nosotros/personas.png" class="w-75 d-block m-auto pb-5">
                    <div style="height:50px" class="d-none d-md-block"></div>
                    <img src="assets/img/nosotros/cajas.png" class="w-50 position-absolute bottom-0 start-0">
                </section>


                <section class="my-5">

                    <div class="row mb-4">
                        <figure class="col-md-2 col-4 m-auto">
                            <img class="w-100" src="assets/img/nosotros/mision.png">
                        </figure>
                        <div class="col-md-10 mt-2">
                            <h3 class="fw-bold h1 text-center text-md-start">Misión</h3>
                            <p class="text-justify">Ser el aliado de confianza de nuestros clientes en sus necesidades logísticas, brindando soluciones que impulsan su éxito y el nuestro. Nos esforzamos por conectar el mundo de manera eficiente, segura y sostenible, y que por marcar la diftencia en la industria de envíos.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <figure class="col-md-2 col-4 m-auto">
                            <img class="w-100" src="assets/img/nosotros/vision.png">
                        </figure>
                        <div class="col-md-10 mt-2">
                            <h3 class="fw-bold h1 text-center text-md-start">Visión</h3>
                            <p class="text-justify">Forjar un mundo en el que los envíos sean una fuente de conexión; crecimiento y prosperidad para todos. Estamos comprometidos a hacer realidad esta visión a través de la innovación continua, la excelencia operativa y un enfoque inquebrantable en la satisfacción del cliente.
                            <p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <figure class="col-md-2 col-4 m-auto">
                            <img class="w-100" src="assets/img/nosotros/valores.png">
                        </figure>
                        <div class="col-md-10 mt-2">
                            <h3 class="fw-bold h1 text-center text-md-start">Misión</h3>
                            <p class="text-justify">Excelencia, Integridad, Innovación, Sotenibilidad, Colaboración, Servicio al cliente y Responsabilidad social.
                            <p>
                        </div>
                    </div>

                </section>

                <section class="optimiza" id="seccionOptimiza">
                    <h2 class="fw-bold text-uppercase h1"><span class="fw-normal f-fashion d-block">Optimiza tus envíos</span> y economiza en <span class="blue">Tiempo, Dinero y Recursos</span></h2>

                    <div class="position-relative p-5 optimiza__contenedor">
                        <img class="w-75 d-block m-auto optimiza__caja" src="assets/img/nosotros/caja.png" alt="">
                        <div class="text-center optimiza__texto">
                            <p class="fw-bold h1 optimiza__numero"><span id="counterTiempo">75</span>%</p>
                            <p>De ahorro en el tiempo que dedicas hoy a la gestión de tu almacén.</p>
                        </div>
                        <div class="text-center optimiza__texto">
                            <p class="fw-bold h1 optimiza__numero"><span id="counterRapido">65</span>%</p>
                            <p>Más rápido en realizar los envíos de paquetería de tu ecommerce.</p>
                        </div>
                        <div class="text-center optimiza__texto">
                            <p class="fw-bold h1 optimiza__numero"><span id="counterAhorro">54</span>%</p>
                            <p>De ahorro en tus envíos gracias al comparador de tarifas.</p>
                        </div>
                        <div class="text-center optimiza__texto">
                            <p class="fw-bold h1 optimiza__numero"><span id="counterHoras">100</span>h</p>
                            <p>Ahorradas al mes para enfocarte en el crecimiento de tu negocio.</p>
                        </div>
                    </div>
                </section>

            </main>

        </section>

    </article>




    <?php include_once("include/footer.php") ?>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();

        let actived = false
        window.addEventListener("scroll", () => {
            let topContainer = seccionOptimiza.getBoundingClientRect().top + scrollY;
            if((actived === false) && (window.scrollY >= topContainer - 200)){
                activarContadores();
                actived = true;
            }
        })
        
        
        function activarContadores () {
            
            const counterUp = window.counterUp.default;

            let contadores = [
                counterTiempo,
                counterRapido,
                counterAhorro,
                counterHoras,
            ]
            
            contadores.forEach( count => {
                counterUp( count, {
                    duration: 2000,
                    delay: 10
                })
            })

        }
    </script>
    <script src="assets/js/index.js"></script>



</body>

</html>