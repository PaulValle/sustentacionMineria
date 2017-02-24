<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-23-21-76-49.compute-1.amazonaws.com");
define("DB_USER", "gsuyxmkwfctjcp");
define("DB_PASS", "5a9e002abd32c90154420fc97d85a07af7bac637fe0a42dc0de7b8859c700cd4");
define("DB_NAME", "d1j6p1pqvglm70");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
