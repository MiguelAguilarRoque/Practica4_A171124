<?php
require_once "nusoap.php";
function getEstados($datos){
    if($datos == "Salsas"){
        return join(",",array(
            "Guacamole",
            "Arbol",
            "Verde",
            "Roja"
        ));
    }
    else {
        return "No hay salsas";
    }
}
$server = new soap_server();
$server->register("getEstados");
if( !isset(  $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents ( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>
