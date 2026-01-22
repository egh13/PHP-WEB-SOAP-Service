<?php


 function autoload_b3ac419617984d1fd5138b0788bf1eaf($class)
{
    $classes = array(
        'Egh\ServicioWebSoap\Clases1\EghServicioWebSoapOperacionesServiceCustom2' => __DIR__ .'/EghServicioWebSoapOperacionesServiceCustom2.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b3ac419617984d1fd5138b0788bf1eaf');

// Do nothing. The rest is just leftovers from the code generation.
{
}
