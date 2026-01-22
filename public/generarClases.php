<?php
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Wsdl2PhpGenerator ya no esta mantenido
 * es necesario hacer un cambio en la linea 159 de la clase lib/PhpClass.php
 * 
 *     //if (count($this->implements) > 0) {
*      if(count((is_countable($this->implements) ? $this->implements : [])) > 0)
*        {
*           $ret .= ' implements ' . implode(', ', $this->implements);
*       }
*/

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$configApp = require __DIR__ . '/../config/config.php';

$generator = new Generator();

$wsdlUrl = $configApp['wsdlUrl'];

$generator->generate(new Config([
    'inputFile' => $wsdlUrl,
    'outputDir' => __DIR__ . '/../src/Clases1',
    'namespaceName' => 'Egh\\ServicioWebSoap\\Clases1',
]));


