
    
    <!DOCTYPE html>
<html lang='fr'>
<head>
<title>Inscription</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Bootstrap CSS v5.2.1 -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'>
</head>
<body class='bg-info'>
<div class='bg-light container-fluid col-sm-4 mt-5 rounded-2'>
        <div>
        <h1> Inscription</h1>
        <div class='container'>
            <form action='/checklist/register.php' method='post' class='text-center'>
                <div class='p-3'>
                    <label for='email'>Adresse mail : </label>
    
                    <div>
                        <input type="email" name='email' id='email' required >
                    </div>
                </div>
                <div class='mt-3'>
                    <label for='password'>Mot de passe </label>
                    <div>
                        <input type='password' name='motdepasse' id='password' required>
                    </div>
                </div>
                <div>
                    <button type='submit' class='btn btn-primary m-3' name='submit'>S inscrire</button>
                </div>
            </form>
        </div>
        <div>

    <?php if(isset($registerconfirm) && $registerconfirm): ?>
<div class='text-center fs-2 mt-3'> <span>Votre inscription a bien été enregistrée, merci beaucoup ! </span></div>
<div class='text-center m-3'><a href='/checklist/login.php'><button type='button' class='btn btn-primary' data-bs-toggle='button' aria-pressed='false' autocomplete='off'> Se connecter </button></a></div>
    <?php endif; ?>
        </div>
</body>
</html>