<?php

require 'core/bootstrap.php';


$uri = "";

// Pistes uri dinamica
//dd(trim('/about/','/'));
//dd($_SERVER);

// FC -> Front Controller
Router::load('app/routes.php')->direct($uri);

