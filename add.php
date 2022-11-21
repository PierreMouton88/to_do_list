<?php 
session_start();
if (!$_SESSION["user_login"]){
    header("location: login.php");
};

require_once 'connection.php';
    if((isset($_POST['task'])) && ($_SERVER['REQUEST_METHOD'] == 'POST' )){
    $_SESSION['add'] = true;   
    $addtask = $pdo->prepare("INSERT INTO task (name, to_do_at, id_user) VALUES(:name, :todoat, :iduser)");
    $addtask->bindParam(':name',$_POST['task'] );
    $addtask->bindParam(':todoat', $_POST['todoat']);
    $addtask->bindParam(':iduser', $_SESSION['id_user']);
    $addtask->execute();

};

unset($pdo);
require_once "./views/add_view.php"
?>