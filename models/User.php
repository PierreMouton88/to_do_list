<?php  
 
 class User{

private int $id;
private string $email;
private string $password;

public function getId() : int
    {
        return $this->id;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email)  : void
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("adresse mail non valide");
        }
        $this->email = $email;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setPassword(string $password) : void
    {
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)){
            throw new Exception("Le mot de passe doit contenir au moins 8 caractères dont une minuscule, une majuscule, un chiffre et un caractère spécial");
        }
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function insert()
    {
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


        $stmt = $pdo->prepare("INSERT INTO user (`email`, `password`) VALUES (:email, :password)");
        $stmt->execute([
            'email' => $this->email,
            'password' => $this->password
        ]);}
        public function login(){

      
    $this->email = strip_tags($this->email);
    $this->password = strip_tags($this->password);
    
    if(empty($email)){
        $emailerror="Veuillez entrer un email";
    } else if (empty($password)){
        $passworderror="Veuillez entrer un mot de passe";
    }        else
        {
            try {
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
};
        $stmt =$pdo->prepare("SELECT * from user WHERE email=:user_email");
        $stmt->execute([':user_email'=>strip_tags($this->email)]);
        $id=$stmt->fetch();
        $hash = $id["password"];
                    if ($stmt->rowCount()>0)
                    {
                        
                        if($email==$id['email'])
                        {          $this->email= $id['email'];     
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
                               
                            }
                        }  
                        else
                        {
                            
                        } 
                    } else
                    {
                  
                } 
            }
                catch(PDOException $e){
                  $e->getMessage();
                }
            } }}


            require_once './views/login_view.php';
?>

