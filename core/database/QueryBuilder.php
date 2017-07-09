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
    // public function update($table, $parameters)
    // {
    //
    //     $sql = sprintf(
    //         "UPDATE %s SET %s WHERE %s.id = %d",
    //         $table,
    //         implode(', ', array_keys($parameters) . ':' . implode(', :', array_keys($parameters))),
    //         $table,
    //         $id
    //     );
    //     try {
    //         $statement = $this->pdo->prepare($sql);
    //
    //         $statement->execute($parameters);
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    public function update($table, $parameters)
      {

          $sql = sprintf(
              "UPDATE %s SET %s WHERE %s.id = '%d'",
              $table,
              implode(', ', array_keys($parameters) . ':' . implode(', :', array_keys($parameters))),
              $table,
              $id
          );
          echo $sql;
          // try {
          //     $statement = $this->pdo->prepare($sql);
          //
          //     $statement->execute($parameters);
          // } catch (Exception $e) {
          //     die($e->getMessage());
          // }
      }

    public function delete($table, $parameters) {
      $_POST['id'];
      $sql = sprintf(
          'DELETE FROM %s WHERE customers.id = %s',
          $table,
          $id
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
    //
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
