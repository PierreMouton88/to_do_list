<?php require_once '_partials/header.php';?>
<?php include_once './login.php'?>
<?php  require_once './models/User.php'?>

    <div class="bg-light container-fluid col-sm-4 mt-5 rounded-2">
        <div class="container">
            <form action="login.php" method="post" class="text-center">
                <div class="p-3">
                    <label for="email"> Adresse email : </label>
                    <div>
                        <input type="text" name="email" id="email" required>
                    </div>

                </div>
                <div class="mt-3">
                    <label for="password">Mot de passe : </label>
                    <div>
                        <input type="password" name="password" id="password">

                </div>
                <div>
                    <button type="submit" class="btn btn-primary m-3" name="submit" valuE='submit'>Se connecter</button>
                </div>
            </form>
        </div>
        <div class="text-center p-3">
            <p> Pas encore inscrit ? Inscrivez-vous en cliquant ici :</p>
            <a href="/todolist/to_do_list/register.php"><button type="button" class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">S'inscrire</button></a>
        </div>
    </div>

