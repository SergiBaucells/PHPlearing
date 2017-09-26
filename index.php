<?php


require 'core/bootstrap.php';

// FC -> Front Controller
Router::load('app/routes.php')->direct(Request::uri(), Request::type());

