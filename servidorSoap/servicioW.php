<?php 
// servicio encargado de utilizar las funciones de la clase Operaciones
// con wsdl
require_once __DIR__ . '/../vendor/autoload.php';
use Egh\ServicioWebSoap\Operaciones;

$class = Operaciones::class; 

$wsdl = __DIR__ . '/../servidorSoap/servicio.wsdl';
$server = new SoapServer($wsdl);
$server->setClass($class);
$server->handle();


