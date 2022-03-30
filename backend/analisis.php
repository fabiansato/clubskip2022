<?php


$datosarray = $_REQUEST;


var_dump($datosarray);


$first_name = $datosarray['first_name'];
$last_name = $datosarray['last_name'];
$email = $datosarray['email'];
$cuit_cuil_dni = $datosarray['cuit_cuil_dni'];
$birthday = $datosarray['birthday'];
$cellphone = $datosarray['cellphone'];
$address_ = $datosarray['address_'];
$address_city = $datosarray['address_city'];
$address_state = $datosarray['address_state'];
$address_postal_code = $datosarray['address_postal_code'];
$trabaja_en_forma_independiente = $datosarray['trabaja_en_forma_independiente'];
$visibilidad_del_local = $datosarray['visibilidad_del_local'];
$taller_y_local_o_solo_taller = $datosarray['taller_y_local_o_solo_taller'];
$reparacion_venta_de_repuestos_o_electrodomesticos = $datosarray['reparacion_venta_de_repuestos_o_electrodomesticos'];
$que_reparan = $datosarray['que_reparan'];
$mayor_18_anos = $datosarray['mayor_18_anos'];
$allow_brand = $datosarray['allow_brand'];
$allow_global = $datosarray['allow_global'];

echo "<br>";

include "config.php";
$sql = "INSERT INTO clubskip(

    first_name,
    last_name,
    email,
    cuit_cuil_dni,
    birthday,
    cellphone,

    address_,
    address_city,
    address_state,
    address_postal_code,
    trabaja_en_forma_independiente,
    visibilidad_del_local,
    taller_y_local_o_solo_taller,
    reparacion_venta_de_repuestos_o_electrodomesticos,
    que_reparan,

    mayor_18_anos,
    allow_global,
    allow_brand
    
    
    ) 
    VALUES(
    
    '".$first_name."',
    '".$last_name."',
    '".$email."',
    '".$cuit_cuil_dni."',
    '".$birthday."',
    '".$cellphone."',

    '".$address_."',
    '".$address_city."',
    '".$address_state."',
    '".$address_postal_code."',
    '".$trabaja_en_forma_independiente."',
    '".$visibilidad_del_local."',
    '".$taller_y_local_o_solo_taller."',
    '".$reparacion_venta_de_repuestos_o_electrodomesticos."',
    '".$que_reparan."',

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

header("Location:  ../exito.html", TRUE, 301);







 
