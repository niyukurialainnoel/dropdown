<?php 
function connectdb(){
      return  $connection =new PDO('mysql:host=localhost;dbname=list','root','');
}