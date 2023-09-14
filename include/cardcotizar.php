<article class="card card-cotizar p-3 mt-lg-5 shadow">
        <div class="card-body text-white">

            <h3 class="card-title pt-3">Cotización instantanea</h3>
            
            <div class="divisor"></div>

            <div class="contenedorchecks">
                <label style="font-size:.9rem" class="form-label w-100 p-3 m-0 text-center">Elige el tipo de envío que deseas realizar.</label>
                
                <div class="d-flex align-items-center justify-content-center text-uppercase fw-bold">

                    <div class="">
                        <div class="form-check mx-3">
                            <input name="checkEnvio" type="radio" class="form-check-input" id="check_sobre">
                            <label for="check_sobre" class="">Sobre</label>
                        </div>
                    </div>
                    
                    <div class="divisor-check"></div>
                    
                    <div class="">
                        <div class="form-check mx-3">
                            <input name="checkEnvio" type="radio" class="form-check-input" id="check_paquete">
                            <label for="check_paquete" class="">Paquete</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mb-3">
                <label for="inpPeso" class="my-2 fw-bold">¿Cuánto pesa?</label>
                <select name="peso" id="inpPeso" class="form-select">
                    <option disabled selected>Seleccionar un peso</option>
                    <option value="0Kg - 5Kg">0Kg - 5Kg</option>
                    <option value="5Kg - 10Kg">5Kg - 10Kg</option>
                    <option value="10Kg - 15Kg">10Kg - 15Kg</option>
                    <option value="15Kg - 20Kg">15Kg - 20Kg</option>
                    <option value="20Kg - 25Kg">20Kg - 25Kg</option>
                    <option value="25Kg - 30Kg">25Kg - 30Kg</option>
                    <option value="30Kg - 35Kg">30Kg - 35Kg</option>
                    <option value="35Kg - 40Kg">35Kg - 40Kg</option>
                    <option value="40Kg - 45Kg">40Kg - 45Kg</option>
                    <option value="45Kg - 50Kg">45Kg - 50Kg</option>
                    <option value="50Kg - 55Kg">50Kg - 55Kg</option>
                    <option value="55Kg - 60Kg">55Kg - 60Kg</option>
                </select>
            </div>

            <button class="btn btn-sm btn-warning text-uppercase shadow-sm d-block mx-auto fw-bold">¡Cotizar ya!</button>
        
            <p class="p-3 mt-5 rounded-3 mb-0" style="border:solid 1px #fff; font-size:.7rem;">Los costos de está cotización son precios estimados basados en los datos que hayas proporcionado. Si eres emprendedor o tienes un negocio, disfruta de nuestras tarifas preferenciales.</p>

        </div>
    </article>