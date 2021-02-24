<?php

class Client {
    public function __construct() {
        $params = array(
            'location' => 'http://localhost:8080/',
            'uri' => 'urn://localhost:8080/',
            'trace' => 1,
        );
        $this->instance = new SoapClient(NULL, $params);

    }

    public function mul($a, $b) {
        return $this->instance->__soapCall('mul', $a, $b);
    }
}

$client = new Client;
$param = array(10, 20);
echo $client->instance->__soapCall('mul', $param);
echo "\n";

?>