<?php

    $soapParams = array(
        'location' => 'http://localhost:8080/',
        'uri' => 'urn://localhost:8080/',
        'trace' => 1,
    );
    $client = new SoapClient(NULL, $soapParams);

    $greetParam = array(10, 22);
    echo $client->__soapCall('mul', $greetParam) . "\n";

?>