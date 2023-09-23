<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php') ?>

<body class="cotizarpage">
    <!-- LINK - Navbar -->

    <?php include_once('include/navbar.php') ?>


    <section class="position-lg-fixed z-3 top-0 start-0 end-0 w-100" style="pointer-events: none;">

        <div class="container min-100vh">
            <div class="row h-100">

                <div class="h-100 col-lg-4 d-lg-flex align-items-center">
                    <?php include_once('include/cardcotizar.php') ?>
                </div>

            </div>
        </div>

    </section>

    <section class="container">

        <div class="row h-100">

            <main class="ms-auto col-lg-8 py-5" id="registrosenvios">

                <header class="d-flex flex-column flex-lg-row justify-content-between">
                    <h1 class="h5 text-uppercase fw-bold header__titulo">
                        <span class="f-fashion fw-normal d-block h1">Encontramos <span id="cantidad_registros" class="f-fashion h1">0</span></span>
                        opciones para tu envío
                    </h1>

                    <div class="header__columns">
                        <table>
                            <tr>
                                <td class="fw-bold">Tipo de envío:</td>
                                <td id="tipoenvio_td" class="ps-3">Paquete</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Peso:</td>
                                <td id="peso_td" class="ps-3">---</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-6 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                </svg>
                                <p>Recolección en domicilio</p>
                            </div>
                            <div class="col-6 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                </svg>
                                <p>Recolección en domicilio</p>
                            </div>
                        </div>
                    </div>
                </header>


                <section class="listaenvios mt-3" id="listaenvios">
                    <!-- Los registros son inyectados con js -->
                </section>


            </main>

        </div>
    </section>



    <article class="container mb-5">

        <section class="row justify-content-end" style="font-size: .8rem;">

            <section class="col-lg-8">

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="border border-dark rounded-3 p-3">
                            <p>- Los costos en esta cotización son precios estimados en los datos que hayas proporcionado.</p>
                            <p>- Si eres emprendedor o tienes un negocio, disfruta de nuestras tarifas preferenciales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border border-dark rounded-3 p-3">
                            <p>- Los costos en esta cotización son precios estimados en los datos que hayas proporcionado.</p>
                            <p>- Si eres emprendedor o tienes un negocio, disfruta de nuestras tarifas preferenciales.</p>
                        </div>
                    </div>
                </div>

            </section>

        </section>

    </article>


    <!-- LINK ALERTA -->

    <div class="modal fade" id="modalAlert">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <i class="fas fa-bell text-white bg-primary fs-2 m-auto alerta__icon rounded-circle"></i>

                <img src="assets/img/cotizar/paquetes.png" class="w-75 d-block m-auto">

                <h3 class="fw-bold alerta__titulo">¡Espera!</h3>

                <p class="alerta__texto">¿Tienes un negocio y quieres cotizar los mejores precios? <br> ¿Quieres ahorrar hasta 40% en tus envíos?</p>

                <a href="#" class="btn alerta__boton">Contáctanos hoy mismo</a>

            </div>
        </div>
    </div>



    <script src="assets/js/index.js"></script>

    <script>
        let vecesPulsadoCotizar = 0;
        let modalAlerta = new bootstrap.Modal(document.querySelector("#modalAlert"));

        btn_cotizar.addEventListener("click", () => {
            vecesPulsadoCotizar++;
            if (vecesPulsadoCotizar == 3) {
                setTimeout(() => {
                    modalAlerta.show()
                }, 2000);
            }
        })
    </script>

</body>

</html>