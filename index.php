<!DOCTYPE html>
<html lang="es">
<?php include_once('include/head.php')?>
<body>

<!-- LINK - Navbar -->

<?php include_once('include/navbar.php') ?>

<!-- LINK banner -->

<header class="banner position-relative">
    <img class="w-100 d-block banner-fondo" src="assets/img/banner/fondo.png" alt="Imagen del banner">

    <div class="position-absolute w-100 h-100 top-0 start-0">
        <div class="container h-100 p-5">
            <div class="row h-100">
                <div class="col-lg-4"></div>
                
                <article class="col-lg-7 banner__article">

                    <section class="ms-auto banner__article__contenedor">
                        <p class="h1 text-white text-uppercase fw-bold">El <span class="f-fashion fw-normal h2">Punto de conexión</span> para tus envíos</p>
                        <button class="btn btn-secondary fw-bold">¡Centraliza tus envíos aquí!</button>
                    </section>

                    <section class="banner__article__contenedor">
                        <p class="text-white h1 text-uppercase fw-bold">
                            <span class="d-block f-fashion fw-normal">El lugar correcto</span>
                            para gestionar tus envíos con descuentos
                            <span class="d-block verde">de hasta el 70%</span>
                        </p>
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
<a href="cotizar.php" class="d-block d-lg-none buttonCotizarResponse mb-4 text-uppercase btn">¡Cotizar ya!</a>

<section class="position-lg-fixed z-3 top-0 start-0 end-0 w-100" style="pointer-events: none;">

    <div class="container min-100vh">
        <div class="row h-100">
            
            <div class="h-100 col-lg-4 d-lg-flex align-items-center">
                <?php include_once('include/cardcotizar.php') ?>
            </div>
            
        </div>
    </div>

</section>


<!-- LINK ENLAZA -->

<section class="container my-5">

    <div class="row justify-content-end">

        <div class="col-lg-8">


            <article class="enlaza p-4">
                <h2 data-aos="zoom-out" class="text-uppercase f-fashion enlaza__titulo">Enlaza</h2>
                <p class="enlaza__texto text-uppercase">
                    <span class="fw-bold">Todas tus cuentas de paquetería con nosotros</span><br>
                    a tu sitio web ecommerce
                </p>
                <img data-aos="fade-left" class="enlaza__imagen" src="assets/img/enlaza/celular.png" alt="Imagen de referencia">
            </article>

        </div>
    
    </div>

</section>

<!-- LINK ATENCION -->

<section class="atencion position-relative">

    <img src="assets/img/atencion/fondo.png" class="w-100 atencion__fondo">

    <div class="atencion__contenedor bottom-0 h-100 w-100">

        <section class="container">
            <div class="row justify-content-end">
    
                <div class="col-lg-8">
        
                <section class="atencion__contenido">
    
                    <article data-aos="fade-down" class="p-4 atencion__article">

                        <img src="assets/img/banner/logotipo.png" class="m-auto d-block mb-3 atencion__logo" alt="">

                        <h3 class="atencion__titulo"><span class="d-block f-fashion">La atencion al cliente</span>nos distingue</h3>

                        <ul class="atencion__lista">
                            <li>EL servicio al cliente, la empatía es la clave. En un mundo digital, no solo ofrecemos soluciones en línea, si no que también puedes visitar nuestras sucursales. Valoramos la rapidez de respuesta.</li>
                            <li>Para nosotros el tiempo de respuesta es esencial, sobre todo cuando hablamos de mensajería.</li>
                        </ul>

                    </article>
                    <img data-aos="fade-left" data-aos-duration="800" class="atencion__repartidor" src="assets/img/atencion/repartidor.png">
    
                </section>
        
                </div>
            
            </div>
        
        </section>

    </div>
</section>

<!-- LINK TARIFAS -->

<section class="tarifas text-white position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                
                <article class="tarifas__article">
                    
                    <h2 class="text-uppercase tarifas__titulo">
                        <span>Tarifas</span>
                        Competitivas y <br>
                        económicas.
                    </h2>
    
                    <ul class="tarifas__lista">
                        <li data-aos="zoom-in-up">Si tienes un negocio o eres emprendedor, ¡pregunta por nuestras tarifas preferenciales!</li>
                        <li data-aos="zoom-in-up">Registrate para tener los mejores precios desde tu primer envío.</li>
                        <li data-aos="zoom-in-up">Anticipa tus envios con nosotros ¡y obtén el precio más bajo!</li>
                    </ul> 
    
                    <div class="tarifas__plataforma">
                        <img data-aos="zoom-out-down" src="assets/img/tarifa/tarifa.png" class="mt-5 d-block mx-auto my-3">
                        <p class="tarifas__badge badge text-bg-success fs-5 m-auto d-block">¡Somos una plataforma gratuita!</p>
                    </div>

                </article>

                
            </div>
        </div>
    </div>
    <img src="assets/img/tarifa/mujer.png" data-aos="fade-left" data-aos-duration="800" class="position-absolute end-0 bottom-0 tarifas__mujer float-end" alt="">
