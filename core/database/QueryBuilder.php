<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function update($table, $parameters)
    {
        $sql = sprintf(
            // 'UPDATE SET %s (%s) values (%s) where id = $id',
            'UPDATE %s SET email = %s, n_id = %d, password = %g WHERE %d = %d',
            $table,
            $email,
            $n_d,
            $password,
            $table->id,
            $id
            // implode(', ', array_keys($parameters)),
            // ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }




    // $sql = "UPDATE movies SET email = :email,
    //         n_id = :Id,
    //         password = :password
    //         WHERE id = :id";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(':email', $_POST['filmName'], PDO::PARAM_STR);
    // $stmt->bindParam(':Id', $_POST['n_id'], PDO::PARAM_STR);
    // $stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
    // $stmt->execute();



    // public function update($table, $parameters)
    // {
    //   $input=' ';
    //   $paramsKeys = array_keys($parameters);
    //   foreach ($key as $paramsKeys) {
    //     $input += $key +'='+$parameters[$key]+', ';
    //   }
    //     $sql = sprintf(
    //         'UPDATE %s SET %s WHERE id=%d',
    //         $table,
    //         $input,
    //         16
    //     );
    //     var_dump($sql);
    //
    //     try {
    //         $statement = $this->pdo->prepare($sql);
    //
    //         $statement->execute($parameters);
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }
}
