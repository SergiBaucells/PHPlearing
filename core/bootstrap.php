<?php

$config = require 'config/config.php';

require 'core/lib/functions.php';
require 'vendor/autoload.php';

// PHP -> AUTOLOAD -> En un sol require la resta de coses es carregen automaticament
$pdo = Connection::connect($config);
App::bind('database', new QueryBuilder($pdo));
