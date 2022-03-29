<?php


$datosarray = $_REQUEST;


var_dump($datosarray);

$nombre_del_service  = $datosarray['nombre_del_service'];
$first_name = $datosarray['first_name'];
$last_name = $datosarray['last_name'];
$email = $datosarray['email'];
$cuit_cuil_dni = $datosarray['cuit_cuil_dni'];
$birthday = $datosarray['birthday'];
$address_state = $datosarray['address_state'];
$cellphone = $datosarray['cellphone'];
$talle_de_ropa = $datosarray['talle_de_ropa'];
$estas_incluido_en_las_listas_de_whatsapp_del_cts = $datosarray['estas_incluido_en_las_listas_de_whatsapp_del_cts'];
$sos_miembro_del_grupo_de_facebook_del_cts = $datosarray['sos_miembro_del_grupo_de_facebook_del_cts'];
$usas_instagram_como_red_social = $datosarray['usas_instagram_como_red_social'];
$cual_es_tu_funcion_en_el_service = $datosarray['cual_es_tu_funcion_en_el_service'];
$localidad_del_service = $datosarray['localidad_del_service'];
$address_postal_code = $datosarray['address_postal_code'];
$address_ = $datosarray['address_'];
$phone = $datosarray['phone'];
$email_oficial = $datosarray['email_oficial'];
$cantidad_de_personal = $datosarray['cantidad_de_personal'];
$taller_y_local_o_solo_taller = $datosarray['taller_y_local_o_solo_taller'];
$reparacion_venta_de_repuestos_o_electrodomesticos = $datosarray['reparacion_venta_de_repuestos_o_electrodomesticos'];
$de_que_marcas_es_service_oficial = $datosarray['de_que_marcas_es_service_oficial'];
$mayor_18_anos = $datosarray['mayor_18_anos'];
$allow_brand = $datosarray['allow_brand'];
$allow_global = $datosarray['allow_global'];

echo "<br>";

include "config.php";
$sql = "INSERT INTO ctskip(
    nombre_del_service,
    first_name,
    last_name,
    email,
    cuit_cuil_dni,
    birthday,
    provincia_del_service,
    cellphone,
    talle_de_ropa,
    estas_incluido_en_las_listas_de_whatsapp_del_cts,
    sos_miembro_del_grupo_de_facebook_del_cts,
    usas_instagram_como_red_social,
    cual_es_tu_funcion_en_el_service,
    localidad_del_service,
    address_postal_code,
    direccion_del_service,
    telefono_del_service,
    email_oficial,
    cantidad_de_personal,
    taller_y_local_o_solo_taller,
    que_reparan,
    de_que_marcas_es_service_oficial,
    mayor_18_anos,
    allow_global,
    allow_brand
    
    
    ) 
    VALUES(
    '".$nombre_del_service."',
    '".$first_name."',
    '".$last_name."',
    '".$email."',
    '".$cuit_cuil_dni."',
    '".$birthday."',
    '".$address_state."',
    '".$cellphone."',
    '".$talle_de_ropa."',
    '".$estas_incluido_en_las_listas_de_whatsapp_del_cts."',
    '".$sos_miembro_del_grupo_de_facebook_del_cts."',
    '".$usas_instagram_como_red_social."',
    '".$cual_es_tu_funcion_en_el_service."',
    '".$localidad_del_service."',
    '".$address_postal_code."',
    '".$address_."',
    '".$phone."',
    '".$email_oficial."',
    '".$cantidad_de_personal."',
    '".$taller_y_local_o_solo_taller."',
    '".$reparacion_venta_de_repuestos_o_electrodomesticos."',
    '".$de_que_marcas_es_service_oficial."',
    '".$mayor_18_anos."',
    '".$allow_global."',
    '".$allow_brand."'
	

    )";

mysqli_query($con,$sql);




echo "Resultado : <br>";

foreach($datosarray as $llave => $valor) {
    echo $llave . '=' . $valor . PHP_EOL;
    echo "<br>";



}







 
