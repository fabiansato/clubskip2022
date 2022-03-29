<form class="row g-3 needs-validation"  action ='./backend/analisis.php' novalidate>
<div class="col-xs-12 mt-3" >
    <label for="validationCustom01" class="form-label"><b>Nombre del service*:</b></label>
       <input name="nombre_del_service" placeholder="Nombre del Service" type="text" class="form-control" id="validationCustom01" required>
       <div class="valid-feedback">
         ¡El nombre del service se vé bien!
       </div>
       <div class="invalid-feedback">
         Ingresa el nombre del service
       </div>
     </div>



 
           <div class="col-lg-6 mt-3" >
            <label for="validationCustom01" class="form-label"><b>Nombre*:</b></label>
             <input name="first_name" placeholder="Nombre" type="text" class="form-control" id="validationCustom01" required>
             <div class="valid-feedback">
               ¡El nombre se vé bien!
             </div>
             <div class="invalid-feedback">
               Ingresa tu nombre
             </div>
           </div>


           <div class="col-lg-6  mt-3">
            
               <label for="validationCustom02" class="form-label"><b>Apellido*:</b></label>
             <input  name="last_name" placeholder="Apellido"  type="text" class="form-control" id="validationCustom02" required>
             <div class="valid-feedback" >
               ¡El apellido se vé bien!
             </div>
             <div class="invalid-feedback">
               Ingresa tu apellido
             </div>
           </div>

           
           <div class="col-md-12  mt-3" >

               <label for="validationCustom02" class="form-label"><b>Email*:</b></label>
             <input  name="email" placeholder="Email"  type="text" class="form-control" id="validationCustom03" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,6}$" required>
             <div class="valid-feedback">
               ¡Se vé bien!
             </div>
             <div class="invalid-feedback">
               Ingresá un mail válido
             </div>
           </div>



           <div class="col-md-12  mt-3" >
            <label for="validationCustom02" class="form-label"><b class="nombres">DNI *:</b></label>
          <input  name="cuit_cuil_dni" placeholder="DNI" pattern="\d{1,9}"  
           minlength="6" maxlength="8" type="tel" class="form-control" id="validationCustom05" required>
           <div class="valid-feedback">
             ¡Se vé bien!
           </div>
           <div class="invalid-feedback">
             Ingresá un DNI válido
           </div>
          </div>



       <div class="col-md-12  mt-3" >

         <!--    <label for="validationCustom02" class="form-label"><b>Email*:</b></label>-->
         <label><b>Fecha de nacimiento*:</b></label>
         <input  name="birthday" placeholder="Fecha de nacimiento"  type="date" class="form-control"  id="validationCustom04" required>
         <div class="valid-feedback">
           ¡Se vé bien!
         </div>
         <div class="invalid-feedback">
           Ingresá una fecha de nacimiento válida
         </div>
       </div>

       
       <div class="col-xs-12 mt-3">
        <label for="address_state" class="form-label"><b>Provincia en la que está radicado el Service: *:</b></label>
         <select class="form-control" id="address_state" name="address_state" placeholder="">

         <option value="-" disabled selected value>Lugar de residencia...</option>
   
         <option value="Buenos Aires (GBA)">Buenos Aires (GBA)</option>
     <option value="Buenos Aires (interior)">Buenos Aires (interior)</option>
     <option value="CABA">CABA</option>
   <option value="Catamarca">Catamarca</option>
   <option value="Chaco">Chaco</option>
   <option value="Chubut">Chubut</option>
   <option value="Cordoba">Córdoba</option>
   <option value="Corrientes">Corrientes</option>
   <option value="Entre Rios">Entre Ríos</option>
   <option value="Formosa">Formosa</option>
   <option value="Jujuy">Jujuy</option>
   <option value="La Pampa">La Pampa</option>
   <option value="La Rioja">La Rioja</option>
   <option value="Mendoza">Mendoza</option>
   <option value="Misiones">Misiones</option>
   <option value="Neuquen">Neuquén</option>
   <option value="Rio Negro">Río Negro</option>
   <option value="Salta">Salta</option>
   <option value="San Juan">San Juan</option>
   <option value="San Luis">San Luis</option>
   <option value="Santa Cruz">Santa Cruz</option>
   <option value="Santa Fe">Santa Fe</option>
   <option value="Santiago del Estero">Santiago del Estero</option>
   <option value="Tierra del Fuego, Antartida e Islas del Atlantico Sur">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
   <option value="Tucuman">Tucumán</option>
         
       </select>
       <div class="valid-feedback">
        ¡Tu localidad se vé bien!
      </div>
      <div class="invalid-feedback">
        Ingresa tu localidad
      </div>
      </div>


      <div class="col-md-12  mt-3" >
        <label for="validationCustom02" class="form-label"><b class="nombres"> Celular*:</b></label>
                     <input  name="cellphone" placeholder="Teléfono"  type="tel" class="form-control" pattern="\d{1,20}"  id="validationCustom04" required>
                     <div class="valid-feedback">
                       ¡Se vé bien!
                     </div>
                     <div class="invalid-feedback">
                       Ingresá un teléfono válido
                     </div>
                     <i class="helperer">(Completar código de área sin 15 y sin guiones ni espacios. Ej.: 01161619999)</i>
                   </div>
       

           

           <div class="col-xs-12 mt-3">
             <label for="talle_de_ropa" class="form-label"><b>Talle de ropa*:</b></label>
              <select class="form-control" id="talle_de_ropa" name="talle_de_ropa" placeholder="">
   
     
        
              <option value="s">s</option>
          <option value="m">m</option>
          <option value="l">l</option>
          <option value="xl">xl</option>
          <option value="xxl">xxl</option>
     
              
            </select>
            <div class="valid-feedback">
             ¡Se vé bien!
           </div>
           <div class="invalid-feedback">
             Por favor selecciona tu talle de ropa
           </div>
           </div>
   
           <!--
           <div class="col-md-12" >-->
             <!--    <label for="validationCustom02" class="form-label"><b>Email*:</b></label>-->
             <!-- <input  name="cuit_cuil_dni" placeholder="DNI" pattern="\d{1,9}"  
             minlength="6" maxlength="8" type="tel" class="form-control" id="validationCustom05" required>
             <div class="valid-feedback">
               ¡Se vé bien!
             </div>
             <div class="invalid-feedback">
               Ingresá un DNI válido
             </div>
           </div>
         -->

         
