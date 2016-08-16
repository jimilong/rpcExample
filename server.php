<?php
//require_once('jsonRPCServer.php');

require 'vendor/autoload.php';

use Rpc\jsonRPCServer;

class_alias(App\Member::class, 'Member');

$server = new jsonRPCServer();

$server->handle() or print('no request');