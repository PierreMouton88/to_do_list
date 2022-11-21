<?php 
session_start();
if (!$_SESSION["user_login"]){
    header("Location: login.php");
};
// connexion a la BD
require_once "./connection.php";

//delete
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete']) && isset($_POST['check'])) {

    $sql = "DELETE FROM task WHERE id=:id";
    $statement = $pdo->prepare($sql);

    foreach ($_POST['check'] as $id) {
        $statement->execute(['id' => $id]);
    }
}

//Finish
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['finish']) && isset($_POST['check'])) {

    $sql = "UPDATE task SET is_done = 1 WHERE id=:id";
    $statement = $pdo->prepare($sql);

    foreach ($_POST['check'] as $id) {
        $statement->execute(['id' => $id]);
    }
}


//order 

$order_request = null;

if(isset($_GET['order']) && in_array($_GET['order'], ['asc', 'desc']))
{
    $order_request = 'ORDER BY to_do_at '.$_GET['order'];
}


//display

$result = $pdo->query(
    'SELECT * FROM task WHERE is_done = 0 AND id_user='.$_SESSION['id_user'].' '.$order_request);
$articles = $result->fetchAll();




$date = strtotime(date("Y-m-d"));
unset($pdo);
require_once "./views/index_view.php";

?>