<!-- Multiple Radios -->
<div class="col-xs-12 mt-3" >


  <label class="col-md-12 control-label" for="estas_incluido_en_las_listas_de_whatsapp_del_cts"><b>¿Estás incluído en las listas de Whatsapp del CTS?</b> </label>
  <div class="col-md-12">
  <div class="radio">
    <label for="estas_incluido_en_las_listas_de_whatsapp_del_cts-0">
      <input type="radio"  class="myinput large" name="estas_incluido_en_las_listas_de_whatsapp_del_cts" id="estas_incluido_en_las_listas_de_whatsapp_del_cts-0" value="1" checked="checked">
      Sí
    </label>
  </div>
  <div class="radio">
    <label for="estas_incluido_en_las_listas_de_whatsapp_del_cts-1">
      <input type="radio"  class="myinput large" name="estas_incluido_en_las_listas_de_whatsapp_del_cts" id="estas_incluido_en_las_listas_de_whatsapp_del_cts-1" value="0">
      No
    </label>
  </div>
  </div>
 
  <div class="valid-feedback">
    ¡Se vé bien!
  </div>
  <div class="invalid-feedback">
    Elige una opción
  </div>
 </div>
 
 <!-- Multiple Radios -->
 <div class="form-group mt-3" >
  <label class="col-md-12 control-label" for="sos_miembro_del_grupo_de_facebook_del_cts"><b>¿Sos miembro del grupo de Facebook del CTS? *</b></label>
  <div class="col-md-12">
  <div class="radio">
    <label for="sos_miembro_del_grupo_de_facebook_del_cts-0">
      <input type="radio"  class="myinput large" name="sos_miembro_del_grupo_de_facebook_del_cts" id="sos_miembro_del_grupo_de_facebook_del_cts-0" value="1" checked="checked">
      Sí
    </label>
  </div>
  <div class="radio">
    <label for="sos_miembro_del_grupo_de_facebook_del_cts-1">
      <input type="radio"  class="myinput large" name="sos_miembro_del_grupo_de_facebook_del_cts" id="sos_miembro_del_grupo_de_facebook_del_cts-1" value="0">
      No
    </label>
  </div>
  </div>
  
  <div class="valid-feedback">
    ¡Se vé bien!
  </div>
  <div class="invalid-feedback">
    Elige una opción
  </div>
 </div>
 
 <!-- Multiple Radios -->
 <div class="form-group mt-3" >
  <label class="col-md-12 control-label" for="usas_instagram_como_red_social"><b>¿Usás Instagram cómo red social?</b> </label>
  <div class="col-md-12">
  <div class="radio">
    <label for="usas_instagram_como_red_social-0">
      <input type="radio"  class="myinput large" name="usas_instagram_como_red_social" id="usas_instagram_como_red_social-0" value="1" checked="checked">
      Sí
    </label>
  </div>
  <div class="radio">
    <label for="usas_instagram_como_red_social-1">
      <input type="radio"  class="myinput large" name="usas_instagram_como_red_social" id="usas_instagram_como_red_social-1" value="0">
      No
    </label>
  </div>
  </div>
  
  <div class="valid-feedback">
    ¡Se vé bien!
  </div>
  <div class="invalid-feedback">
    Elige una opción
  </div>
 </div>
 

         <div class="col-xs-12 mt-3">
           <label for="cual_es_tu_funcion_en_el_service" class="form-label"><b>¿Cuál es tu cargo/función en el service?: *</b></label>
            <select class="form-control" id="cual_es_tu_funcion_en_el_service" name="cual_es_tu_funcion_en_el_service" placeholder="" onchange="cambiarOtro(this.value)">
 
      
            <option value="dueno" selected>Dueño</option>
        <option value="encargado">Encargado</option>
        <option value="tecnico">Técnico</option>
        <option value="administrativo">Administrativo</option>
        <option value="otro-6">Otro</option>
   
            
          </select>
          <div class="valid-feedback">
           ¡Se vé bien!
         </div>
         <div class="invalid-feedback">
           Por favor selecciona tu talle de ropa
         </div>
         </div>
       

