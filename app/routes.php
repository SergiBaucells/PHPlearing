<?php

//return [
//
//    '' => 'app/controllers/home.php',
//    'index.php' => 'app/controllers/home.php',
//    'contact' => 'app/controllers/contact.php',
//    'about' => 'app/controllers/about.php',
//    'news' => 'app/controllers/news.php',
//    'tasks' => 'app/controllers/tasks.php',
//
//    //GET
//    'task' => 'app/controllers/addTask.php',
//    //POST
//    'task' => 'app/controllers/addTask1.php'
//
//];

// Namespaces -> Like Java packages

use Baucellsframework\Router;

$router = new Router();

$router->get('' , 'PagesController@home');
$router->get('index.php' , 'PagesController@home');
$router->get('contact' , 'PagesController@contact');
$router->get('about' , 'PagesController@about');
$router->get('news' , 'PagesController@news');
$router->get('tasks' , 'TasksController@index');
$router->get('task' , 'TasksController@create');
$router->post('task' , 'TasksController@store');

$router->get('error' , 'TasksControllerNOR@error');