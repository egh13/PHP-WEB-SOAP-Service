<?php
// llamadas a todas las funciones definidas en el servicio
require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/config.php';
$wsdl = $config['wsdlUrl'];

try {
    $client = new SoapClient($wsdl);
} catch (SoapFault $e) {
    die("Error al conectar con el servicio SOAP: " . $e->getMessage());
}

echo "<pre>";

var_dump($client->__getFunctions());
echo "===== getPVP =====\n";

$pvp = $client->getPVP(1);
echo "PVP del producto 1: $pvp\n\n";
echo "===== getStock =====\n";

$stock = $client->getStock(1, 1);
echo "Stock del producto 1 en la tienda 1: $stock\n\n";
echo "===== getFamilias =====\n";

$familias = $client->getFamilias();
print_r($familias);
echo "\n";
echo "===== getProductosFamilia =====\n";

$productos = $client->getProductosFamilia('TV');
print_r($productos);
echo "\n";
echo "</pre>";

