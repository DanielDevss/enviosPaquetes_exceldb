// VERIFICA SI YA SE ESCOGIO UNA COTIZACIÓN, SI AUN NO, SE INGRESA UNO POR DEFECTO
if(!localStorage.tipo_envio){
    let envio = {
      envio: "sobre",
      peso: null,
    };
    let envioStorage = JSON.stringify(envio);
    localStorage.setItem("tipo_envio", envioStorage);
}

// ACCIONES AL TOMAR UNA OPCION |SOBRE|PAQUETE|
if(check_sobre.checked){
  div_select_peso.style.overflow = "hidden"
  div_select_peso.style.height = "0px"
}

check_sobre.addEventListener("click", () => {
  select_peso.disabled = true;
  div_select_peso.style.overflow = "hidden"
  div_select_peso.style.height = "0px"
  legenda_peso.classList.replace("d-none", "d-block")

  let envio = {
    envio: "sobre",
    peso: null,
  };
  
  
  let envioStorage = JSON.stringify(envio);

  localStorage.setItem("tipo_envio", envioStorage);

  console.log("storage");

});

check_paquete.addEventListener("click", () => {
  select_peso.disabled = false;
  div_select_peso.style.overflow = ""
  div_select_peso.style.height = "80px"
  legenda_peso.classList.replace("d-block", "d-none")

  let envio = {
    envio: "paquete",
    peso: select_peso.value,
  };
  let envioStorage = JSON.stringify(envio);

  localStorage.setItem("tipo_envio", envioStorage);
});

// ACCION AL SELECCIONAR UN PESO
select_peso.addEventListener("change", () => {
  let envio = {
    envio: "paquete",
    peso: select_peso.value,
  };
  let envioStorage = JSON.stringify(envio);

  localStorage.setItem("tipo_envio", envioStorage);
});

//ACCION AL DAR CLICK EN COTIZAR YA
btn_cotizar.addEventListener("click", async () => {
  let linkCotizar = document.createElement("a");
  linkCotizar.href = "cotizar.php";

  let locationCurrent = window.location.href;
  let pageCotizar = locationCurrent.includes("cotizar.php");

  // SI ENCUENTRA EN INDEX REDIRECCIONA A COTIZAR Y TRAE LOS REGISTROS DE LA BASE DE DATOS
  if (!pageCotizar) {
    linkCotizar.click();
  } else {
    getRegistros();
  }

  window.scrollTo({
    top: registrosenvios.offsetTop,
    behavior: "smooth",
  });
});

//URL BASE PARA DEL ENPOINT PARA OBTENER REGISTROS
let urlbase = "controllers/controllers.getregistros.php";

// TRAEMOS REGISTROS AL CARGAR LA PÁGINA PARA QUE NUNCA ESTE VACIO
getRegistros();

// FUNCION DE OBTENER REGISTROS DE LA BASE DE DATOS
async function getRegistros() {
  let filterStorage = localStorage.getItem("tipo_envio");
  let filterObj = JSON.parse(filterStorage);
  let { peso, envio } = filterObj;
  let data;
  let cant_regs;
  peso_td.innerHTML = peso ? peso : "---";
  tipoenvio_td.innerHTML = envio.charAt(0).toUpperCase() + envio.slice(1);

  if (envio === "sobre") {
    data = await getSobres();
    cant_regs = await data.length;
  } else {
    data = await getPaquetes(peso);
    cant_regs = await data.length;
  }
  cantidad_registros.innerHTML = cant_regs;
  listaenvios.innerHTML = ""
  if(cant_regs>0){
    data.forEach((e) => {
        generarCardEnvio({
            costo: e.costo,
            paqueteria: e.paqueteria,
            dias: e.etr_estimada,
            peso: e.peso,
            servicio: e.servicio,
        });
    });
  }else{
    let notText = document.createElement("p");
    notText.textContent = "No hay resultados";
    notText.className = "w-100 p-5 text-center"
    listaenvios.appendChild(notText);
  }
}

// FUNCION PARA RECUPERAR LOS REGISTROS DE SOBRES
async function getSobres() {
  let results = await fetch(`${urlbase}?categoria=sobre`);
  let data = await results.json();

  return data;
}

// FUNCION PARA RECUPERAR LOS REGISTROS DE PAQUETES
async function getPaquetes(peso) {
  let results = await fetch(`${urlbase}?categoria=paquete&peso=${peso}`);
  let data = await results.json();

  return data;
}


