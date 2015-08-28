<?php
/*
@note Please do not change any variable here.To setup you databse please go dbvals.php
PHP mysql database connector
@developer sam
@ilmtechnosolutions.com
@version V12
*/
require_once 'dbvals.php';

function exequery(){

   $host             =HOST;
   $user             =USER;
   $password         =PASSWORD;
   $database         =DATABASE;


    try {

      $handler = new PDO("mysql:host=$host;dbname=$database","$user","$password");
      $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      return $handler;
    } catch (PDOException $e) {

      echo "Something Wrong with the Database!";
      //echo $e->getMessage();
      die();
    }

}

?>
