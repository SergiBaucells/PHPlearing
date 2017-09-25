<?php


require 'core/bootstrap.php';


//$_REQUEST = new Request();
//$uri = $request->uri();

$uri = Request::uri();
$type = Request::type();
// FC -> Front Controller
Router::load('app/routes.php')->direct($uri, $type);