<div class="sisosdueno mt-6" id="sisosduenio" >
  <br />
  <h4><b  class="sisosduenio">Si sos Dueño, por favor completa la siguiente información:</b></h4>
  <i>Información sobre el Service:</i>

  <br />

  
  <div class="col-xs-12 mt-3" >
    <label for="validationCustom01" class="form-label"><b class="nombres"> Localidad en donde está radicado el Service:</b></label>
       <input name="localidad_del_service" placeholder="Localidad" type="text" class="form-control" id="validationCustom01">
       <div class="valid-feedback">
         ¡La localidad se vé bien!
       </div>
       <div class="invalid-feedback">
         Ingresa el nombre de la localidad.
       </div>
     </div>
      
             
  <div class="col-xs-12 mt-3" >
    <label for="validationCustom01" class="form-label"><b class="nombres"> Código Postal:</b></label>
       <input name="address_postal_code" placeholder="Código Postal" type="text" class="form-control" id="validationCustom01">
       <div class="valid-feedback">
         ¡El código postal vé bien!
       </div>
       <div class="invalid-feedback">
         Ingresa el código postal
       </div>
     </div>

       
  <div class="col-xs-12 mt-3" >
    <label for="validationCustom01" class="form-label"><b class="nombres"> Dirección del Service (solo calle, número y si aplica piso/depto):</b></label>
       <input name="address_" placeholder="Localidad" type="text" class="form-control" id="validationCustom01">
       <div class="valid-feedback">
         ¡La dirección se vé bien!
       </div>
       <div class="invalid-feedback">
         Ingresa el nombre de la dirección.
       </div>
     </div>
      


  <div class="col-md-12  mt-3" >
    <label for="validationCustom02" class="form-label"><b class="nombres"> Teléfono del Service:</b></label>
                 <input  name="phone" placeholder="Teléfono del Service"  type="tel" class="form-control" pattern="\d{1,20}"  id="validationCustom04" >
                 <div class="valid-feedback">
                   ¡Se vé bien!
                 </div>
                 <div class="invalid-feedback">
                   Ingresá un teléfono válido
                 </div>
                 <i class="helperer">(Completar código de área sin 15 y sin guiones ni espacios. Ej.: 01161619999)</i>
               </div>
   

           
  <div class="col-md-12  mt-3" >

    <label for="validationCustom02" class="form-label"><b>Email Oficial:</b></label>
  <input  name="email_oficial" placeholder="Email"  type="text" class="form-control" id="validationCustom03" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,6}$"  >
  <div class="valid-feedback">
    ¡Se vé bien!
  </div>
  <div class="invalid-feedback">
    Ingresá un mail válido
  </div>
