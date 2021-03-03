<?php

    // turn off WSDL caching
    ini_set("soap.wsdl_cache_enabled","0");

    function greet($name) {
        return "hello " . $name;
    }

    // initialize SOAP Server
    $params = array('uri' => 'http://localhost:8080/');
    $server=new SoapServer(NULL, $params);

    // register available functions
    $server->addFunction('greet');

    // start handling requests
    $server->handle();

?>