<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct( PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function fetchAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /*
     * TODO .
     *
     * @param $table
     * @param $filters
     */
    public function where( $table, $filters){



    }

    public function insert($table,$fields){

        $columns = implode(',',array_keys($fields));
        $values = ":" . implode(', :',array_keys($fields));
        $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
        dd($sql);

        try{
            $statement = $this->pdo->prepare("$sql");
            $statement->execute();
        }catch (\Exception $e){
            die('Algo ha passat al fer el insert!');
        }

    }

}