<?php

class Database
{
  public $connection;
  public function __construct($config, $username = 'jd', $password = '')
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';'); // dsn means data source name

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query, $params = [])
  {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);

    return $statement;
  }
}
