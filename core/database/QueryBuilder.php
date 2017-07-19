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
    public function login($email,$password)
    {
        $statement = $this->pdo->prepare("select * from customers where email='{$email}' and password='{$password}'");

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

    public function update($table, $parameters, $id)
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

    public function delete($table, $id) {
      $sql = sprintf(
          'DELETE FROM %s WHERE %s.id = %s',
          $table,
          $table,
          $id
      );

      try {
          $statement = $this->pdo->prepare($sql);
          $statement->execute();
      } catch (Exception $e) {
          die($e->getMessage());
      }
    }

}
