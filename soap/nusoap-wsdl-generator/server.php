<?php

    // https://www.developer.com/lang/php/consuming-web-services-with-php-using-nusoap.html
    require 'lib/nusoap.php';

    // turn off WSDL caching
    ini_set("soap.wsdl_cache_enabled","0");

    // Create the server instance
    $server = new soap_server();
    $server->configureWSDL('server', 'urn:server');

    $server->wsdl->schemaTargetNamespace = 'urn:server';

    // Register the "hello" method to expose it
    $server->register('hello',
            array('username' => 'xsd:string'),   // parameter
            array('return' => 'xsd:string'),     // output
            'urn:server',                        // namespace
            'urn:server#helloServer',            // soapaction
            'rpc',                               // style
            'encoded',                           // use
            'Just say hello');                   // description

    // Implement the "hello" method as a PHP function
    function hello($username) {
        return 'Hello, '.$username.'!';
    }

    // Use the request to invoke the service
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)
        ? $HTTP_RAW_POST_DATA : '';
    $server->service(file_get_contents('php://input')); // php 7
    // $server->service($HTTP_RAW_POST_DATA);

?>