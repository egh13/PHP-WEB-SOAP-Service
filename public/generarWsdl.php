<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;
use Egh\ServicioWebSoap\Operaciones;

$class = Operaciones::class;
$uri = "http://localhost/e_servidor/servicio_web_SOAP/servidorSOAP/servicioW.php";
$wsdlGenerator = new PHPClass2WSDL($class, $uri);
$wsdlGenerator->generateWSDL(true);
$wsdlGenerator->save(__DIR__ . '/../servidorSoap/servicio.wsdl');
