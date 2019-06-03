<?php
/**
 *
 */

 namespace Todo\models;

class ConnectDb
{

  private $host;
  private $username;
  private $password;
  private $database;

  public function __construct($host,$username,$password,$database)
  {
    // code...
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;

  }

  public function creatConnection ()
  {

      $connect = mysqli_connect($this->host,$this->username,$this->password);

      if ($connect) {
        // code...
          $selectDb = mysqli_select_db($connect,$this->database);
          if ($selectDb) {
            // code...
            return $connect;
            
          }else {
            // code...
            echo "Database not Found.";
          }
      }else {
        // code...
          echo "Connection failed!";
      }
  }

}

 ?>