// GENERADOR DE LOS CARD ITEM PARA REGISTROS
function generarCardEnvio({ costo, paqueteria, dias, peso, servicio }) {
  costo = costo.replace(/\s+/g, "");
  costo = (costo === "$-") ? false : costo;

  let paqueterias = {
    Redpack: "assets/img/marcas/redpack.png",
    FedEx: "assets/img/marcas/fedex.png",
    Estafeta: "assets/img/marcas/estafeta.png",
    DHL: "assets/img/marcas/dhl.png",
    UPS: "assets/img/marcas/ups.png",
  };

  let cardDiv = document.createElement("div");
  cardDiv.className = "card mb-3";

  // Crear el encabezado de la tarjeta
  let cardHeader = document.createElement("header");
  cardHeader.className =
    "card__header pb-0 p-3 d-flex justify-content-between align-items-center";

  // Crear la imagen del logo
  let logoImg = document.createElement("img");
  logoImg.className = "listaenvios__logo";
  logoImg.src = paqueterias[paqueteria];

  // Crear el botón "Crear envío"
  let crearEnvioBtn = document.createElement("a");
  crearEnvioBtn.href = "#"; // Agrega el enlace deseado
  crearEnvioBtn.className = "btn btn-sm btn-secondary fw-bold px-4";
  crearEnvioBtn.textContent = "Crear envío";

  // Agregar la imagen y el botón al encabezado de la tarjeta
  cardHeader.appendChild(logoImg);
  cardHeader.appendChild(crearEnvioBtn);

  // Crear el cuerpo de la tarjeta
  let cardBody = document.createElement("div");
  cardBody.className = "card-body p-0";

  // Crear la sección de detalles
  let detallesDiv = document.createElement("div");
  detallesDiv.className = "listaenvios__detalles";

  // Crear los elementos de detalles
  let costoEnvioItem = document.createElement("div");
  costoEnvioItem.className = "listaenvios__detalles__item pe-1";
  let costoEnvioSpan = document.createElement("span");
  costoEnvioSpan.textContent = costo;
  if(costo !== false){
    costoEnvioItem.textContent = "Costo de envío: ";
    costoEnvioItem.appendChild(costoEnvioSpan);
  }else{
    costoEnvioItem.textContent = "No disponible"
  }

  let tiempoEntregaItem = document.createElement("div");
  tiempoEntregaItem.className = "listaenvios__detalles__item";
  tiempoEntregaItem.textContent = "Tiempo de entrega: ";
  let tiempoEntregaSpan = document.createElement("span");
  tiempoEntregaSpan.textContent = dias;
  tiempoEntregaItem.appendChild(tiempoEntregaSpan);

  let servicioItem = document.createElement("div");
  servicioItem.className =
    "listaenvios__detalles__item listaenvios__detalles__item--servicio";
  servicioItem.textContent = "Servicio " + servicio;

  let cuponItem = document.createElement("div");
  cuponItem.className = "listaenvios__detalles__item listaenvios__detalles__item--cupon ";
  let felicidadesP = document.createElement("p");
  felicidadesP.className = "felicidades d-flex flex-column-reverse";
  felicidadesP.textContent = "Está guía aplica un descuento del";
  let felicidadesSpan = document.createElement("span");
  felicidadesSpan.textContent = "¡Felicidades!";
  felicidadesP.appendChild(felicidadesSpan);

  let descuentoSpan = document.createElement("span");
  descuentoSpan.className = "descuento";
  descuentoSpan.textContent = "50%";

  cuponItem.appendChild(felicidadesP);
  cuponItem.appendChild(descuentoSpan);

  // Agregar los elementos de detalles al div de detalles
  detallesDiv.appendChild(costoEnvioItem);
  detallesDiv.appendChild(tiempoEntregaItem);
  detallesDiv.appendChild(servicioItem);
  detallesDiv.appendChild(cuponItem);

  // Agregar el div de detalles al cuerpo de la tarjeta
  cardBody.appendChild(detallesDiv);

  // Agregar el encabezado y el cuerpo de la tarjeta al div de la tarjeta
  cardDiv.appendChild(cardHeader);
  cardDiv.appendChild(cardBody);

  // Agregar la tarjeta al documento
  listaenvios.appendChild(cardDiv);
}
