<?php

$database = App::resolve('database');


//INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...)

$database->insert('tasks',[
    "name" => $_POST['name']
]);


require 'app/views/successfull.view.php';