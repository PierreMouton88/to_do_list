<?php require_once '_partials/header.php';?>
  <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>Modifier une tâche </h1>
            </div>
        </div>
    <div class="row mt-5">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="form-group m-5">
                        <label for="title">Nom de la tâche</label>
                        <input type="text" name="taskedit" id="taskedit" required class="form-control" value="<?= $post->name ?>" >
                    </div>
                    <div class="form-group m-5">
                        <label for="content">Date de fin de la tâche</label>
                        <input type="date" name="dateedit" id="dateedit" class="form-control" required value="<?= $post->to_do_at?>" ></input>
                    </div>
                    <div class="m-3 text-center">
                    <button type="submit" class="btn btn-primary ">Modifier</button>
                    </div> 
                </form>
            </div>
            <?php
            if (isset($_SESSION['edit'])){
                    
            if($_SESSION['edit']): ?>
            <div>
               <h2 class="text-center">La modification a bien été effectuée ! </h2>
               <div class='text-center m-3'><a href='/checklist/index.php'><button type='button' class='btn btn-primary' data-bs-toggle='button' aria-pressed='false' autocomplete='off'> Revenir à l'accueil </button></a></div>";
            </div>
            <?php endif;}
            $_SESSION['edit']= false?>
        </div>

        <?php require_once '_partials/footer.php'; ?>