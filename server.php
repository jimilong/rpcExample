<?php
//require_once('jsonRPCServer.php');

require 'vendor/autoload.php';

use Rpc\jsonRPCServer;

include('member.php');

$obj = new Member();

jsonRPCServer::handle($obj) or print('no request');