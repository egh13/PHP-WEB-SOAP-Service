<?php


 function autoload_5b89bdce66938407110fdfdaa8637b87($class)
{
    $classes = array(
        'Egh\ServicioWebSoap\Clases1\EghServicioWebSoapOperacionesService' => __DIR__ .'/EghServicioWebSoapOperacionesService.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5b89bdce66938407110fdfdaa8637b87');

// Do nothing. The rest is just leftovers from the code generation.
{
}
