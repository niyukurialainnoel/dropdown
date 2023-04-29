<?php


function affichercategorie(){
      require_once'db.php';
      $con=connectdb();
      $statement =$con->query("select * from province");
      $listcat=$statement->fetchAll(); 
      return $listcat;
}
