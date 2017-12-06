<?php
session_start();
require 'config.php';

$message = '';
$email = ':email';

//Enter the new user into the database

if(!empty($_POST['email'])){
  $records = $conn->prepare('SELECT username FROM user WHERE username = :username');
  $records->bindParam(':username', $_POST['username']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  if(count($results) != 0 ){
    $message = 'Sorry, that email already exists!';
  }

}
if(!empty($_POST['name']) 
   && !empty($_POST['username']) 
   && !empty($_POST['password']) 
   && !empty($_POST['email'])){
     $sql = "INSERT INTO user (name, username, password, email) VALUES(:name, :username, :password, :email)";
     $stmt = $conn->prepare($sql);
     $stmt->bindParam(':name', $_POST['name']);
     $stmt->bindParam(':username', $_POST['username']);
     $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
     $stmt->bindParam(':email', $_POST['email']);
  
     if($stmt->execute()){
        //die('Success');
        header("Location: login.php");
     }else{ 
       //die('Fail');
       $message = 'Sorry there appears to be a problem, try again?';
     }
 } 
?>