</section>


<!-- LINK MARCAS -->

<section class="marcas position-relative">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">

                <article class="marcas__article">

                    <h2 class="marcas__titulo text-uppercase fw-bold">
                        Colaboramos con 
                        <span class="f-fashion">Las mejores marcas</span>
                        Para tus envíos
                    </h2>
                    <p class="fw-bold text-uppercase mt-3">Regístrate para tener <span class="text-bg-success">los mejores precios desde tu primer envío</span></p>

                    <div class="marcas__marcas mt-5 pt-4">
                        <img data-aos="flip-down" data-aos-delay-="600" class="marcas__marca m-2" src="assets/img/marcas/fedex.png" alt="">
                        <img data-aos="flip-left" data-aos-delay-="600" class="marcas__marc m-2" src="assets/img/marcas/dhl.png" alt="">
                        <img data-aos="flip-up" data-aos-delay-="600" class="marcas__marca m-2" src="assets/img/marcas/redpack.png" alt="">
                        <img data-aos="flip-right" data-aos-delay-="600" class="marcas__marca m-2" src="assets/img/marcas/estafeta.png" alt="">
                        <img data-aos="flip-right" data-aos-delay-="600" class="marcas__marca m-2" src="assets/img/marcas/sendex.png" alt="">
                    </div>

                </article>
                
            </div>
        </div>
    </div>
</section>

<!-- LINK BENEFICIOS -->

<section class="beneficios position-relative">
    <img src="assets/img/proceso/foto-ejecutivo.png" class="w-75 d-block ms-auto">
    <div class="position-absolute top-0 start-0 w-100">
        <div class="container p-md-5">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <h2 class="text-uppercase h1 fw-bold beneficios__titulo">
                        Beneficios 
                        <span class="d-block fw-bold">Adicionales</span>
                        <span class="d-block fw-bold">Reportes de tus envíos</span>
                    </h2>
                    <ul class="beneficios__lista">
                        <li><span class="fw-bold">Descarga el informe</span> de cada uno de los envios.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- LINK CARACTERISITCAS -->

<section class="caracteristicas container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">

            <div data-aos="zoom-out-in" class="caracteristicas__item">

                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/recoleccion.png" class="w-100 d-block caracteristicas__image">
                    <img data-aos="zoom-in-right" src="assets/img/proceso/recoleccion-1.png" class="position-absolute caracteristicas__imagemini">
                </div>

                <div data-aos="fade-right" class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo fw-bold text-uppercase">Recolección</h3>
                    <p><span class="fw-bold">Programa</span> con nosotros o el proveedor de tu preferencia en el mismo lugar, <span class="fw-bold">la recolección de tus envíos sin costo extra.</span></p>
                </div>
            
            </div>


            <div data-aos="zoom-out-in" class="caracteristicas__item contenedorchecks__label--reverse mt-5">
                
                <div data-aos="fade-right" class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo fw-bold text-uppercase">Rastreo</h3>
                    <p><span class="fw-bold">¡Ahorra tiempo</span> con nuestra herramienta de <span class="fw-bold">rastreo directo!</span></p>
                </div>

                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/rastreo.png" class="w-100 d-block caracteristicas__image">
                    <img data-aos="zoom-in-left" src="assets/img/proceso/rastreo-1.png" class="position-absolute caracteristicas__imagemini--reverse">
                </div>
            
            </div>


            <div data-aos="zoom-out-in" class="caracteristicas__item mt-5">
                
                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/reimprime.png" class="w-100 d-block caracteristicas__image">
                    <img data-aos="zoom-in-right" src="assets/img/proceso/reimprime-1.png" class="position-absolute caracteristicas__imagemini">
                </div>
                
                <div data-aos="fade-right" class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo caracteristicas__titulo--bicolor fw-bold text-uppercase"><span class="bi">Reimprime, Administrada</span> y controla tus guías</h3>
                    <p>Genera la <span class="fw-bold">reimpresión de tus guías</span> por algún contratiempo, <span class="fw-bold">sin ningún cargo adicional.</span></span></p>
                </div>

            </div>


            <div data-aos="zoom-out-in" class="caracteristicas__item contenedorchecks__label--reverse mt-5">
                                
                <div data-aos="fade-right" class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo caracteristicas__titulo--bicolor fw-bold text-uppercase"><span class="bi">Recolectamos</span> y empacamos</h3>
                    <p>Brindamos <span>embalaje especializado</span> de acuerdo a tus especificaciones, <span class="fw-bold">para cada uno de tus envíos.</span></p>
                </div>

                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/recolectamos.png" class="w-100 d-block caracteristicas__image">
                    <img data-aos="zoom-in-left" src="assets/img/proceso/recolectamos-1.png" class="position-absolute caracteristicas__imagemini--reverse">
                </div>

            </div>

        </div>
    </div>
</section>


<?php include_once("include/footer.php") ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="assets/js/index.js"></script>


<script>
    AOS.init();
</script>

</body>
</html>