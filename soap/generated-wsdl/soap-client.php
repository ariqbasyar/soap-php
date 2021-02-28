<?php
    // https://gist.github.com/umidjons/5907857#file-soap-client-php
    $client = new SoapClient( "http://localhost/wsdls/organization.wsdl", array( 'cache_wsdl' => WSDL_CACHE_NONE ) );
    try {
        $responseLogin = $client->login( 'test_user', 'test_password' ); // call login() from .wsdl
        if($responseLogin == "success") { // if success
            $response = $client->doFilter( $params ); // call doFilter() from .wsdl
            echo $response;
        }
    } catch ( SoapFault $sf ) {
        echo $sf->getMessage();

        // Full SoapFault message
        //  echo '<pre>';
        //  var_dump( $sf );
        //  echo '</pre>';

        // Analyze last request
        //  $xml = $client->__getLastRequest();
        //  echo $xml;
    }
?>
