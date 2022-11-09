<?php

   function getConnection() {
      $host = 'localhost';
      $username ='root';
      $password = '';
      $db ='onealis';
       
      $conn = new mysqli($host, $username, $password, $db) or die("Unable to connect to database!" . $conn -> error);
      return $conn;
   }

   function closeConnection($conn) {
      $conn -> close();
   }

?>