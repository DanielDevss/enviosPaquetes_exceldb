<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php')?>
<body>

<!-- LINK - Navbar -->

<?php include_once('include/navbar.php') ?>

<!-- LINK banner -->

<header class="banner position-relative">
    <img class="w-100 d-block banner-fondo" src="assets/img/banner/fondo.png" alt="Imagen del banner">
</header>

<section class="position-fixed z-3 top-0 start-0 end-0 w-100" style="pointer-events: none; ">
    <div class="container" style="margin-top:70px;">
        <div class="row">
            
            <div class="col-lg-4 d-none d-lg-block d-flex align-items-center" style="height:var(--alto); pointer-events:auto;">
                <?php include_once('include/cardcotizar.php') ?>
            </div>
            
        </div>
    </div>
</section>


<section class="container my-5">

    <div class="row justify-content-end">

        <div class="col-lg-8">


            <article class="enlaza p-4">
                <h2 class="text-uppercase f-fashion enlaza__titulo">Enlaza</h2>
                <p class="enlaza__texto text-uppercase">
                    <span class="fw-bold">Todas tus cuentas de paquetería con nosotros</span><br>
                    a tu sitio web ecommerce
                </p>
                <img class="enlaza__imagen" src="assets/img/enlaza/celular.png" alt="Imagen de referencia">
            </article>

        </div>
    
    </div>

</section>



<section class="atencion position-relative">

    <img src="assets/img/atencion/fondo.png" class="w-100 atencion__fondo">

    <div class="atencion__contenedor bottom-0 h-100 w-100">

        <section class="container">
            <div class="row justify-content-end">
    
                <div class="col-lg-8">
        
                <section class="atencion__contenido">
    
                    <article class="p-4 atencion__article">

                        <img height="60" src="assets/img/banner/logotipo.png" class="m-auto d-block mb-3" alt="">
                        <h3 class="atencion__titulo"><span class="d-block f-fashion">La atencion al cliente</span>nos distingue</h3>
                        <ul class="atencion__lista">
                            <li>EL servicio al cliente, la empatía es la clave. En un mundo digital, no solo ofrecemos soluciones en línea, si no que también puedes visitar nuestras sucursales. Valoramos la rapidez de respuesta.</li>
                            <li>Para nosotros el tiempo de respuesta es esencial, sobre todo cuando hablamos de mensajería.</li>
                        </ul>

                    </article>
                    <img class="atencion__repartidor" src="assets/img/atencion/repartidor.png">
    
                </section>
        
                </div>
            
            </div>
        
        </section>

    </div>
</section>

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
                        <li>Si tienes un negocio o eres emprendedor, ¡pregunta por nuestras tarifas preferenciales!</li>
                        <li>Registrate para tener los mejores precios desde tu primer envío.</li>
                        <li>Anticipa tus envios con nosotros ¡y obtén el precio más bajo!</li>
                    </ul> 
    
                    <div class="tarifas__plataforma">
                        <img src="assets/img/tarifa/tarifa.png" class="mt-5 d-block mx-auto my-3">
                        <p class="tarifas__badge badge text-bg-success fs-5 m-auto d-block">¡Somos una plataforma gratuita!</p>
                    </div>

                </article>

                
            </div>
        </div>
    </div>
    <img src="assets/img/tarifa/mujer.png" class="position-absolute end-0 bottom-0 tarifas__mujer float-end" alt="">
</section>



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
                        <img class="marcas__marca" src="assets/img/marcas/fedex.png" alt="">
                        <img class="marcas__marca" src="assets/img/marcas/dhl.png" alt="">
                        <img class="marcas__marca" src="assets/img/marcas/ups.png" alt="">
                        <img class="marcas__marca" src="assets/img/marcas/estafeta.png" alt="">
                    </div>

                </article>
                
            </div>
        </div>
    </div>
</section>

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


<section class="caracteristicas container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">

            <div class="caracteristicas__item">

                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/recoleccion.png" class="w-100 d-block caracteristicas__image">
                    <img src="assets/img/proceso/recoleccion-1.png" class="position-absolute caracteristicas__imagemini">
                </div>

                <div class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo fw-bold text-uppercase">Recolección</h3>
                    <p><span class="fw-bold">Programa</span> con nosotros o el proveedor de tu preferencia en el mismo lugar, <span class="fw-bold">la recolección de tus envíos sin costo extra.</span></p>
                </div>
            
            </div>


            <div class="caracteristicas__item mt-5">
                
                <div class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo fw-bold text-uppercase">Rastreo</h3>
                    <p><span class="fw-bold">¡Ahorra tiempo</span> con nuestra herramienta de <span class="fw-bold">rastreo directo!</span></p>
                </div>

                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/rastreo.png" class="w-100 d-block caracteristicas__image">
                    <img src="assets/img/proceso/rastreo-1.png" class="position-absolute caracteristicas__imagemini--reverse">
                </div>
            
            </div>


            <div class="caracteristicas__item mt-5">
                
                <div class="caracteristicas__images position-relative">
                    <img src="assets/img/proceso/reimprime.png" class="w-100 d-block caracteristicas__image">
                    <img src="assets/img/proceso/reimprime-1.png" class="position-absolute caracteristicas__imagemini--reverse">
                </div>
                
                <div class="caracteristicas__info">
                    <h3 class="h2 caracteristicas__titulo fw-bold text-uppercase"><span>Reimprime, administra <span class="blue">y controla tus guías</span></span></h3>
                    <p><span class="fw-bold">¡Ahorra tiempo</span> con nuestra herramienta de <span class="fw-bold">rastreo directo!</span></p>
                </div>

            </div>

        </div>
    </div>
</section>

</body>
</html>