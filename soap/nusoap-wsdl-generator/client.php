<?php

    // https://www.developer.com/lang/php/consuming-web-services-with-php-using-nusoap.html
    require 'lib/nusoap.php';

    $wsdl = "http://localhost:8080/?wsdl";
    // $wsdl = "https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl";

    // Create client object
    $client = new nusoap_client($wsdl, 'wsdl');

    // Call the hello method
    $result1=$client->call('hello', array('username'=>'Muhammad Ariq Basyar'));
    // $result1 = $client->call('NumberToWords', array("a" => '21'));
    echo $result1 . "\n";

?>
