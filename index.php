<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN'S DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <title>Cotiza tu envío</title>
</head>
<body class="bg-body-tertiary">

<?php include_once('include/navbar.php') ?>

<section class="container">
    <section class="card mt-4">
        <div class="card-body">
            <div class="mb-3">
                <label for="select_categoria" class="form-label">Tipo de envio</label>
                <select class="form-select" id="select_categoria">
                    <option value="sobre">Sobres</option>
                    <option value="paquete">Paquetes</option>
                </select>
            </div>
        </div>
    </section>
</section>


<script>

    let registros = [];

    select_categoria.addEventListener("input", async (e) => {
        let tipo_envio = e.target.value;
        let data = await getData({type: tipo_envio})
    })
    
    async function getData({type}) {
        let response = await fetch("controllers/controllers.getregistros.php?categoria=" + type)
        let data = await response.json()
        registros = data
    }

    console.log(data_paquetes)
</script>

</body>
</html>