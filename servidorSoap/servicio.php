<?php 
// servicio encargado de utilizar las funciones de la clase Operaciones
// sin wsdl
require_once __DIR__ . '/../vendor/autoload.php';
use Egh\ServicioWebSoap\Operaciones;

$server = new SoapServer(null, ['uri' => 'http://localhost/servicio']); // null porque no utiliza wsdl
$server->setClass(Operaciones::class);
$server->handle();


