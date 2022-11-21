<?php 


    
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "checklist";

try 
{

    $pdo = new PDO ('mysql:host=localhost;dbname=checklist',$db_user,$db_password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
$e->getMessage();
}

?>