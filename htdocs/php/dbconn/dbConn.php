<!--
/* 
 * Module: dbConn.php
 * Version: 0.0
 * Creator: WEI LEONG
 * Changelog Description:
 * 
 * ----------------------- 
 * 
 */
 -->

<!--
## The PDO class http://php.net/manual/en/class.pdo.php#class.pdo
PDO::beginTransaction — Initiates a transaction
PDO::commit — Commits a transaction
PDO::__construct — Creates a PDO instance representing a connection to a database
PDO::errorCode — Fetch the SQLSTATE associated with the last operation on the database handle
PDO::errorInfo — Fetch extended error information associated with the last operation on the database handle
PDO::exec — Execute an SQL statement and return the number of affected rows
PDO::getAttribute — Retrieve a database connection attribute
PDO::getAvailableDrivers — Return an array of available PDO drivers
PDO::inTransaction — Checks if inside a transaction
PDO::lastInsertId — Returns the ID of the last inserted row or sequence value
PDO::prepare — Prepares a statement for execution and returns a statement object
PDO::query — Executes an SQL statement, returning a result set as a PDOStatement object
PDO::quote — Quotes a string for use in a query
PDO::rollBack — Rolls back a transaction
PDO::setAttribute — Set an attribute
-->

<?php

class dbConn {

   var $conn;
   var $dbhost;
   var $dbname;
   var $dbuser;
   var $dbpass;
   var $timeout;
   var $msg;
   var $tab;

  function __construct($new_dbhost, $new_dbname, $new_dbuser, $new_dbpass, $new_timeout) {
     $this->dbhost = $new_dbhost ;
     $this->dbname = $new_dbname;
     $this->dbuser = $new_dbuser ;
     $this->dbpass = $new_dbpass ;
     $this->timeout = $new_timeout ;
  }
   
   function ConnOpen(){
      try {
         $this->conn = new PDO(
            "mysql:dbhost=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass,
             array(PDO::ATTR_TIMEOUT => $this->timeout, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
         );
         $this->msg= "Connected to [$this->dbname] at [$this->dbhost] successfully.";
         $out = true;
         
      } catch (PDOException $pe) {
      //   die will terminate program directly.
      //   die("Could not connect to the database [$dbname] :" . $pe->getMessage() . $br);
         $this->msg = "Could not connect to the database [$this->dbname] :" . $pe->getMessage();
         $out = false;
      }
      return $out;
   }
   
   function Reconnect($new_count){
      $count = 1;
      $out = false;
      while ($count < $new_count ) {
         if ($this->ConnOpen()) {
            $out = true;
            $count = $new_count;
         } else {
            $count +=1;
         }
      }
   }
   
   function Message(){
      return $this->msg;
   }
   
   function OpenTab($new_sql){  //array[]
         // Breakpoint here will return Empty Array
         $pdostt = $this->conn->prepare($new_sql);
         $pdostt->execute();
         return new DataArr($pdostt->fetchAll());
//         $pdostt = $this->conn->query($new_sql);
//         return $pdostt->fetchAll();
   }
   
   function ConnClose() {
      $this->conn = null;
   }
   
   function BeginTransaction(){
      $this->conn->beginTransaction();
   }
   
   function CommitTransaction(){
       $this->conn->commit();
   }
   
   function RollBackTransaction(){
      $this->conn->rollBack();
   }
   
   function exec($new_sql) {
//      Execute an SQL statement and return the number of affected rows
      return $this->conn->exec($new_sql);
   }
   
   
} //class dbConn
?>