<?php
/**
 * Configuración centralizada del proyecto
 * Detecta automáticamente la URL base según el entorno
 */

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

$host = $_SERVER['HTTP_HOST'];

$scriptPath = $_SERVER['SCRIPT_NAME'];
$baseDir = dirname(dirname($scriptPath));

$baseUrl = $protocol . '://' . $host . $baseDir;

return [
    'baseUrl' => $baseUrl,
    'soapUrl' => $baseUrl . '/servidorSoap/servicio.php',
    'wsdlUrl' => $baseUrl . '/servidorSoap/servicio.wsdl',
    'wsdlServiceUrl' => $baseUrl . '/servidorSoap/servicioW.php',
];
