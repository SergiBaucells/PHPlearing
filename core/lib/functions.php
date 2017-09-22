<?php

function dump($value){
echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function dd($value){
    dump($value);
    die();
}

/**
 * OBSOLET.
 *
 * @return PDO
 */
function connect(){
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','QZkcNUSiPaYY4e1Z');
    }catch (PDOException $e){
        die('Error connecting: ' . $e->getMessage() );
    }
}


/**
 * OBSOLET.
 *
 * @return PDO
 */
function fetchAllTasks($pdo){
    $statement = $pdo->prepare('SELECT * FROM tasks');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}