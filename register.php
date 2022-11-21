<?php 
require_once 'connection.php';

if (isset($_SESSION["user_login"]))
{
    header("Location: login.php");
}
    if(isset($_POST['motdepasse'])){
        
    $mdp = $_POST['motdepasse'];
    $hash= password_hash($mdp, PASSWORD_DEFAULT );
    $add = $pdo->prepare("INSERT INTO user (email, password) VALUES(:email, :motdepasse)");
    $add->bindParam(':email',$_POST['email'] );
    $add->bindParam(':motdepasse', $hash);
    $add->execute();
    $registerconfirm = true;
};


require_once './views/register_view.php';
unset($pdo);
?>