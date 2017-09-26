<?php

namespace App\Controllers;

use Baucellsframework\App;

class TasksController{

    /**
     *
     * Amb Laravel -> Resource controller
     *
     * CRUD
     * C -> Create (create|store)
     * R -> Retrive (index)
     * U -> Update (edit|update)
     * D -> Delete (destroy)
     *
     */

    public function index(){

        // show task
        $database = App::resolve('database');
        $tasks = $database->fetchAll('tasks');
        require 'app/views/tasks.view.php';

    }

    public function create(){

        // Show create form
        require 'app/views/tasks.add.view.php';

    }

    public function store(){

        // store task on database
        $database = App::resolve('database');
        $database->insert('tasks',[
            "name" => $_POST['name']
        ]);
        require 'app/views/successfull.view.php';

    }

}