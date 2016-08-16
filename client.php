<?php
//require_once('jsonRPCClient.php');
require 'vendor/autoload.php';

use Rpc\jsonRPCClient;

$client  = new jsonRPCClient('http://www.long.test:8080/example/server.php');

try {
    //call this method from network
    echo $client->request('Member', 'hello', []);
}catch(Exception $e) {
    echo$e->getMessage(); 
}