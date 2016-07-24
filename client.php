<?php
//require_once('jsonRPCClient.php');
require 'vendor/autoload.php';

use Rpc\jsonRPCClient;

$client  = new jsonRPCClient('http://www.long.test:8080/rpcproject/server.php');

try {
    //call this method from network
    echo $client->hello();
}catch(Exception $e) {
    echo$e->getMessage(); 
}