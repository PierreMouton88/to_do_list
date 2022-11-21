<?php require_once '_partials/header.php';?>

<div class='bg-light container-fluid col-sm-4 mt-5 rounded-2'>
        <div>
        <h1> Ajouter une tâche </h1>
        <div class='container'>
            <form action='' method='post' class='text-center'>
                <div class='p-3'>
                    <label for='email'> Nom de la tâche </label>
                    <div>
                        <input type='text' name='task' id='task' required>
                    </div>
                </div>
                <div class='p-3'>
                    <label for='email'> A faire avant le : </label>
                    <div>
                        <input type='date' name='todoat' id='todoat' required>
                    </div>
                </div>
                <div>
                    <button type='submit' class='btn btn-primary m-3' name="ajouter" >Ajouter </button>
                </div>
            </form>
        </div>
       
        <div class='text-center m-3'><a href='/checklist/index.php'><button type='button' class='btn btn-primary' data-bs-toggle='button' aria-pressed='false' autocomplete='off'> Revenir à l'accueil </button></a></div>";

   

<?php require_once '_partials/footer.php'; ?>