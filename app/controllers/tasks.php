<?php

// BOOTSTRAP
$pdo = Connection::connect($config);
App::bind('database',$query = new QueryBuilder($pdo));


// FORA BOOTSTRAP
$query = App::resolve('database');
$tasks = $query->fetchAll('tasks');

require 'app/views/tasks.view.php';