</div>



  <div class="col-md-12  mt-3" >
    <label for="validationCustom02" class="form-label"><b class="nombres">Cantidad de personal (incluyendo el dueño):</b></label>
  <input  name="cantidad_de_personal" placeholder="Cantidad de personal (incluyendo el dueño)" pattern="\d{1,9}"  
   type="tel" class="form-control" id="validationCustom05"  >
   <div class="valid-feedback">
     ¡Se vé bien!
   </div>
   <div class="invalid-feedback">
    Ingresá solamente números por favor
   </div>
  </div>


  <!-- Select Basic -->
  <div class="form-group mt-3">
    <label class="col-md-12 control-label" for="taller_y_local_o_solo_taller"><b>¿Taller y local o solo taller?</b></label>
    <div class="col-xs-12 mt-3">
      <select id="taller_y_local_o_solo_taller" name="taller_y_local_o_solo_taller" class="form-control">
        <option value="-" disabled selected value> Elegí taller / local...</option>
        <option value="taller_y_local">Taller y Local</option>
        <option value="solo_taller">Sólo Taller</option>
      </select>
    </div>
  </div>
  
  
  <!-- Select Basic -->
  <div class="form-group mt-3">
    <label class="col-md-12 control-label" for="reparacion_venta_de_repuestos_o_electrodomesticos"><b>¿Reparación, Venta de repuestos o electrodomésticos?</b></label>
    <div class="col-xs-12 mt-3">
      <select id="reparacion_venta_de_repuestos_o_electrodomesticos" name="reparacion_venta_de_repuestos_o_electrodomesticos" class="form-control">
        <option value="-" disabled selected value> Elegí reparación venta de repuestos...</option>
        <option value="solo_reparacion">Solo reparación</option>
        <option value="reparacion_y_venta_de_repuestos">Reparación y venta de repuestos</option>
        <option value="reparacion_y_venta_de_repuestos_y_electrodomesticos">Reparación y venta de repuestos y de electrodomésticos</option>
      </select>
    </div>
  </div>
  
  
  <!-- Select Basic -->
  <div class="form-group mt-3">
    <label class="col-md-12 control-label" for="que_reparan"><b>¿Qué reparan? </b></label>
    <div class="col-xs-12 mt-3">
      <select id="que_reparan" name="que_reparan" class="form-control">
        <option value="-" disabled selected value> Elegí los electrodomésticos que reparan...</option>
        <option value="lavarropas-1">Lavarropas</option>
        <option value="lavavajillas">Lavavajillas</option>
        <option value="heladeras">Heladeras</option>
        <option value="otro-7">Otros</option>
      </select>
    </div>
  </div>
  
  
  <!-- Select Basic -->
  <div class="form-group mt-3">
    <label class="col-md-12 control-label" for="de_que_marcas_es_service_oficial"><b>¿De qué marcas es service oficial? </b></label>
    <div class="col-xs-12 mt-3">
      <select id="de_que_marcas_es_service_oficial" name="de_que_marcas_es_service_oficial" class="form-control">
        <option value="-" disabled selected value> Elegí qué marcas es service oficial...</option>
        <option value="candy">Candy</option>
        <option value="drean_aurora">Drean / Aurora</option>
        <option value="electrolux">Electrolux</option>
        <option value="g_e_mabe">G.E. / Mabe</option>
        <option value="lg">LG</option>
        <option value="longvie">Longvie</option>
        <option value="samsung">Samsung</option>
        <option value="otras-2">Otras</option>
      </select>
    </div>
  </div>
  
  <br />
</div>

   




<!-- Select Basic -->
            <div class="col-12  mt-3">
              <div class="form-check">
                <input name="mayor_18_anos" value="1" class="form-check-input" type="checkbox"  id="mayor_18_anos" required>
                <label class="form-check-label" for="mayor_18_anos">
                  Soy Mayor de 18 años *
                </label>
                <div class="invalid-feedback">
                 Debés ser mayor a 18 años
                </div>
              </div>
            </div>
            <div class="col-12  mt-3">
              <div class="form-check">
                <input name="allow_brand" value="1" class="form-check-input" type="checkbox" id="allow_brand">
                <label class="form-check-label" for="allow_brand">
                   
                  Acepto que Skip me envíe información, promociones, invitaciones y/o encuestas.
                        
                </label>
      
              </div>
            </div>

            <div class="col-12  mt-3">
              <div class="form-check">
                <input name="allow_global" value="1" class="form-check-input" type="checkbox"  id="allow_global">
                <label class="form-check-label" for="allow_global">
                  
                  Acepto que Unilever me envíe información, promociones, invitaciones y/o encuestas de sus marcas o productos.  
                </label>
          
              </div>
            </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrate</button>
  </div>
</form>

<script>

    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>