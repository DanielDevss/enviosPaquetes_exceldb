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