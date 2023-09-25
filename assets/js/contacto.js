formFooter.addEventListener("submit", (e) => {
    e.preventDefault();
    
    if(validarCampos()) {

        let formData = new FormData(e.target);
        submitFooter.classList.add("disabled");
        submitFooter_spinner.classList.remove("d-none");
        submitFooter_texto.textContent = "Enviando...";
        fetch("utils/send.contacto.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(res => {
            submitFooter.classList.remove("disabled");
            submitFooter_spinner.classList.add("d-none");
            submitFooter_texto.textContent = "Enviar";  
            swal({
                title: "Mensaje enviado",
                text: "¡Gracias por tu mensaje! nos pondremos en contacto contigo.",
                icon: "success"
            })
        })
        .catch(err => {
            submitFooter.classList.remove("disabled");
            submitFooter_spinner.classList.add("d-none");
            submitFooter_texto.textContent = "Enviar";  
            swal({
                title: "¡Oops! hubo un error",
                text: "Lo sentimos, ocurrio un error, intentelo mas tarde.",
                icon: "error"
            })
            console.error(err)
        })
    }
})

function validarCampos () {
    let inp_nombre = inp_Nombre.value;
    let inp_whatsapp = inp_Whatsapp.value;
    let inp_correo = inp_Correo.value;
    let inp_mensaje = text_Mensaje.value;

    let expRegs = {
        nombre : /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s'-]+$/,
        correo : /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
        whatsap: /^(?:\+\d{1,3})?(?:\d{10,12})$/,
        mensaje: /[^a-zA-Z0-9\s]+/
    }

    if(!inp_nombre && !inp_whatsapp && !inp_correo && inp_mensaje === ""){
        swal({
            title: "Campos vacíos",
            text: "Debes rellenar todos los campos",
            icon: "warning"
        })
        
        return false;
    }

    else if(!expRegs.nombre.test(inp_nombre)){
        swal({
            title: "Nombre invalido",
            text: "Este campo es obligatorio y solo se admiten nombres propios",
            icon: "warning"
        })
        inp_Nombre.focus();
        return false;
    }
    else if(!expRegs.whatsap.test(inp_whatsapp)){
        swal({
            title: "WhatsApp invalido",
            text: "Este campo es obligatorio y solo se admiten números de télefono",
            icon: "warning"
        })
        inp_Whatsapp.focus();
        return false;
    }
    else if(!expRegs.correo.test(inp_correo)){
        swal({
            title: "Correo invalido",
            text: "Este campo es obligatorio y solo se admiten correos eléctronicos",
            icon: "warning"
        })
        inp_Correo.focus()
        return false;
    }
    else if(!expRegs.mensaje.test(inp_mensaje)){
        swal({
            title: "Mensaje invalido",
            text: "Este campo es obligatorio y no se admiten caracteres especiales",
            icon: "warning"
        })
        text_Mensaje.focus();
        return false;
    }

    return true

}