<?php
  $host = "177.44.248.98"; 
  $port = "4000";
  $db = "control_db";
  $username = "pgsql";
  $password = "pgsql";

  try {     
    
      $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db;user=$username;password=$password");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      

  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }

class Conexao
{
    private static $conexao;
    
    private function __construct()
    {}
 
    public static function getInstance()
    {
        if (is_null(self::$conexao)) {
            self::$conexao = new \PDO("pgsql:host=177.44.248.98;port=4000;dbname=control_db;user=pgsql;password=pgsql");
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //self::$conexao->exec('set names utf8');
        }
        return self::$conexao;
    }
}

?>
