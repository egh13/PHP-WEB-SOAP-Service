<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;
use Egh\ServicioWebSoap\Operaciones;

$config = require __DIR__ . '/../config/config.php';

$class = Operaciones::class;
$uri = $config['wsdlServiceUrl'];
$wsdlGenerator = new PHPClass2WSDL($class, $uri);
$wsdlGenerator->generateWSDL(true);
$wsdlGenerator->save(__DIR__ . '/../servidorSoap/servicio.wsdl');

header("Location: index.php");