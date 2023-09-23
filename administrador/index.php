<?php
session_start();
if(empty($_SESSION['usuario'])){
    header('location: login.php');
}

include_once('../utils/get.envios.php');

?>
<!DOCTYPE html>
<html lang="es">

<?php include_once('include/head.php') ?>

<body class="bg-light">

    <?php include_once('include/navbar.php') ?>

    <header class="container card bg-white my-3 p-3 p-md-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4">Actualizar registros</h2>
            <button class="btn btn-outline-secondary" data-bs-target="#modalHelp" data-bs-toggle="modal">
                Información
                <span class="material-symbols-rounded">help</span>
            </button>
        </div>

        <form class="" id="formulario" method="post" action="../controllers/controllers.excel.php" enctype="multipart/form-data">
            <label for="inpTemplete" class="form-label text-muted">Arrastra o selecciona la plantilla modificada</label>
            <input class="form-control mb-3" type="file" name="templete" id="inpTemplete">
        </form>

        <div class="d-flex gap-1">

            <a class="btn btn-primary" href="../plantilla/templete.xlsx" download="plantilla.xlsx">
                <span class="d-none d-md-inline align-items-center">Descargar Plantilla</span>
                <span class="material-symbols-rounded">table</span>   
            </a>
            <button id='btnBackupExcel' class="btn btn-secondary">
                <span class="d-none d-md-inline align-items-center">Respaldar Datos</span>
                <span id="iconBtnBackupExcel" class="material-symbols-rounded">settings_backup_restore</span>
                <span id="iconBtnLoadExcel" class="spinner-border spinner-border-sm d-none" style="margin-left: 10px;" role="status" aria-hidden="true"></span>
            </button>
            <a class=" btn btn-secondary" href="../plantilla/templete_backup.xlsx" download="backup.xlsx">
                <span class="d-none d-md-inline align-items-center">Descargar Ultimo Respaldo</span>
                <span class="material-symbols-rounded">cloud_download</span>   
            </a>

        </div>

    </header>

    <main class="card bg-white container">

        <h1 class="fs-4 fw-normal p-4 pb-0 mb-0">Registros de <span id="typeRegs"></span></h1>

        <div class="p-4">

            <ul class="nav nav-pills" id="nav_tabs" role="tablist">
    
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab_sobre" data-bs-toggle="tab" data-bs-target="#panel_sobre" type="button" role="tab" aria-controls="panel_sobre" aria-selected="true">
                    <i class="material-symbols-rounded">mail</i>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link d-flex align-middle" id="tab_paquete" data-bs-toggle="tab" data-bs-target="#panel_paquete" type="button" role="tab" aria-controls="panel_paquete" aria-selected="false">
                    <i class="material-symbols-rounded">box</i> 
                </button>
                </li>
    
            </ul>

            
            <div class="tab-content" id="tabs_panel">

                <!-- NOTE PANEL DE SOBRES -->
                <div class="tab-pane fade show active" id="panel_sobre" role="tabpanel" aria-labelledby="tab_sobre" tabindex="0">
                    

                    <div class="table-responsive" style="max-height: 45vh">

                    <?php if(count($data_sobre)) { ?>

                        <table class="table align-middle bg-white">
    
                            <thead class="bg-light">
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th class="fw-bold">Mensajería</th>
                                    <th class="fw-bold">Costo</th>
                                    <th class="fw-bold">Entrega Estimada</th>
                                    <th class="fw-bold">Servicio</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($data_sobre as $sobre) { ?>
                                <tr>
                                    <!-- <td><?= $sobre['id'] ?></td> -->
                                    <td><?= $sobre['paqueteria'] ?></td>
                                    <td><?= $sobre['costo'] ?></td>
                                    <td><?= $sobre['etr_estimada'] ?></td>
                                    <td><?= $sobre['servicio'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
    
                        </table>

                    <?php } else { ?>

                        <p class="text-center p-4">No se encontraron resultados... <i class="bi bi-search"></i></p>

                    <?php } ?>

                    </div>
                
                </div>
                
                <!-- NOTE PANEL DE PAQUETES -->

                <div class="tab-pane fade" id="panel_paquete" role="tabpanel" aria-labelledby="tab_paquete" tabindex="0">

                <div class="table-responsive" style="max-height: 45vh">
                
                    <table class="table">

                    <?php if(count($data_paqueteria)) { ?>

                        <thead class="bg-light">
                            <tr>
                                <!-- <th>ID</th> -->
                                <th class="fw-bold">Paquetería</th>
                                <th class="fw-bold">Costo</th>
                                <th class="fw-bold">Entrega Estimada</th>
                                <th class="fw-bold">Servicio</th>
                                <th class="fw-bold">Peso en Kg</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($data_paqueteria as $paqueteria) { ?>
                                <tr>
                                    <!-- <td><?= $paqueteria['id'] ?></td> -->
                                    <td><?= $paqueteria['paqueteria'] ?></td>
                                    <td><?= $paqueteria['costo'] ?></td>
                                    <td><?= $paqueteria['etr_estimada'] ?></td>
                                    <td><?= $paqueteria['servicio'] ?></td>
                                    <td><?= $paqueteria['peso'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <?php } else { ?>

                        <p class="text-center p-4">No se encontraron resultados... <i class="bi bi-search"></i></p>

                    <?php } ?>
                </div>

                </div>

            </div>

        </div>

    </main>

    <!-- LINK MODAL AYUDA -->
    <div class="modal fade" id="modalHelp">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="h5 fw-bold modal-title">Información</h3>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p class="note note-warning"><span class="fw-bold">Nota:</span> No modificar la estructura de la plantilla por cuenta propia, si se desea realizar cambios estructurales contactarse con FDK para realizar estos cambios.</p>

                    <article>
                        <h3 class="fs-5 d-flex align-middle">Actualizar Datos</h3>
                        <p>Para realizar una actualzación necesitas arrastrar o seleccionar el archivo excel que se te proporciona al momento de dar click en <span class="fw-bold">Descargar plantilla</span>, es importante recordar que los datos serán actualizados por completo, tanto los valores de sobre como paquete, por lo que recomendamos realizar una copia de seguridad antes.</p>
                    </article>

                    <hr class="hr hr-blurry" />
                    
                    <article>
                        <p class="note note-secondary"><span class="fw-bold">Nota:</span> Al momento de realizar un respaldo el respaldo anterior será remplazado por el reciente.</p>
                        <h3 class="fs-5 d-flex align-middle"><i class="material-symbols-rounded">settings_backup_restore</i> Respaldar Datos</h3>
                        <p>El botón de respaldo de datos ayuda a crear una copia de seguridad del documento excel original, esto en caso de que exista algún problema. Para descargar este respaldo solo es necesario dar click en el botón <span class="fw-bold">Descarga respaldo</span>.</p>
                        <ul>
                            <li>El respaldo habra finalizado en cuanto el boton deje de cargar y se vuelva a habilitar</li>
                            <li>Si el botón se colorea de <span class="text-danger fw-bold">rojo</span>, es porque ocurrio un error al respaldar y se recomienda esperar unos momentos o reportar este problema con soporte FDK.</li>
                        </ul>
                    </article>
                    
                </div>
                
                <div class="modal-footer">
                    <button data-bs-dismiss="modal" class="btn btn-outline-secondary">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- LINK PRELOADER ACTUALIZACION -->

    <div id="preloaderExcel" class="d-flex align-items-center justify-content-center bg-white w-100 h-100 position-fixed start-0 top-0 d-none">
        <img width="100" height="100" src="images/servidor.gif">
        Actualizando ...
    </div>

<script src="scripts/index.js"></script>

</body>

</html>