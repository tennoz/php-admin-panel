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
    // public function selectId($table)
    // {
    //     $statement = $this->pdo->prepare("select id from {$table}");
    //
    //     $statement->execute();
    //
    //     return $statement->fetchAll(PDO::FETCH_CLASS);
    // }

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

    public function update($table, $parameters,$id)
    {
      $sql = sprintf(
            "UPDATE %s SET %s WHERE %s.id = '%d'",
            $table,
            implode(', ', ($parameters)),
            $table,
            $id
        );
        // echo $sql;
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
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
}
