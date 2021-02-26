<?php

    // turn off WSDL caching
    ini_set("soap.wsdl_cache_enabled","0");

    function mul($a, $b) {
        return $a * $b;
    }

    // initialize SOAP Server
    $params = array('uri' => 'http://localhost:8080/');
    $server=new SoapServer(NULL, $params);

    // register available functions
    $server->addFunction('mul');

    // start handling requests
    $server->handle();

?>