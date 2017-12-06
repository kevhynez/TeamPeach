<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'peach';


try{
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
  die("Connection failed: " . $e->getMessage());
}
/* error_reporting( ~E_DEPRECATED & ~E_NOTICE );

  define('DBHOST','localhost');
  define('DBUSER','root');
  define('DBPASS','');
  define('DBNAME','peach');

  $conn = mysql_connect(DBHOST,DBUSER,DBPASS,DBNAME);
  $dbconn = mysql_select_db(DBNAME);

  if(!$conn){
    $message = "Connection failed: " . mysql_error();
  }

  if(!$dbconn){
    die("Database Connection failed : " . mysql_error());
  }
  */
?>