<?php

session_start();


if (isset($_SESSION["user_login"]))
{
    header("Location: index.php");
}
$emailerror = ' ';
$passworderror =' ';
if(isset($_REQUEST['submit']))
    {
    $email = strip_tags($_REQUEST['email']);
    $password = strip_tags($_REQUEST['password']);
    }
    if(empty($email)){
        $emailerror="Veuillez entrer un email";
    } else if (empty($password)){
        $passworderror="Veuillez entrer un mot de passe";
    }        else
        {
            try {
                require_once 'connection.php';
        $stmt =$pdo->prepare("SELECT * from user WHERE email=:user_email");
        $stmt->execute([':user_email'=>$email]);
        $id=$stmt->fetch();
        $hash = $id["password"];
                    if ($stmt->rowCount()>0)
                    {
                        var_dump($hash);
                        var_dump($password);
                        if($email==$id['email'])
                        {          $_SESSION["email"]= $id['email'];     
                            if (password_verify($password,$hash ))
                            {
                                echo "salut";
                                $_SESSION["connected"]= true;
                                $_SESSION['id']= $id;
                                $_SESSION['id_user']=$id['id_user'];
                                $_SESSION["user_login"]=true;
                                $loginMsg = "connection réussie !";
                                header('Location: index.php');
                            }
                            else
                            {
                                $passworderror= "Mauvais mot de passe";
                            }
                        }  
                        else
                        {
                                $emailerror = "Mauvaise adresse email";
                        } 
                    } else
                    {
                        $emailerror = "Mauvaise adresse email";
                } 
            }
                catch(PDOException $e){
                  $e->getMessage();
                }
            } 
unset($pdo);
require_once './views/login_view.php';
        ?>