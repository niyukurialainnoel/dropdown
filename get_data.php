<?php
require_once'db.php';
//sleep(1);
$id=$_POST['id'];
$sql="select * from commune where province=$id";
$stmt=connectdb()->prepare($sql);
$stmt->execute();
$commune=$stmt->fetchAll(PDO::FETCH_ASSOC);
$html='';
foreach($commune as $com){
      $html.='<option value='.$com['id'].'>'.$com['nom'].'</option>';
}
echo $html;