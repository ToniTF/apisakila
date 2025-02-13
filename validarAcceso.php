<?php
require 'verificar_JWT.php';
$headers = apache_request_headers();

if (!isset($headers['Authorization'])) {
    http_response_code(401);
    echo json_encode(["error" => "Token no proporcionado"]);
    exit();
}

$token = str_replace("Bearer ", "", $headers['Authorization']);
$datos_usuario = verificarToken($token);

if($datos_usuario["user_id"]!=1){
    http_response_code(401);
    echo json_encode(["error" => "Acceso no autorizado"]);
    exit();
}
?>