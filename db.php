<?php
//$host = "localhost"; 
//$user = "gleben1t_new"; 
//$password = "&NeLu8&6"; 
// $dbName = "gleben1t_new";
$host = "localhost"; 
$user = "gleben1t_maximum"; 
$password = "zx0*NWBo"; 
$dbName = "gleben1t_maximum";
$con = mysqli_connect($host, $user,$password, $dbname) or die('error 404');
//$sql = 'INSERT INTO users (name)
//VALUES ("Masha");';
$sql = 'select * from users';
try{
  $result = mysqli_query($con, $sql);  
  var_dump($result);
  echo 'end';
}
catch(Throwable $e){
    echo $e->getMessage();
    echo $e->getLine();
}
?>