
<!DOCTYPE html>
<html lang="es">
<?php include_once('include/head.php') ?>
<body style="height: 100vh;" class="container">
<?php 
    if(isset($_GET['err'])){
        echo 
        "<div id='alert' class='position-fixed w-100 start-0 p-4'>
            <div class='alert alert-danger text-center d-flex align-items-center justify-content-center'>
                <span class='material-symbols-rounded'>error</span>
                Usuario o contraseña incorrectos
            </div>
        </div>";
    } 
?>


    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <main class="card">
            <form action="../controllers/controllers.auth.php" method="post" class="card-body">
                <h1 class="card-title h5">Acceso al Dashboard</h1>
                <div class="mb-2">
                    <label for="inpUsername" class="form-label">Nombre de usuario</label>
                    <input type="text" name="username" class="form-control" id="inpUsername" placeholder="Ingresa el usuario">
                </div>
                <div class="mb-3">
                    <label for="inpPassword" class="form-label">Contraseña de acceso</label>
                    <input type="password" name="password" class="form-control" id="inpPassword" placeholder="Ingresa la contraseña">
                </div>
                <button class="btn btn-secondary w-100" type="submit">
                    Acceder al Dashboard
                    <span class="material-symbols-rounded">login</span>
                </button>
            </form>
        </main>
    </div>

</body>
</html>