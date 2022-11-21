<?php
session_start();


if (!$_SESSION["user_login"]) {
    header("location: login.php");
};



require_once './connection.php';
$id_to_edit = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['edit']=true;


    try {
        $stmt = $pdo->prepare("UPDATE task  SET `name` = :new_name, `to_do_at`= :todoat WHERE id = :id");
        $stmt->execute([
            'new_name' => $_POST['taskedit'],
            'todoat' => $_POST['dateedit'],
            'id' => $id_to_edit
        ]);
    
        
    } catch (PDOException $th) {
        
    }
};
$stmt = $pdo->prepare("SELECT * FROM task WHERE id = :id");
$stmt->execute([
    'id' => $id_to_edit
]);
$post = $stmt->fetch(PDO::FETCH_OBJ);

unset($pdo);
?>

<?php require_once './views/edit_view.php'; ?>
