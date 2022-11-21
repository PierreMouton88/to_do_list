<?php 
require_once 'connection.php';
require_once './models/User.php';

if (isset($_SESSION["user_login"]))
{
    header("Location: login.php");
}
    if(isset($_POST['motdepasse'])){
        
    $mdp = $_POST['motdepasse'];
    $hash= password_hash($mdp, PASSWORD_DEFAULT );
    
    $user = new User ();
    $user->setEmail($_POST['email']);
    $user->setPassword($hash);
    $user->insert();

    $registerconfirm = true;
};


require_once './views/register_view.php';

?>