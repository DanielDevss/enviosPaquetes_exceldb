inpTemplete.addEventListener('input', () => {

    swal({
        title: "¿Deseas actualizar registros?",
        text: "Recuerda que siempre puedes hacer un respaldo",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: "btn-secondary",
        confirmButtonText: "Si, actualizar datos",
    }, function (isConfirm){
        if(isConfirm){
            preloaderExcel.classList.remove("d-none")
            formulario.submit()
        }else{
            console.log("cancelado")
            inpTemplete.value = null;
        }

    })

})

typeRegs.innerHTML = "Sobres"
tab_sobre.onclick = () => {
    typeRegs.innerHTML = "Sobres"
}
tab_paquete.onclick = () => {
    typeRegs.innerHTML = "Paquetes"
}

btnBackupExcel.addEventListener('click' , () => {

    swal({
        title: "¿Deseas continuar?",
        text: "Este respaldo remplazara al anterior",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: "btn-secondary",
        confirmButtonText: "Respaldar",
    }, function(isConfirm){
        if(isConfirm){
    
            btnBackupExcel.classList.add("disabled")
            iconBtnBackupExcel.classList.add("d-none")
            iconBtnLoadExcel.classList.remove("d-none")
    
            fetch("../controllers/controllers.excel.php?backup", {
                method: "POST",
            })
            .then(respuesta => respuesta.text())
            .then(resultado => {
                if(resultado === "Respaldado"){
                    setTimeout(()=>{
                        btnBackupExcel.classList.remove("disabled")
                        iconBtnBackupExcel.classList.remove("d-none")
                        iconBtnLoadExcel.classList.add("d-none")
                        swal({
                            title: "Respaldo finalizado",
                            text: "Ya puedes descargar tu respaldo",
                            type: "success"
                        })
                    }, 1000)
                }else{
                    btnBackupExcel.className = "btn btn-danger";
                }
            })
        }
    })

})

/* -------------------------------------------------------------------------- */
/*                              AÑADIR PAQUETERIA                             */
/* -------------------------------------------------------------------------- */

btnSavePaqueteria.addEventListener("click", () => {
    closeModalPaquteria.click();
    swal({
        title: "¡Nota!",
        text: "Añade la paquetería en la lista Excel",
        type: "info"
    }, () => {
        formPaqueteria.submit();
        preloaderExcel.classList.remove("d-none")
    });
});

inpLogotipo.addEventListener("input", (e) => {
    let file = e.target.files[0];
    let fileSize = file.size;
    let fileName = file.name;
    let fileArrName = fileName.split(".");
    let fileExtension = fileArrName[fileArrName.length - 1];

    if(fileExtension !== "png"){
        swal({
            title: "Formato invalido",
            text: "Solo se admiten PNG",
            type: "warning"
        });
        inpLogotipo.value = "";
    }
    else if(fileSize > 500000){
        swal({
            title: "Peso excedido",
            text: "La imagen excede los 500KB",
            type: "warning"
        });
        inpLogotipo.value = "";
    }
});


// LISTAR PAQUETES
getPaqueterias();

async function getPaqueterias () {
    let url = "../controllers/controllers.paqueteria.php";
    let response = await(fetch(url));
    let result = await response.json();

    console.log(result);
    result.forEach( data => {
        
        let {nombre, dir} = data;
        let li = document.createElement("li");
        li.className = "list-group-item list-group-item-action d-flex justify-content-between align-items-center"
        
        let button = document.createElement("button");
        button.className = "btn btn-danger me-1";
        button.textContent = "Eliminar";

        button.addEventListener("click", () => {
            deletePaqueteria(data.id);
        })

        let spanNombre = document.createElement("span");
        spanNombre.textContent = nombre;
        
        li.appendChild(spanNombre);
        li.appendChild(button)
        listaPaqueterias.appendChild(li);
    })
}

async function deletePaqueteria (id) {
    swal({
        title: "¿Eliminar Paquetería?",
        text: "Al eliminar dejas sin imagen a los registros de está paquetería",
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: "btn-secondary",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Eliminar",
    }, async (isConfirm) => {
        if(isConfirm){
            preloaderExcel.classList.remove("d-none")
            let url = `../controllers/controllers.paqueteria.php?id=${id}`;
            let response = await(fetch(url, {
                method: "DELETE",
            }));
            let result = await response.json();
            console.log(result);
            if(result.response === "ok"){
                location.reload();
            }else{
                swal({
                    title: "Error",
                    text: "No se logro eliminar la paquetería",
                    type: "error"
                })
            }
        }else{
            swal({
                title:"Cancelado"
            })
        }
    })
    
}