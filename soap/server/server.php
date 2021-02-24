<?php

class Server {
    public function __construct() {

    }

    public function mul($a, $b) {
        return $a * $b;
    }
}

$params = array('uri' => 'http://localhost:8080/');
$server = new SoapServer(NULL, $params);
$server->setClass('Server');
$server->handle();

?>